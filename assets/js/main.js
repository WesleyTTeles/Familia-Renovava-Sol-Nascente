// Menu responsivo
const menu = document.querySelector('.menu');
const menuToggle = document.querySelector('.menu-toggle');
const body = document.querySelector('body');

menuToggle.addEventListener('click', () => {
  const isMenuVisible = menu.classList.contains('on');
  body.style.overflow = isMenuVisible ? 'initial' : 'hidden';
  menu.classList.toggle('on');
});

function closeMenu() {
  body.style.overflow = 'initial';
  menu.classList.remove('on');
}

// Funcao para fazer o efeito digitando
// let i = 0;
// const message = "Família Renovada Sol Nascente";
// const text = document.getElementById("text");
// let intervalId;

// intervalId = setInterval(() => {
// if (i < message.length) {
//     text.innerHTML += message[i];
//     i++;
// } else {
//     clearInterval(intervalId);
// }
// }, 100);

// Funcao para o slidershow
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  let i;
  const slides = document.getElementsByClassName("events-card");
  const dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "flex";
  dots[slideIndex-1].className += " active";
}
setInterval(function() {
  plusSlides(1);
}, 3000);

// Funcao para abrir e fechar o popup do botao de oferta
document.querySelector('#buttonOffer').addEventListener('click', ()=> {
  document.querySelector('.popup').style.display = 'flex';
});

document.querySelector('#close').addEventListener('click', ()=> {
  document.querySelector('.popup').style.display = 'none';
});

// Funcao para copiar a chave pix
function copiarTexto() {
  const warning = document.querySelector('.warning');
  const texto = document.getElementById("key").innerText;
  navigator.clipboard.writeText(texto).then(function() {
    warning.innerText = 'Chave Copiada com Sucesso!';
  });
}
document.getElementById("button-copy").addEventListener("click", copiarTexto);