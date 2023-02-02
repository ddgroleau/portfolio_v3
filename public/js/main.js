/**
 * Scroll Animation
 */
const scrollElementIntoView = (id) => {
    document.getElementById(id)
            .scrollIntoView({
                behavior: 'smooth'
            });
};

const revealElements = () => {
    const animations = document.querySelectorAll(".reveal");
    for (let i = 0; i < animations.length; i++) {
        let elementTop = animations[i].getBoundingClientRect().top;
        let elementVisible = window.innerWidth <= 768 ? -50 : 50;
        if (elementTop < window.innerHeight - elementVisible) {
            animations[i].classList.add("active");
        } else {
            animations[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll",revealElements);
revealElements();


/**
 * Theme Toggle
 */
const activateToggle = (shouldToggleDark) => {
    const round = document.querySelector('.round');
    const slider = document.querySelector('.slider');
    const lightModeIcon = document.querySelector('.light-mode');
    const darkModeIcon = document.querySelector('.dark-mode');

    if(shouldToggleDark) {
        round.classList.add('active');
        slider.classList.add('active');
        lightModeIcon.classList.add('active');
        darkModeIcon.classList.remove('active');
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
    } else {
        round.classList.remove('active');
        slider.classList.remove('active');
        darkModeIcon.classList.add('active');
        lightModeIcon.classList.remove('active');
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }
}

const toggleSwitch = document.querySelector('.theme-switch');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
    activateToggle(currentTheme === 'light');
}

const switchTheme = (e) => {
    activateToggle(
        document.documentElement.getAttribute('data-theme') !== 'light'); 
}

toggleSwitch.addEventListener('click', switchTheme, false);


/**
 * Hamburger Menu
 */
const hamburger = document.querySelector('.toggle-btn');
const mobileNav = document.querySelector('.mobile-nav');

const toggleMobileNav = () => {
    if(hamburger.classList.contains("active")) {
        hamburger.classList.remove("active");
        mobileNav.classList.remove("active");
    } else {
        hamburger.classList.add("active");
        mobileNav.classList.add("active");
    }
}

hamburger.addEventListener('click',toggleMobileNav);