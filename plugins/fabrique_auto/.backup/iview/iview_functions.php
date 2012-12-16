<?php 

/* On ajoute le javascript de iView */
function iview_insert_head($flux) {

	/* La lib iView */
	$flux .= '<script type="text/javascript" src="'.find_in_path('js/iview.min.js').'"></script>';
	/* Raphael JS */
	$flux .= '<script type="text/javascript" src="'.find_in_path('js/raphael-min.js').'"></script>';
	/* jQuery easing */
	$flux .= '<script type="text/javascript" src="'.find_in_path('js/jquery.easing.js').'"></script>';
	/* iView Packed */
	$flux .= '<script type="text/javascript" src="'.find_in_path('js/iview.pack.js').'"></script>';

	$flux .= '
	<script type="text/javascript">
		$(document).ready(function() {
		    $("#iview").iView({
		        fx: "random", // Specify sets like: "left-curtain,fade,zigzag-top,strip-left-fade"
		        easing: "easeOutQuad", // for the complete list http://jqueryui.com/demos/effect/easing.html
		        strips: 20, // Number of strips for strip animations
		        blockCols: 10, // Number of block columns for block animations
		        blockRows: 5, // Number of block rows for block animations
		        captionSpeed: 500, // Caption transition speed
		        captionEasing: "easeInOutSine", // Caption transition easing effect
		        captionOpacity: 1, // Caption opacity
		        animationSpeed: 500, // Slide transition speed
		        pauseTime: 5000, // How long each slide will show
		        startSlide: 0, // Set starting Slide (0 index)
		        directionNav: true, // Next & Previous navigation
		        directionNavHoverOpacity: 0.6, // Fade on hover
		        controlNav: true, // 1,2,3,4... navigation
		        controlNavNextPrev: true, // previous,next navigation
		        controlNavHoverOpacity: 0.6, // Navigation fade on hover
		        controlNavThumbs: false, // Show thumbs navigation
		        controlNavTooltip: true, // Show tooltip image previewer
		        autoAdvance: true, // Force auto transitions
		        keyboardNav: true, // Use left & right arrows
		        touchNav: true, // Use Touch swipe to change slides
		        pauseOnHover: false, // Stop slider while hovering
		        nextLabel: "Next", // To set the string of the next button (Multilanguage use)
		        previousLabel: "Previous", // To set the string of the previous button (Multilanguage use)
		        playLabel: "Play", // To set the string of the play button (Multilanguage use)
		        pauseLabel: "Pause", // To set the string of the pause button (Multilanguage use)
		        closeLabel: "Close", // To set the string of the close button (Multilanguage use)
		        randomStart: false, // Start on a random slide
		        timer: "Pie", // Timer style: "Pie", "360Bar" or "Bar"
		        timerBg: "#000", // Timer background
		        timerColor: "#EEE", // Timer color
		        timerOpacity: 0.5, // Timer opacity
		        timerDiameter: 30, // Timer diameter
		        timerPadding: 4, // Timer padding
		        timerStroke: 3, // Timer stroke width
		        timerBarStroke: 1, // Timer Bar stroke width
		        timerBarStrokeColor: "#EEE", // Timer Bar stroke color
		        timerBarStrokeStyle: "solid", // Timer Bar stroke style
		        timerX: 10, // Timer X position threshold
		        timerY: 10, // Timer Y position threshold
		        tooltipX: 5, // Tooltip X position threshold
		        tooltipY: -5, // Tooltip Y position threshold
		        onBeforeChange: function(){}, // Triggers before a slide transition
		        onAfterChange: function(){}, // Triggers after a slide transition
		        onSlideshowEnd: function(){}, // Triggers after all slides have been shown
		        onLastSlide: function(){}, // Triggers when last slide is shown
		        onAfterLoad: function(){}, // Triggers when slider has loaded
		        onPause: function(){}, // Triggers when slider has paused
		        onPlay: function(){} // Triggers when slider has played
		    });
		});
	</script>
	';

	return $flux;
}

/* On ajoute les CSS */
function iview_insert_head_css($flux) {
	$flux .= '<link rel="stylesheet" href="'.find_in_path('css/iview.css').'" type="text/css" media="screen" />';

	return $flux;
}


?>