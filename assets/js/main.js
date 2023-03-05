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
};

//Funcao para fazer o efeito digitando
const message = "Família Renovada Sol Nascente";
const text = document.getElementById("text");

if (text) {
  let i = 0;
  let intervalId = setInterval(() => {
    if (i < message.length) {
      text.innerHTML += message[i];
      i++;
    } else {
      clearInterval(intervalId);
    }
  }, 100);
}

// Funcao para o slidershow
var slideIndex = 1;
const slides = document.getElementsByClassName("events-card");
const dots = document.getElementsByClassName("dot");

if (slides.length > 0 && dots.length > 0) {
  showSlides(slideIndex);

  setInterval(function() {
    plusSlides(1);
  }, 4000);
};

function plusSlides(n) {
  if (slides.length > 0 && dots.length > 0) {
    showSlides(slideIndex += n);
  }
};

function currentSlide(n) {
  if (slides.length > 0 && dots.length > 0) {
    showSlides(slideIndex = n);
  }
};
function showSlides(n) {
  if (slides.length > 0 && dots.length > 0) {
    let i;
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "flex";
    dots[slideIndex - 1].className += " active";
  }
}

// Funcao para abrir e fechar o popup do botao de oferta
const buttonOffer = document.querySelector('#buttonoffer');
if (buttonOffer) {
  buttonOffer.addEventListener('click', ()=> {
    const popup = document.querySelector('.popup');
    if (popup) {
      popup.style.display = 'flex';
    }
  });
};

// Verifica se o botão de fechar a popup existe antes de adicionar o event listener
const closeButton = document.querySelector('#close');
if (closeButton) {
  closeButton.addEventListener('click', ()=> {
    const popup = document.querySelector('.popup');
    if (popup) {
      popup.style.display = 'none';
    }
  });
};

// Funcao para copiar a chave pix
const buttonCopy = document.querySelector('#button-copy');

if(buttonCopy){
  buttonCopy.addEventListener('click', ()=> {
    const warning = document.querySelector('.warning');
    const texto = document.getElementById("key").innerText;
    navigator.clipboard.writeText(texto).then(function() {
      warning.innerText = 'Chave Copiada com Sucesso!';
    });
  });
}


// Funcao para mostrar o campo de qual ministerio a pessoa serve se caso ela selecionar sim
const selectOption = document.querySelector('#select');
const inputMinisterio = document.querySelector('#input-ministerio');

if(selectOption && inputMinisterio){
  selectOption.addEventListener('change', () =>{
    if(selectOption.value == 'Sim'){
      inputMinisterio.style.display = 'flex';
    } else {
      inputMinisterio.style.display = 'none';
    }
  });
}

