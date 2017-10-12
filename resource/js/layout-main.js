/* =======================================
 * Navigation - mobile toggle menu
 * =======================================
 */

$navToggleBtn = $('.nav-mobile-toggle');
$navMainMenu = $('#nav-main-menu');
$navItemHasDropdown = $('.nav-main-item.has-dropdown');

$navToggleBtn.click(function() {
	$navMainMenu.toggle();
});

$navItemHasDropdown.click(function() {
	$(this).find('.nav-dropdown-menu').toggle();
});

/* =======================================
 * 首頁 Header - flexslider initialization
 * =======================================
 */

$('#index-header > .flexslider').flexslider({
	animation: 'fade',
	directionNav: false,
	slideshowSpeed: 8000,
	animationSpeed: 1000,
});

/* =======================================
 * 試用品申請｜Trial - flexslider initialization
 * =======================================
 */

$('#trial-recommend > .flexslider').flexslider({
	animation: "slide",
	directionNav: false,
	controlNav: false,
	slideshowSpeed: 4000,
	animationSpeed: 600,
});
