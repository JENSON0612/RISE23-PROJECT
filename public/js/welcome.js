new TiltFx(el, [options]);

$(function () {
	$(".layoutHome").click(function () {
	 $(".layoutHome").addClass("is-active");
	});
   });

var options = {
	movement: {
		// The main wrapper.
		imgWrapper : {
			translation : {x: 10, y: 10, z: 30},
			rotation : {x: 0, y: -10, z: 0},
			reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
		},
		// The SVG lines element.
		lines : {
			translation : {x: 10, y: 10, z: [0,70]},
			rotation : {x: 0, y: 0, z: -2},
			reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
		},
		// The caption/text element.
		caption : {
			rotation : {x: 0, y: 0, z: 2},
			reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
		},
		// The overlay element.
		overlay : {
			translation : {x: 10, y: -10, z: 0},
			rotation : {x: 0, y: 0, z: 2},
			reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
		},
		// The shine element.
		shine : {
			translation : {x: 100, y: 100, z: 0},
			reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
		}
	}
}