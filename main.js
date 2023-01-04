// change navbar style on scroll

window.addEventListener('scroll', () => {
	document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0)
})



// show/hide faq answer

var acc = document.getElementsByClassName('accordion');
var i;
var len = acc.length;
for(i = 0; i < len; i++) {
    acc[i].addEventListener('click', function() {
        this.classList.toggle('active');
        var panel = this.nextElementSibling;
        if(panel.style.maxHeight) {
            panel.style.maxHeight = null
        }else {
            panel.style.maxHeight = panel.scrollHeight + 'px'
        }
    })
}


// show/hide nav menu

const menu = document.querySelector(".nav__menu");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-btn");


menuBtn.addEventListener('click', () => {
	menu.style.display = "flex";
	closeBtn.style.display = "inline-block";
	menuBtn.style.display = "none";
})

//close nav menu

const closeNav = () => {
	menu.style.display = "none";
	closeBtn.style.display = "none";
	menuBtn.style.display = "inline-block";
}

closeBtn.addEventListener('click', closeNav)

//scrollbar

let progress = document.getElementById('progressbar');
let totalHeight = document.body.scrollHeight - window.innerHeight;
window.onscroll = function(){
    let progressHeight = (window.pageYOffset / totalHeight) * 100;
    progress.style.height = progressHeight + "%";
}

//Dark Mode Toggle
FN_CHeckDarkMode();
function FN_CHeckDarkMode()
{
var body = document.querySelector("#body");
dark = localStorage.getItem("dark"); // update darkMode when clicked


if(dark == "yes")
{
        body.classList.add("dark");

}
else
{
    body.classList.remove("dark");

}
}

document.querySelector('.toggle').onclick = function(){
    var body = document.querySelector("#body");
    if(body.classList=="dark")
    {
body.classList.remove("dark");
localStorage.setItem("dark", "no");
}
    else
    {
        body.classList.add("dark");
        localStorage.setItem("dark", "yes");

    }
}


// BACK TO TOP

const toTop = document.querySelector(".to-top-section");

window.addEventListener("scroll", () => {
    if(window.pageYOffset > 100) {
        toTop.classList.add("enabled");
    }else{
        toTop.classList.remove("enabled");
    }
})



