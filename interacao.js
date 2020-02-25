function imagem1(){
    document.getElementById('id').src="img/pmc1.jpg";
    setTimeout("imagem2()",3000)
}

function imagem2(){
    document.getElementById('id').src="img/pmc2.png";
    setTimeout("imagem3()",3000)
}

function imagem3(){
    document.getElementById('id').src="img/pmc3.jpg";
    setTimeout("imagem1()",3000)
}