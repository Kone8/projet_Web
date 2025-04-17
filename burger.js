let burger = document.querySelector('#burger');
let nav = document.querySelector('nav');


burger.addEventListener('click', function(){

    if(nav.style.display == "block"){
        nav.style.display = "none";
    } else {
        nav.style.display = "block";
    }
});