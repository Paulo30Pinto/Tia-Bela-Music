/*
var toca1 = document.getElementById("son1");
var toca = document.getElementById("son2");
var toca3 = document.getElementById("son3");
var toca4 = document.getElementById("son4");
var toca5 = document.getElementById("son5");
var toca6 = document.getElementById("son6");
var toca7 = document.getElementById("son7");
var toca8 = document.getElementById("son8");
var toca9 = document.getElementById("son9");

var btntoca = document.getElementById("bt1");
var Button1 = document.getElementById("Button1");
var Play1 = document.getElementById("play1");
var Pause1 = document.getElementById("pause1");
  
var texto = document.getElementsByTagName("p").innerHTML;
var busca = document.getElementById("pesq");



function tocar() {
    toca1.play();
    toca.pause();
    toca3.pause();
    toca4.pause();
    toca5.pause();
    toca6.pause();
    toca7.pause();
    toca8.pause();
    toca9.pause();
}
function pause() {
    toca1.pause();
}

function tocar1() {
    toca3.play();
    toca1.pause();
    toca.pause();
    toca4.pause();
    toca5.pause();
    toca6.pause();
    toca7.pause();
    toca8.pause();
    toca9.pause();
}
function pause1() {
    toca3.pause();
}

function tocar2() {
    toca4.play();
    toca1.pause();
    toca.pause();
    toca3.pause();
    toca5.pause();
    toca6.pause();
    toca7.pause();
    toca8.pause();
    toca9.pause();
}
function pause2() {
    toca4.pause();
}

function tocar3() {
    toca5.play();
    toca1.pause();
    toca.pause();
    toca3.pause();
    toca4.pause();
    toca6.pause
    toca7.pause();
    toca8.pause();
    toca9.pause();
}
function pause3() {
    toca5.pause();
}

function tocar4() {
    toca6.play();
    toca1.pause();
    toca.pause();
    toca3.pause();
    toca4.pause();
    toca5.pause();
    toca7.pause();
    toca8.pause();
    toca9.pause();
}
function pause4() {
    toca6.pause();
}
function tocar5() {
    toca7.play();
    toca1.pause();
    toca.pause();
    toca3.pause();
    toca4.pause();
    toca5.pause();
    toca6.pause();
    toca8.pause();
    toca9.pause();
}
function pause5() {
    toca7.pause();
}

function tocar6() {
    toca8.play();
    toca1.pause();
    toca.pause();
    toca3.pause();
    toca4.pause();
    toca5.pause();
    toca6.pause();
    toca7.pause();
    toca9.pause();
}
function pause6() {
    toca8.pause();
}

btntoca.addEventListener("click", function () {
    toca1.play();
    toca.pause();
    toca3.pause();
    toca4.pause();
    toca6.pause();
    toca5.pause();
    toca7.pause();
    toca8.pause();
    toca9.pause();
})
Button1.addEventListener("click", function () {
    toca1.pause();
})

Play1.addEventListener("click", function () {
    toca9.play();
    toca.pause();
    toca3.pause();
    toca4.pause();
    toca6.pause();
    toca5.pause();
    toca7.pause();
    toca8.pause();
    toca1.pause();
})
Pause1.addEventListener("click", function () {
    toca9.pause();
})
*/
var audio = null;
var arquivo = null;
$(function(){


    /**CRIANDO MENO FIXO**/
  //  alert("Ola mundo");
  var nav = $('#fixo');

  $(window).scroll(function () {
      if ($(this).scrollTop() > 5000) {
          //alert("ola mundo");
          nav.addClass("menu-fixo");
      }
      else {
          //alert("ola mundo");
          nav.removeClass("menu-fixo");
          
      }
      
  })

  $("#fixOf").click(function () {

      nav.removeClass("menu-fixo");
      
  });

  $('.play').on('click', function(){
    //alert("Ola Mundo");
    var el = $(this);
    var filename = el.attr('data-file');
   if(audio && arquivo === filename){
    currentTime = 0;
    audio.play();
  }else{
    if(audio){
      audio.pause();
    }
    audio = new Audio(filename);
    arquivo = filename;
    audio.play();
  }

    return false;

  });
  $('.card-body button').click(function(){
    if(audio){
      audio.pause();
    }
    return false;
  })

  
 
  $("#fixOf").on('click', function(){
    $("#aviso").hide();
    sessionStorage.nome = "Aviso";
})

if ((sessionStorage.nome == "Aviso")) {
    $("#aviso").hide();
    
}
 

});

