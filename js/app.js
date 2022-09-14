const menu = document.querySelector(".menu");
const openMenu = document.querySelector(".open-menu");
const closeMenu = document.querySelector(".close-menu");

function toggleMenu(){
    menu.classList.toggle("menu_opened");
}

openMenu.addEventListener("click", toggleMenu);
closeMenu.addEventListener("click", toggleMenu);


const menuLinks = document.querySelectorAll(" .menu a[href^='#']");

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        const id = entry.target.getAttribute("id");
        const menuLink = document.querySelector(` .menu a[href^="#${id}"]`);

        if (entry.isIntersecting){
            menuLink.classList.add("selected");
        } else {
            menuLink.classList.remove("selected")
        }
    })
})

menuLinks.forEach(menuLink => {
    menuLink.addEventListener("click", function() {
        menu.classList.remove("menu_opened")
    })

    
})