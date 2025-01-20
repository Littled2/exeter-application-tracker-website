import { onPageLoad } from "/headless-cms-scripts/client-side-router.js";
import { Moving_Points } from "/scripts/moving-points.min.js"


onPageLoad('/', () => {

    new Moving_Points(document.querySelector("#hero-canvas"), 30)
    
    const word = document.getElementById("hero-word")
    let counter = 0
    let options = [ "Grad Scheme", "Placement", "Internship" ]

    setInterval(() => {
        word.innerText = options[counter++ % options.length]
    }, 2000);

})

// onPageLoad('/blog', () => {
//     let headerLinks = Array.from(document.querySelectorAll("header a"))
//     headerLinks.forEach(link => link.classList.remove("text-orange"))
//     document.querySelector('header a[href="/blog"]').classList.add("text-orange")
// })

// onPageLoad('/about', () => {
//     let headerLinks = Array.from(document.querySelectorAll("header a"))
//     headerLinks.forEach(link => link.classList.remove("text-orange"))
//     document.querySelector('header a[href="/about"]').classList.add("text-orange")
// })