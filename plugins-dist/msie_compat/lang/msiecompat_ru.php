<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://www.spip.net/trad-lang/
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// C
	'choix_explication' => '<p>Эта опция позволяет улучшить совместимость вашего сайта с Internet Explorer. </p>
<ul>
<li><a href=\'http://jquery.khurshid.com/ifixpng.php\'>iFixPng</a> (<b>default setting</b>) добавить прозрачность PNG файлов для MSIE 5 and 6. </li>
<li><a href=\'http://code.google.com/p/ie7-js/\'>IE7.js</a> исправляет PNG прозрачность and добавляет поддержку CSS2 селекторов для MSIE 5 и 6 (<a href=\'http://ie7-js.googlecode.com/svn/test/index.html\'>полный список селекторов для IE7.js и IE8.js</a>).</li>
<li>IE8.js улучшает IE7.js  CSS селекторами с MSIE 5 по 7.</li>
<li>IE7-squish устраняет три ошибки в  MSIE 6 (включая задвоение margin у floating элементов), но может проявляться side effects. </li>
</ul>', # MODIF
	'choix_ie7' => '<a href=\'http://code.google.com/p/ie7-js/\'>IE7.js</a> corrige les images PNG et ajoute des sélecteurs CSS2 pour MSIE 5 et 6 (<a href=\'http://ie7-js.googlecode.com/svn/test/index.html\'>vous pouvez consulter la liste des sélecteurs compatibles introduits par IE7.js et IE8.js</a>).', # NEW
	'choix_ie7squish' => 'IE7-squish corrige trois bugs de MSIE 6 (notamment la double marge des éléments flottants), mais des effets indésirables peuvent apparaître (le webmestre doit vérifier la compatibilité).', # NEW
	'choix_ie8' => 'IE8.js complète IE7.js en enrichissant les comportements des CSS de MSIE 5 à 7.', # NEW
	'choix_ifixpng' => 'Choix par défaut, <a href=\'http://jquery.khurshid.com/ifixpng.php\'>iFixPng</a> rétablit la semi-transparence les images au format PNG sous MSIE 5 et 6.', # NEW
	'choix_non' => 'Отключить: не добавлять iepngfix на сайт',
	'choix_titre' => 'Совместимость с Internet Explorer (iepngfix)'
);

?>
