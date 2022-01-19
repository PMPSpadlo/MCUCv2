require('./bootstrap');

import AOS from 'aos';

AOS.init();

var elements = document.getElementsByClassName("percent");

window.onload = () => {
    for (const item of elements) {
        if (item.innerHTML[0] == "-") {
            item.style.color = "#FF4848";
        } else {
            item.style.color = "#00FF29";
        }
    }
};

const toggleButton = document.getElementsByClassName("toggle-button")[0];
const nav = document.getElementsByTagName("nav")[0];

toggleButton.addEventListener("click", () => nav.classList.toggle("active"));
