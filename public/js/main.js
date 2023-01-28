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
        let elementVisible = 50;
        
        if (elementTop < window.innerHeight - elementVisible) {
            animations[i].classList.add("active");
        } else {
            animations[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll",revealElements);
revealElements();

