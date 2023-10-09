const headerBar = document.querySelector('#header');
const dropMenu = document.querySelector('.dropdown-content');
const hero = document.querySelector('#hero');
const navMenu = document.querySelector('.menu');

window.addEventListener('scroll', function () {
    if (this.window.innerWidth > 768) {
        if (window.scrollY === 0 && headerBar.offsetTop === hero.offsetTop) {
            headerBar.style.background = 'var(--blue-gradient)';
            dropMenu.style.background = 'transparent';
            navMenu.style.background = 'transparent';
        } else {
            headerBar.style.background = 'var(--dark-blue)';
            dropMenu.style.background = 'var(--dark-blue)';
        }
    }
});


function menuDisplay() {

    if (this.window.innerWidth > 768) {
        if (window.scrollY === 0 && headerBar.offsetTop === hero.offsetTop) {
            headerBar.style.background = 'var(--blue-gradient)';
            dropMenu.style.background = 'transparent';
            navMenu.style.background = 'transparent';
        }
    } else {
        // menu.style.backgroundColor = 'var(--dark-blue)';
    }

    const menu = document.querySelector('.menu');
    const menuButton = document.querySelector('.menu__button');

    menuButton.addEventListener('click', () => {
        if (menu.style.display != 'flex') {
            menuButton.style.animation = 'spinIn 0.2s linear'
            setTimeout(() => {
                menuButton.classList.remove('fa-bars');
                menuButton.classList.add('fa-x');
            }, 200);
            menu.style.display = 'flex';
            menu.style.animation = 'menuAppear 0.3s ease-in-out';
        } else {
            menuButton.style.animation = 'spinOut 0.2s ease-in-out'
            setTimeout(() => {
                menuButton.classList.remove('fa-x');
                menuButton.classList.add('fa-bars');
            }, 200);
            menu.style.animation = 'menuHide 0.3s ease-in-out';
            setTimeout(() => {
                menu.style.display = 'none';
            }, 250);
        }
    });


}
