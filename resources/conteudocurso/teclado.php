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
<h3>Aula 1 (O ritmo) - Guia do iniciante de teclado</h3>
<p>Olá amigos vamos começar o nosso guia do iniciante, e o primeiro assunto que vamos tratar é sobre o ritmo.

Antes de termos qualquer definição sobre o que é ritmo, precisamos entender os seus componentes básicos que são o som e o silêncio.

Para exemplificar vamos ouvir a batida de um coração.

Perceba que tivemos a alternância entre sons e silêncios, mas tivemos acima de tudo um padrão, uma repetição de sons fortes e fracos num determinado ciclo, quando eu termino o ciclo eu recomeço da mesma forma.</p>
<p>Vamos colocar em pratica o conceito de ritmo? Para isso vamos utilizar um metrônomo que nos dará a velocidade que tocaremos.

Vamos usar a contagem até 4 para determinar onde começa e termina a pulsação. Cada quadrado branco representa o silêncio, cada quadrado preto representa o som. Quando eu toco a nota no teclado eu terei o som, quando eu soltar a tecla terei o silêncio.</p>
<img src="https://primeirosacordes.com.br/images/stories/teclado/1b-ritmo.jpg" alt="cordas">
<p>Agora vamos usar a mesma contagem para a pulsação, ou seja, contar até 4. Só que agora nós vamos subdividir cada tempo. São 4 tempos só que agora eu divido cada tempo em dois.</p>
<img src="https://primeirosacordes.com.br/images/stories/teclado/5-ritmo.jpg" alt="cordas">
<p>Espero que tenha gostado da aula, se inscreva em nosso canal, dê um joinha, faça o seu comentário, na próxima semana vamos falar sobre sons graves e agudos.</p>


<h2><strong>Em Breve Mais Material</strong></h2>
</div>