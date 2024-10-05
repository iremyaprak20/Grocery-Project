let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let header = document.querySelector('.header-2');
let allmenuitems = document.querySelector(".menu-item");

allmenuitems.onmouseover = () => {
    setitemstate(true);
};
allmenuitems.onmouseout = () => {
    setitemstate(false);
};

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});


window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY > 150){
        header.classList.add('active');
    }
    else{
        header.classList.remove('active');
    }
}


let countDate = new Date('june 1, 2023 00:00:00 ').getTime();

function CountDown(){

    let now = new Date().getTime();
    gap = countDate - now;

    let second = 1000;
    let minute = second * 60; 
    let hour = minute * 60; 
    let day = hour * 24;

    let d = Math.floor(gap / (day));
    let h = Math.floor((gap % (day)) / (hour));
    let m = Math.floor((gap % (hour)) / (minute));
    let s = Math.floor((gap % (minute)) / (second));

    document.getElementById('day').innerText = d;
    document.getElementById('hour').innerText = h;
    document.getElementById('minute').innerText = m;
    document.getElementById('second').innerText = s;

}

setInterval(function(){
    CountDown();
},1000)


function showDropDownMenu() {
    let menu = document.getElementById("user-menu");
    let icon = document.getElementById("user-items");
    let x = document.getElementById("navbar-header").getBoundingClientRect().top;
    if(x > 0) {
        menu.style.top = `${icon.getBoundingClientRect().top - (x - 30)}px`;
    } else {
        menu.style.top = `${icon.getBoundingClientRect().top + 40}px`;
    }
    if(window.innerWidth < 991) {
        menu.style.left = `${icon.getBoundingClientRect().left - 60}px`;
        menu.style.width = `${160}px`;
    } else {
        menu.style.left = `${icon.getBoundingClientRect().left - 25}px`;
        menu.style.width = "";
    }

    menu.classList.add("show");
}

function closeDropDownMenu(event) {
    if (!event.target.matches('#user-items') && !event.target.matches('.menu-item')) {
        console.log("I closed the menu");
        notFocused();
    }
}

//window.onclick = closeDropDownMenu;

function notFocused() {
    var dropdowns = document.getElementsByClassName("dropdown-menu");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
    }
}


let itemstate = false;
let iconstate = false;
let panelstate = false;
function checkMenu() {
    if(!itemstate && !iconstate && !panelstate) {
        setTimeout(null, 1000);
        notFocused();
    } else {
        showDropDownMenu();
    }
}

function setitemstate(state) {
    itemstate = state;
}
function seticonstate(state) {
    iconstate = state;
}

function setpanelstate(state) {
    panelstate = state;
}

let checkState = setInterval(checkMenu, 150);

