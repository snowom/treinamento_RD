$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        autoWidth: true,
        nav: true
    });
  });

  
//EXERCICIO 3-B
let getItens = document.querySelectorAll("nav li");

for(let i=0; i<getItens.length;i++){
    getItens[i].textContent = `Item nav ${i+1}`;
}