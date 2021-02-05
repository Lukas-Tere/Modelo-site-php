<?php
session_start();
if((!isset ($_SESSION['txtLogin']) == true) and (!isset ($_SESSION['txtSenha']) == true))
{
  unset($_SESSION['txtLogin']);
  unset($_SESSION['txtSenha']);
  }
if ($_SESSION == true){
    $logado = $_SESSION['txtLogin'];
    $id = $_SESSION["id usuário"];
    $acesso = $_SESSION['acesso'];
    $ativo = $_SESSION['ativo'];
    if($ativo == 0){
        $mensagem = "Ative a conta, email de ativação já enviado";
        header("location: index.php?&alerta=$mensagem");
    } else if ($ativo == 1){

    }
}
?>
<div style="margin-left: 15px; margin-right: 15px">
<h3>Aprenda a tocar violão sozinho - aula 1b</h3>
<p>Nesta aula você está aprendendo como estudar, quais as partes do violão, o nome das cordas do violão, como segurar um violão.
Aprenderemos também a ter senso rítmico e uma noção básica de compasso.
Também aprenderemos dois acordes básicos para começarmos a prática do violão.
Bom Estudo!!!</p>

<p><strong>Anatomia do Violão</strong> <br> 1. Corpo
É o local onde está a boca, o rastilho e o cavalete. Em violões elétricos, também são encontradas outras partes neste local, como a saída, os botões de ajuste, etc. <br>

1.1. Boca- É o "buraco" que está no meio do corpo do violão. É por este local que o som se propaga.
</p> <img src="https://primeirosacordes.com.br/images/stories/violao/partes-do-volo.jpg" alt="cordas"> <br>

<p><strong>Cordas do Violão</strong> <br>
O nome das cordas soltas da guitarra ou violão, começando pela primeira corda, contando de baixo para cima são: 1º corda – mi, 2º corda – si, 3º corda – sol,4º corda – ré, 5º corda – lá, 6º corda – mi.
</p>
<p><strong>Como Segurar um Violão</strong> <br> Existem duas maneiras de se posicionar o violão ao seu corpo:
Forma clássica - Violão na perna esquerda, pé apoiado num suporte, braço com uma inclinação de 45 º <br>
</p> <img src="https://primeirosacordes.com.br/images/stories/violao/postura-violao.jpg" alt="cordas"> <br>
<p>Forma popular - Violão apoiado na perna direita, braço com uma inclinação de 45º</p>
</p> <img src="https://primeirosacordes.com.br/images/stories/violao/posicao-popular-violao.jpg" alt="cordas"> <br>
<p>Posição da mão direita e mão esquerda. Como montar os seus primeiros acordes. Explicação detalhada de todo o posicionamento do braço e da mão. Esta aula está dividida em 4 partes: aulas 1a, 1b, 1c, 1d</p>
<p><strong>Posição da mão esquerda</strong> <br>
É muito importante que ao posicionar o violão o aluno centralize o polegar da mão esquerda no meio do braço do violão em forma de positivo. <br>
</p> <img src="https://primeirosacordes.com.br/images/stories/violao/posicionamento-da-mao-esquerda.jpg" alt="cordas"> <br>
<p>Ao pressionar as cordas o aluno usará a ponta dos dedos, para ser mais claro, a cabeça do dedo nas cordas.</p> 
<h3><strong>As Cifras</strong></h3>
<p>As cifras são os nomes que damos aos acordes, para isso precisamos saber os nomes das notas musicais que são:
 
Dó Ré Mi Fá Sol Lá Si
 
Para cada uma dessas notas damos o nome de uma letra,começando pela letra A que corresponde à nota Lá:
 
A=lá ; B=si ; C=dó ; D=ré ; E=mi ; F=fá ; G=sol
Portanto:
A = Lá maior a letra “A” corresponde à nota Lá, como ela está sozinha significa que o acorde é maior.
 
Am = Lá menor a letra “A” corresponde a nota Lá, e a letra “m” significa que o acorde é menor .
 
A7=Lá com sétima a letra “A” corresponde à nota Lá, e o nº 7 que o acorde é com sétima.</p>
<h3><strong>Os Primeiros Acordes</strong></h3>
<p>Pra podermos começar já aprendendo a tocar uma música nós vamos aprender a montar 2 acordes ,entre eles : E e A.</p> <br>
 <img src="https://primeirosacordes.com.br/images/stories/violao/acordesviolao/a.png" alt="cordas">
 <img src="https://primeirosacordes.com.br/images/stories/violao/acordesviolao/e.png" alt="cordas">

<h2><strong>Em Breve Mais Material</strong></h2>
</div>