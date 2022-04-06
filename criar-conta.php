<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

session_start();//Usado para iniciar uma sessão com o usuario, fazendo existir a varivael $_SESSION

require_once('./telas/frag-user-logado.php'); //Verifica se o usuario JÁ ESTA logado, se estiver, retorna para pagina principal

include ('./banco/conectarBanco.php'); // Conectando ao banco
include ('./classes/usuario-class.php'); // Incluindo classes
include ('./classes/categoria-class.php'); // Incluindo classes
$objCategoria = new Categoria($conn); // instancia o obj Categoria
$objUsuario = new Usuario($conn); // instancia o obj Usuario

$tituloGet = $_GET['nome'] ?? '';
$categoriaGet = $_GET['categoria'] ?? '';
$tituloPost = $_POST['titulo-escolhido'] ?? '';
$categoriaPost = $_POST['categoria-escolhida'] ?? '';
$nomeTituloEscolhido = $tituloGet ? $tituloGet : $tituloPost;
$categoriaEscolhido = $categoriaGet ? $categoriaGet : $categoriaPost;
$erroTexto = 'A senhas devem ser iguais!';

//Titulos do datalist
$registrosDatalist = $objCategoria->mostrarCategorias('','');//Retorna todos os registros de titulo
//Função para criar nova conta conta
if(isset($_POST['email'])){
  $success = $objUsuario->criarConta($_POST);
  if($success[0] && $nomeTituloEscolhido && $categoriaEscolhido)
    header("Location: ./categoria-escolhida.php?nome={$nomeTituloEscolhido}&categoria={$categoriaEscolhido}");
  else if ($success[0])
    header('Location: ./categorias.php');
  else{
    session_destroy();
    $erroTexto = $success[1];
    $_GET['erro'] = true;
  }
}

include('./telas/frag-html.php'); //Abertura html e head com boostrap
include("./telas/frag-variaveisPHP-no-js.php"); //SCRIPT passando algumas variaveis de $_SESSION para o JS
include('./telas/style-criar-conta.php'); //css e js
include('./telas/tela-criar-conta.php'); //tela da pagina criar conta
include('./telas/frag-footer.php'); //footer