requirejs.config({
	baseUrl:'',
	paths:{
		app:'./app'
	}
});
requirejs(['app/Carousel'],function(Carousel) {
	Carousel.init($('.carousel'));
});
requirejs(['app/goTop']);