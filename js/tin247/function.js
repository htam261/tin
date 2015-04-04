function activeMenu(o) {
	$('li.active').remove('active');
	$(o).addClass('active');
}
function toggleMenu() {
	$('.nav_bottom').toggleClass('active');
}