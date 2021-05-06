require('./bootstrap');

// We need to import the CSS so that webpack will load it.
// The MiniCssExtractPlugin is used to separate it out into
// its own CSS file.
import "../sass/app.scss";

// Burger
(function(){
	var burger = document.querySelector('.burger');
	var nav = document.querySelector('#'+burger.dataset.target);

	burger.addEventListener('click', function(){
		burger.classList.toggle('is-active');
		nav.classList.toggle('is-active');
	});
})();

// Tabs
const tabs = document.querySelectorAll('.tabs li');
const tabContentBoxes = document.querySelectorAll('#tab-content > div');

tabs.forEach((tab) => {
	tab.addEventListener('click', () => {
		tabs.forEach(item => item.classList.remove('is-active'))
		tab.classList.add('is-active');

		const target = tab.dataset.target;
		tabContentBoxes.forEach(box => {
			if (box.getAttribute('id') === target){
				box.classList.remove('is-hidden');
			} else {
				box.classList.add('is-hidden');
			}
		})
	})
});

// Carousel
// Initialize all div with carousel class
var carousels = bulmaCarousel.attach('.carousel', {
	slidesToShow: 1,
	autoplay: true,
	loop: true,
	navigation: false,
	pauseOnHover: false
});

var herocarousels = bulmaCarousel.attach('.hero-carousel', {
	slidesToShow: 1,
	autoplay: true,
	loop: true,
	navigation: false,
	pauseOnHover: false
});

// Loop on each carousel initialized
for(var i = 0; i < carousels.length; i++) {
	// Add listener to  event
	carousels[i].on('before:show', state => {
		console.log(state);
	});
}

for(var i = 0; i < herocarousels.length; i++) {
	// Add listener to  event
	herocarousels[i].on('before:show', state => {
		console.log(state);
	});
}

// Access to bulmaCarousel instance of an element
var element = document.querySelector('#my-element');
if (element && element.bulmaCarousel) {
	// bulmaCarousel instance is available as element.bulmaCarousel
	element.bulmaCarousel.on('before-show', function(state) {
		console.log(state);
	});
}
