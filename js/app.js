const menu = document.querySelectorAll('.menu__list');
const active = document.querySelector('.active')

menu.forEach(el => {
	el.addEventListener('click', function() {
		menu.forEach(item => item.classList.remove('active'));

		this.classList.add('active')
	})
});