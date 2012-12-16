<?php
/**
 * Plugin iView pour SPIP
 * (c) 2012 Phenix
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Déclaration des alias de tables et filtres automatiques de champs
 */
function iview_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['slides'] = 'slides';
	$interfaces['table_des_tables']['slideshows'] = 'slideshows';

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 */
function iview_declarer_tables_objets_sql($tables) {

	$tables['spip_slides'] = array(
		'type' => 'slide',
		'principale' => "oui",
		'field'=> array(
			"id_slide"           => "bigint(21) NOT NULL",
			"titre"              => "text NOT NULL DEFAULT ''",
			"drescriptif"        => "text NOT NULL DEFAULT ''",
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_slide",
		),
		'titre' => "titre AS titre, '' AS lang",
		 #'date' => "",
		'champs_editables'  => array('titre', 'drescriptif'),
		'champs_versionnes' => array(),
		'rechercher_champs' => array("titre" => 8, "drescriptif" => 3),
		'tables_jointures'  => array('spip_slides_liens'),
		

	);

	$tables['spip_slideshows'] = array(
		'type' => 'slideshow',
		'principale' => "oui",
		'field'=> array(
			"id_slideshow"       => "bigint(21) NOT NULL",
			"titre"              => "text NOT NULL DEFAULT ''",
			"maj"                => "TIMESTAMP"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_slideshow",
		),
		'titre' => "titre AS titre, '' AS lang",
		 #'date' => "",
		'champs_editables'  => array('titre'),
		'champs_versionnes' => array(),
		'rechercher_champs' => array("titre" => 8),
		'tables_jointures'  => array(),
		

	);

	return $tables;
}


/**
 * Déclaration des tables secondaires (liaisons)
 */
function iview_declarer_tables_auxiliaires($tables) {

	$tables['spip_slides_liens'] = array(
		'field' => array(
			"id_slide"           => "bigint(21) DEFAULT '0' NOT NULL",
			"id_objet"           => "bigint(21) DEFAULT '0' NOT NULL",
			"objet"              => "VARCHAR(25) DEFAULT '' NOT NULL",
			"vu"                 => "VARCHAR(6) DEFAULT 'non' NOT NULL"
		),
		'key' => array(
			"PRIMARY KEY"        => "id_slide,id_objet,objet",
			"KEY id_slide"       => "id_slide"
		)
	);

	return $tables;
}


?>