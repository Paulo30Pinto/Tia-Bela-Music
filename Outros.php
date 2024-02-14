<?php
session_start();

$conexao = mysqli_connect('localhost','root','','musicas');


include_once 'cabecalho.php';


$sql = "SELECT COUNT(*) FROM musicatiabela";
$resulta = mysqli_query($conexao, $sql);

$feth = mysqli_fetch_assoc($resulta);
$fetch = array_shift($feth);
 
$por_pagina = 51;
$total = ceil($fetch/$por_pagina);

//$pagina = isset($_GET["pagina"]) ? intval($_GET['pagina']) : 1;
//$pagina = 1; 
//$pagina = isset($_GET["pagina"]) ? (int)$_GET["pagina"] : 1;
$pagina = isset($_GET["pagina"]) ? ((int)$_GET["pagina"] >= $total ? $total : (int)$_GET["pagina"]) : 1;
$pagina = $pagina < 1 ? 1 : $pagina;
$ofset = ($pagina -1) * $por_pagina;



if(isset($_POST['btPesq'])){

$texto = $_POST['textoPesq'];

$banco = "SELECT * FROM musicatiabela WHERE Genero IN('Blues','Fanck','Gospel') AND Musica like '%$texto%'";
$dados = mysqli_query($conexao,$banco);
while($resultado = mysqli_fetch_array($dados)){
   

    echo"
        <main>    
      <div class='album py-5 bg-light' id='principal'>
      <div class='container'>
        <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3' id='flex'> 
    
            <div class='col' id='linha'>
                        <div class='card shadow-sm'>
                           <div class='audio'>
                                <audio class='musica' id='son1' controls poster='' >
    
                                 <source src='musicas/$resultado[Musica]' type='audio/mpeg'>
       
                               Não foi possivel carregar o audio
                                 </audio>
                            </div> 
                               <div class='card-body'>
                                     <p class='card-text' id='nomeMusica'>$resultado[Nome] - $resultado[Titulo]</p>
                                       <div class='d-flex justify-content-between align-items-center'>
                                          <div class='btn-group'>
                                          <a href='javascript:void(0);' type='button' class='btn btn-sm btn-outline-secondary play' id='bt1' data-file='musicas/$resultado[Musica]'>
                                          <svg xmlns='http://www.w3.org/2000/svg' width='21' height='21' fill='currentColor' class='bi bi-play-fill' viewBox='0 0 16 16'>
                                      <path d='m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z'/>
                                    </svg>
                                          </a>
                                            <button type='button' class='btn btn-sm btn-outline-secondary' id='Button1'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='21' height='21' fill='currentColor' class='bi bi-pause-fill' viewBox='0 0 16 16'>
                                            <path d='M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z'/>
                                          </svg>  
                                            </button>  
                                            <a download='$resultado[Nome] - $resultado[Titulo]' href='musicas/$resultado[Musica]' class='btn btn-sm btn-outline-secondary'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='21' height='21' fill='currentColor' class='bi bi-download' viewBox='0 0 16 16'>
                                            <path d='M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z'/>
                                            <path d='M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z'/>
                                          </svg>  
                                            </a>
                                          </div>
                                           <small class='text-muted'>$resultado[Tempo] min</small>
                                        </div>
                                </div>
                        </div>
                  </div>
            </div>
        </div>
     </div> 
     </main>

                  ";
        }






}
else{
//$banco1 = "SELECT * FROM musicatiabela WHERE Data1 LIKE '2021%'";
//$dados1 = mysqli_query($conexao,$banco1);

$query = "SELECT * FROM musicatiabela WHERE Genero IN('Blues','Fanck','Gospel') ORDER BY Id ASC LIMIT {$por_pagina} OFFSET {$ofset}";
$resultado = mysqli_query($conexao, $query);



//while($resultado = mysqli_fetch_array($dados1)){
  while($paginas = mysqli_fetch_assoc($resultado)){   

echo"
    <main id='principal'>    
  <div class='album py-5 bg-light'>
  <div class='container' >
    <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'> 

        <div class='col' id='linha'>
                    <div class='card shadow-sm'>
                       <div class='audio' >
                            <audio data-file='musicas/$paginas[Musica]' class='musica' controls poster='' id='son1' >

                             <source src='musicas/$paginas[Musica]' type='audio/mpeg'>
   
                           Não foi possivel carregar o audio
                             </audio>
                        </div> 
                           <div class='card-body'>
                                 <p class='card-text' id='nomeMusica'>$paginas[Nome] - $paginas[Titulo]</p>
                                   <div class='d-flex justify-content-between align-items-center'>
                                      <div class='btn-group'>
                                      <a href='javascript:void(0);' type='button' class='btn btn-sm btn-outline-secondary play' id='bt1' data-file='musicas/$paginas[Musica]'>
                                      <svg xmlns='http://www.w3.org/2000/svg' width='21' height='21' fill='currentColor' class='bi bi-play-fill' viewBox='0 0 16 16'>
                                      <path d='m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z'/>
                                    </svg>  
                                      </a>
                                        <button type='button' class='btn btn-sm btn-outline-secondary' onclick='pause()' id='Button1'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='21' height='21' fill='currentColor' class='bi bi-pause-fill' viewBox='0 0 16 16'>
                                        <path d='M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z'/>
                                      </svg>  
                                        </button>  
                                        <a download='$paginas[Nome] - $paginas[Titulo]' href='musicas/$paginas[Musica]' class='btn btn-sm btn-outline-secondary'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='21' height='21' fill='currentColor' class='bi bi-download' viewBox='0 0 16 16'>
                                        <path d='M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z'/>
                                        <path d='M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z'/>
                                      </svg>  
                                        </a>
                                      </div>
                                       <small class='text-muted'>$paginas[Tempo] min</small>
                                    </div>
                            </div>
                    </div>
              </div>
        </div>
    </div>
 </div> 
 </main>

              ";
    }
}
?>

</div>
    </div>
  </div>

</main>

<ul class='pagination'>
	
<?php 
	//$proximo = $pagina +1;
 // $anterior = $pagina -1;
 $proximo = $total;
 $anterior = 1;
	
	$troca_pagina = $proximo <= $total ? true : false;
  $voltar_pagina = $anterior >= 1 ? true : false;
  
  $max_links = 1;
	
	if($total > 1){
		if($voltar_pagina){
			echo "
			
			<li class='page-item'>
			<a class='page-link' href='?pagina={$anterior}' aria-label='Previous'>
			<span aria-hidden='true'>&laquo;</span>
			</a>
			</li>
			";
    }
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
      if($pag_ant >= 1){
        
        echo "
        <li class='page-item'>
        <a class='page-link' href='?pagina={$pag_ant}'>
        <span aria-hidden='true'>$pag_ant</span>
        </a>
        </li>
        ";
      }
    }

    echo "
    <li class='page-item active'>
    <a class='page-link'>$pagina</a>
    </li>
    ";
		/*
		for($i =1; $i < $total +1; $i++){
			echo "
			
			<li class='page-item'>
			<a class='page-link' href='?pagina={$i}'>&nbsp $i &nbsp</a>
			</li>
			";
		}
    */
    
    for($depois = $pagina + 1; $depois <= $pagina + $max_links; $depois++){
      if($depois <= $por_pagina){
        echo "
        <li class='page-item'>
        <a class='page-link' href='?pagina={$depois}'>
        <span aria-hidden='true'>$depois</span>
        </a>
        </li>
        ";
      }
    }
    
		if($troca_pagina){
			echo "
			
			<li class='page-item'>
			<a class='page-link' href='?pagina={$proximo}' aria-label='Next'>
			<span aria-hidden='true'>&raquo;</span>
			</a>
			</li>
			
			";
		}
	}
	
?>

</ul>


<?php
include_once 'rodape.php';

?>

<script>
  /*
var audio = null;
var arquivo = null;

$(function(){


$('.linkmusik').click(function(){
// alert("Oi Blog")
var el = $("audio");
var filename = el.attr('data-file');

 alert(filename);
//  var audio = new Audio(filename);
//  audio.play(); 

})

$(window).scroll(function () {
    if ($(this).scrollTop() > 1000) {
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
$('button:contains(Pause)').click(function(){
  if(audio){
    audio.pause();
  }
  return false;
})


})
*/
</script>