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
<h3>Aprenda tocar cavaquinho sozinho - aula 1</h3>
<p>Nesta aula de cavaquinho vamos aprender as partes do Instrumento.

Antes mesmo de colocar as mãos no cavaquinho, é importante saber qual sua função num meio musical. Pois bem, como um instrumento de base (acompanhamento) ou solo, o cavaco sempre está acompanhado pelos violões, banjos,bandolins e companhia limitada.

Nas bases, tem função de dar pegada e um certo preenchimento, um temperinho a mais. Nos solos e chorinhos dita a melodia esbanjando técnica e sendo acompanhados pelos demais,de modo que as formas de se ''interpretar'' uma peça diferencia cada musico. </p>
<p>Apresentação</p>
<img src="https://4.bp.blogspot.com/_XIbKHcV1cPA/TH1OHaF_dhI/AAAAAAAACY0/GqvpGRZlLpw/s1600/cavaco+anatomia.bmp" alt="cordas">
<p> As cordas estão dispostas desta maneira:

4º ------ Re 
3º------- Sol 
2º------- Si 
1º------- Re 

 

São contadas de baixo pra cima, assim como os outros instrumentos de corda, deixando o cavaco afinado em sol maior. Veremos o porque quando estudarmos a formação dos acordes. 

Observações:

Você que é canhoto, para utilizar esse método e entender melhor suas figuras e posições, troque a mão direita pela esquerda e inverta a ordem das cordas assim: a primeira no lugar da Quarta, a segunda no lugar da terceira e assim por diante.</p>


<h2><strong>Em Breve Mais Material</strong></h2>
</div>