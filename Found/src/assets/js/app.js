'use strict'

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    document.body.classList.add('mob');

    const dwMenu = document.querySelector('.dwMenu');
    if(dwMenu){
    	dwMenu.addEventListener("click", function(e) {
    		dwMenu.parentElement.classList.toggle('_active');
    	});
    }
  } else {
    document.body.classList.add('pc');
}

const iconMenu = document.querySelector('.menu__icon');
const bodyMenu = document.querySelector('.menu__body');
if(iconMenu){
	iconMenu.addEventListener("click", function(e) {
		document.body.classList.toggle('_lock')
		iconMenu.classList.toggle('_active');
		bodyMenu.classList.toggle('_active');
	});
}

/*Аккордион*/
let acc = document.getElementsByClassName("action__title");

for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}