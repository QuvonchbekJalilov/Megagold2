// accordion

let selectAccordion = document.querySelectorAll('.card');
let addBorderClass = document.querySelectorAll('.card-header');
let remove = document.querySelectorAll('.card-header');



let buton = document.querySelectorAll('.collapsed');

let nonezero = buton[0];
let noneone = buton[1];
let nonetwo = buton[2];
let nonethree = buton[3];



//loop
for (let x = 0; x < selectAccordion.length; x++) {
    addBorderClass[x].addEventListener('click', () => {
        selectAccordion[x].style.border = "3px solid transparent";
        selectAccordion[x].style.transition = ".5s";
        selectAccordion[x].classList.add('cardDesign')
        nonezero.classList.toggle('shadownone')
    })
}
 