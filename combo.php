<?php

echo "Hello World!!";

echo "<br>";

echo "PELO AMOR DE DEUS ME SALVA DESSE GIT PUSH";

echo "<br/>";

/////////O echo transforma o texto em aspas em html

///////////////////////

  $nome = "Beatriz";
///$nome é uma variavel, uma variavel sempre começa com $

//  echo ($nome);
  var_dump($nome);

  echo "<br/>";
////var dump mostra a quantidade de string na variavel

///////////////////////////////////////////

  $nome1 = "Beatriz";

  $sobrenome = "Sacon";

  $nomeCompleto = $nome1 . " " . $sobrenome;

  echo $nomeCompleto;

  echo "<br/>";
  ///////////concatenação


  ///////////////////////////////////////
/////PRECISO REVISAR TODA ESSA PARTE EXIT, UNSET E ISSET/////
/*exit;

  echo $nome1;

  echo "<br/>";

  unset($nome1);

  if (isset($nome1))  {

 echo $nome1;
}
*/

///TIPOS DE VARIAVEIS///
/////basico
 $nome = "Beatriz";
 $site = 'www.facebook.com';

 $ano = 1998;
 $slario = 5500.99;
 $bloqueado = false;
///////////////////////////////////////////////////////
//composto
 $frutas = array("abacaxi", "laranja", "manga", "etc");

 /////echo $frutas[2];


 $nascimento = new DateTime();


var_dump($nascimento);

//////////////////////////////////////////////////////
///especial
 $arquivo = fopen("exemplo-03.php", "r");

 ////var_dump($arquivo);

 $nulo = NULL;
 $vazio = "";


 ///variavel nulo (null) é a ausencia de valor, não existe. E vazio ($vazio = "") ele foi iniciado, só não tem informação; está reservado na memoria. Portanto, quando se destroi uma variavel, ela é nula, não existe mais. Mas quando eu digo que ela é uma variavel vazia, ela já existe na memoria, tem um espaço reservado.


//////////////////////////////////

/////SERVIDOR
  $nome = (int)$_GET["a"];

//var_dump($nome);

 ///$ip = $_SERVER["SCRIPT_NAME"]; aqui mostra qual o arquivo foi visto
 $ip = $_SERVER["REMOTE_ADDR"];
 ////remote addr mostra o ip do cliente/usuario que acessou

 echo $ip;




 

?>