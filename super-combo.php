<?php

/*=============================
A ordem para o git é: git add "arqivo", git commit, git pull origin master, git push -u origin master
=============================*/

echo "<b>Neste arquivo tentarei reproduzir tudo o que aprendi até o momento</b>";

echo "<br>";
echo "<br>";
echo "<br>";

/////////////////////////////////////////////

echo "<b>VARIAVEL</b>";
echo "<br>";
//toda variavel começa com $.  O var_dump mostra o numero de strings usada na variavel


 $nome = "Beatriz";


 echo $nome;
 
echo "<br>";

var_dump($nome);

echo "<br>";
echo "<br>";
echo "<br>";


/////////////////////////////////////////////


echo "<b>CONCATENAÇÃO</b>";
echo "<br>";

$afirmação = "Beatrriz ama";

$afirmação2 = "Ricardo";

$afirmaçãoCompleta = $afirmação . " o " . $afirmação2;

echo $afirmaçãoCompleta;

echo "<br>";
echo "<br>";
echo "<br>";

///////////////////////////////////////////////


echo "<b>TIPOS DE VARIAVEIS</b>";
echo "<br>";

echo "<i>Simples</i>";
echo "<br>";
 $nome = "Beatriz";
 $site = 'www.facebook.com';

 $explicação = "Estes exemplos são possiveis de ver apenas no codigo";
 echo $explicação;
 
 $ano = 1998;
 $slario = 5500.99;
 $bloqueado = false;
 //pretendo fazer um "if minha idade x, nasci no ano x"
 echo "<br>";
 echo "<br>";
/////////////////////
echo "Composto";
echo "<br>";
//array é algo que estudarei mais pra frente

 $frutas = array("abacaxi", "laranja", "manga", "etc");
 echo $frutas[2];
 echo "<br>";

 $nascimento = new dateTime;
//esta variavel não pode ser convertida em string, ou seja, reproduzida como um echo

 var_dump($nascimento);
 echo "<br>";
 echo "<br>";
/////////////////////

 echo "<i>Especiais</i>";
 echo "<br>";
 ///esta parte não entendi
 $arquivo = fopen("exemplo-03.php", "r");

 var_dump($arquivo);
///
 echo "<br>";
 $nulo = NULL;
 $vazio = "";
///variavel nulo (null) é a ausencia de valor, não existe. E vazio ($vazio = "") ele foi iniciado, só não tem informação; está reservado na memoria. Portanto, quando se destroi uma variavel, ela é nula, não existe mais. Mas quando eu digo que ela é uma variavel vazia, ela já existe na memoria, tem um espaço reservado.

 echo "<br>";






?>