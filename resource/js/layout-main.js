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
 * Header - flexslider initialization
 * =======================================
 */

$('.flexslider').flexslider({
	animation: 'fade',
	directionNav: false,
	slideshowSpeed: 8000,
	animationSpeed: 1000,
});

