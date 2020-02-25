
var slides = document.querySelectorAll('#slides li')
var slideAtual = 0;
var posicaoFinalSlide = slides.length - 1

window.setInterval(function(){
    var ultimaPosicaoSlide = slideAtual ? slideAtual - 1: posicaoFinalSlide;
    slides[ultimaPosicaoSlide].className = '';
    slides[slideAtual].className = 'slide-ativo';
    slideAtual = slideAtual >= posicaoFinalSlide ? 0: slideAtual + 1;
}, 5000)