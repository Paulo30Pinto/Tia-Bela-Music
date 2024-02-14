$(document).ready(function(){
  Chama();
    // BOTAO PARA CADASTRAR MUSICA
    $("#formArquivo").submit(function(event){
        event.preventDefault();
       // var btEnviar = $("#btEnviar").text();
        var formArquivo = new FormData(this);
        $.ajax({
            url:"Conexao.php",
            method:"post",
            data:formArquivo,
            dataType:"json",
            processData:false,
            contentType:false,
        })
        alert("Musica Enviada Com Sucesso...");
        $("#arq").val("");


    })

    // BOTAO PARA PESQUISAR MUSICA
    $("#btPesq").click(function(event){
        event.preventDefault();
        var btPesq = $(this).text();
        var texto = $("#textoPesq").val();

        $.ajax({
            url:"Conexao.php",
            method:"post",
            data:{btPesq:btPesq,texto:texto},
            success:function(dados){
                $("#resultado").html(dados);

            }
        })

     //   alert("Ola");
        
    })

    function Chama(){
        $.ajax({
            url:"home.php",
            method:"post",
           
            success:function(dados){
                $("#resultado").html(dados);

            }
        })

    }
      //BOTAO HOME
      $("#home").click(function(event){
        event.preventDefault();
        alert("Voce Esta no home");
    /*  $.ajax({
        url: "home.php",
        method: "post",

        success:function(dados){
            $("#resultado").html(dados);
        }
      }) */
    })
})



