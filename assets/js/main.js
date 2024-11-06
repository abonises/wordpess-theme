document.addEventListener('DOMContentLoaded', () => {
	const swiper = new Swiper('.swiper-container', {
		loop: true,
		slidesPerView: 3,
		centeredSlides: true,
		spaceBetween: 10,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	})
})
