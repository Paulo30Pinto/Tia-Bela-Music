$(document).ready(function() {

    dados();
    //BUSCAR MUSICA PARA PAGINA PRINCIPAL
    function dados() {

        $.ajax({
            url: "ConexaoCarregarDados.php",
            method: "post",
            success: function(dados) {
                $("#dados").html(dados).text();
            }
        })
    }



    //CADASTRAR NOVA MUSICA
    $("#formMusica").submit(function(event) {
        event.preventDefault();
        var formArq = new FormData(this);
        $.ajax({
            url: "ConexaoCadastro.php",
            method: "post",
            data: formArq,
            dataType: "json",
            contentType: false,
            processData: false,
        })

        $("#nome").val('');
        $("#titulo").val('');
        $("#album").val('');
        $("#genero").val('');
        $("#tempo").val('');
        $("#data1").val('');
        $("#arqMusica").val('');
        $("#novo").val('');
        $("#destaque").val('');
    })

    //BUSCAR MUSICA PARA ALTERAR

    $("#busca2").click(function(event) {
        // event.preventDefault();
        var btBusca = $(this).text();
        var valor = $("#busca1").val();
        $.ajax({
            url: "ConexaoCadastro.php",
            method: "post",
            //dataType: "json",
            data: { btBusca: btBusca, valor: valor },
            success: function(dados) {
                $("#mostra").html(dados).text();

            }
        })

    })

    //  PEGAR O ID PARA ALTERAR 

    $(".link").click(function(event) {
        event.preventDefault();
        var id = $(this).data('idmusica');

        $("#formAlt").show();
        $("#busca1").hide();
        $("#busca2").hide();
        $("#formMusica").hide();
        $("#formEditar").hide();
        $.ajax({
            url: "ConexaoCadastro1.php",
            method: "post",
            dataType: "json",
            data: { idMusica: id },
            success: function(dados) {
                var idPri = $("#valor1").html(dados.Id).text();
                $("#idPri").val(idPri);
                var nome = $("#valor1").html(dados.Nome).text();
                $("#nome1").val(nome);
                var titulo = $("#valor1").html(dados.Titulo).text();
                $("#titulo1").val(titulo);
                var album = $("#valor1").html(dados.Album).text();
                $("#album1").val(album);
                var genero = $("#valor1").html(dados.Genero).text();
                $("#genero1").val(genero);
                var tempo = $("#valor1").html(dados.Tempo).text();
                $("#tempo1").val(tempo);
                var data1 = $("#valor1").html(dados.Data1).text();
                $("#data11").val(data1);
                var file = $("#valor1").html(dados.Musica).text();
                $("#arqMusica11").val(file);
                var novo = $("#valor1").html(dados.Novo).text();
                $("#novo1").val(novo);

                var destaque = $("#valor1").html(dados.Destaques).text();
                $("#destaque").val(destaque);

            }


        })

    })



    // CADASTRAR MUSICA ALETARADA

    $("#formMusicaAlt").submit(function(event) {
        event.preventDefault();
        var formArq = new FormData(this);
        $.ajax({
                url: "ConexaoCadastro1.php",
                method: "post",
                data: formArq,
                dataType: "json",
                contentType: false,
                processData: false,
            })
            /*
                    $("#nome1").val('');
                    $("#titulo1").val('');
                    $("#album1").val('');
                    $("#genero1").val('');
                    $("#tempo1").val('');
                    $("#data11").val('');
                    $("#arqMusica1").val('');
                    $("#novo1").val(''); */

    })









    //ILIMINAR MUSICA 
    $(".link1").click(function(event) {
        event.preventDefault();
        var idIlim = $(this).data('idmusica1');
        var file = $("#arqMusica11").val();
        $.ajax({
            url: "ConexaoCadastro1.php",
            method: "post",
            data: { idIlim: idIlim, file: file },

        })


    })


    //LOGIN ADMINISTRADOR
    $("#btLogin").click(function(event){
        event.preventDefault();
        var btLogin = $(this).text();
        var email = $("#email").val();
        var pass = $("#pass").val();
        $.ajax({
            url: "ConexaoLogin.php",
            method: "post",
            dataType:"json",
            data:{btLogin:btLogin,email:email,pass:pass},
            success: function(dados){
                var emailRetorno =$("#valor").html(dados.email).text();
                var passRetorno = $("#valor").html(dados.pass).text();
                var emailRetorno1 =$("#valor").html(dados.email1).text();
                var passRetorno1 = $("#valor").html(dados.pass1).text();
                 if((emailRetorno==email && passRetorno==pass) || (emailRetorno1==email && passRetorno1==pass) ){
                      window.open("cadastro.php","_self");
                }else{
                       alert("nao entrou");
                  }
            }
            
        })
       
       
        //window.open("cadastro.php");
    })

})