document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    document.getElementById('container').addEventListener('click', ()=>{
		navLinks.classList.remove('active');
		//navLinks.style.display='none';
	});

    document.getElementById('container').addEventListener('touchstart', ()=>{
		navLinks.classList.remove('active');
		//navLinks.style.display='none';
	});
});

