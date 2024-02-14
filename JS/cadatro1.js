$(document).ready(function() {

//alert("viva")
    $("#busca1").hide();
    $("#busca2").hide();
    $("#formMusica").show();
    $("#formAlt").hide();
    $("#formEditar").hide();
    $("#oculto").hide();
    

    $("#Adim").click(function(){
      //  alert("viva");
        $("#oculto").show();
        $("#oculto").hide();
    })
        




    $("#Ad").click(function() {
         
        $("#formMusica").show();
        $("#formAlt").hide();
        $("#formEditar").hide();
        $("#busca1").hide();
        $("#busca2").hide();
        $("#oculto").hide();

    });

    $("#ini").click(function() {


        $("#formMusica").hide();
        $("#formAlt").hide();
        $("#formEditar").show();
        $("#busca1").show();
        $("#busca2").show();
        $("#oculto").hide();


    });
    $(".clicar").click(function() {
        $("#formMusica").hide();
        $("#formEditar").show();
        $("#oculto").hide();
    });

    $("#fale").click(function(){
        $("#busca1").hide();
        $("#busca2").hide();
        $("#formMusica").hide();
        $("#formAlt").hide();
        $("#formEditar").hide();
        $("#oculto").show();

    })





    



})



