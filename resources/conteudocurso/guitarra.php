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
<h3>Apostila de guitarra - Aula 1</h3>
<p>Para você que está com vontade de começar a aprender como tocar um violão ou guitarra a apostila abaixo vai ajuda -lo no início desse trajeto. Para que você possa visulizar bem a apostila é só clicar na imagem que ela irá ser ampliada. ...bom aprendizado</p>

<p><strong>Afinando sua Guitarra</strong> <br>vamos falar de algo bem básico, mas que requer atenção, principalmente para você que está começando agora e não tem noção do que se trata: a afinação.

 

Os acessórios mais importantes que você pode ter para afinar são seus ouvidos. Por isso eduque-os com paciência.

Para afinar sua guitarra temos que primeiramente acertar uma das cordas através do "Diapasão", procure sempre manter seu instrumento no diapasão, esta é a melhor referência para seus ouvidos.

Existem três tipos de diapasão:
1) Diapasão de garfo - Emite a vibração da nota Lá.  Como a quinta corda da guitarra solta é justamente a nota Lá, basta acerta-la com o diapasão e depois, usando-a como referência afinar as demais cordas.Você vai perceber que o diapasão emite um Lá bem agudo enquanto a corda Lá da guitarra é mais grave, no começo é um pouco difícil acertar as mesmas notas em oitavas tão distantes por isso aí vai uma dica.

DICA: Sem apertar a corda coloque o dedo suavemente sobre o traste à frente da quinta casa na corda Lá, isto produzirá um "Harmônico Natural". Este harmônico é a nota Lá também. Agora fica mais fácil de comparar com o diapasão.

2) Diapasão de sopro - É um apito que emite o som da nota Lá na mesma altura da corda solta. Há também modelos com seis apitos, cada um emitindo o som de uma das cordas do violão.

3) Diapasão eletrônico - Este aparelho capta o som da corda e indica se está na altura correta ou não, mostra através de um led ou uma seta, se é preciso tencionar ou afrouxar mais a corda até chegar na altura exata. Apesar de muito útil para shows ao vivo este diapasão não deve ser usado como desculpa de quem não consegue afinar o instrumento, qualquer pessoa pode treinar o ouvido a ponto de reconhecer quando as notas estão igualadas e, portanto afinadas.Mas para quem está começando é uma boa escolha.

Após adquirir um diapasão tenha o hábito de sempre manter seu instrumento devidamente afinado de acordo. Como sabemos, a guitarra possui seis cordas que devem ser contadas de baixo para cima, ou da mais fina para a mais grossa: a primeira é a corda mi, a segunda é a corda si, a terceira é a corda sol, a quarta é a corda ré, a quinta é a corda lá e a sexta é a corda mi. Como percebemos cada corda solta leva o nome de uma nota musical, memorize-as.

Supondo que você já tenha ajustado o som da quinta corda (Lá) com o diapasão, a maneira mais comum de afinar o instrumento é igualando o som emitido, quando se aperta a quinta casa de uma corda anterior com o som da corda abaixo solta.

Veja a tablatura abaixo e interprete como as cordas de seu instrumento devem ser afinadas:
</p> <img src="https://primeirosacordes.com.br/images/stories/imagemApostilaViolao/1.png" alt="cordas"> <br>

<p><strong>Anatomia do Violão</strong> <br>
Veja abaixo o violão e as partes que o compõe.

1. Corpo
É o local onde está a boca, o rastilho e o cavalete. Em violões elétricos, também são encontradas outras partes neste local, como a saída, os botões de ajuste, etc.
1.1. Boca- É o "buraco" que está no meio do corpo do violão. É por este local que o som se propaga.
1.2 Rastilho- É a parte do violão que prende uma das extremidades das cordas. É importante que esteja na altura certa.
1.3. Cavalete- O cavalete mantém o rastilho na altura correta.

2. Braço
É composto basicamente pela mão, tarraxas, trastes, casas e pestana.

2.1. Mão- É a extremidade do braço. Neste local estão as tarraxas e uma das extremidades das cordas.

2.1.1. tarraxas- São as peças localizadas na mão que servem para afinar as cordas. Elas são seis, sendo uma para cada corda. Conforme você girá-las, a corda ficará mais apertada, o que mudará o seu som. São indispensáveis para que seu instrumento fique bem afinado antes de tocar.

2.2. Trastes- São as barrinhas de metal que se localizam em toda a escala. Elas separam as casas e é muito importante que elas estejam bem colocadas para uma boa afinação da guitarra. Com o tempo você pode trocá-las, caso fiquem desgastadas, fora do local certo, etc.
2.3. Casas- As casas são os espaços localizados entre os trastes, que são pressionadas durante toda a música. A variação do local que for pressionado fará mudar o som, variando os acordes. São nelas que estão localizadas as notas musicais.
2.4. Pestana- Esta peça não está exatamente na escala, mas sim no local de separação entre a mão e a continuação do braço. Nela ficam apoiadas as cordas, e ela pode ser "substituída" com o uso dos dedos ou de instrumentos apropriados para tal.

3. Ilustração
Entenda melhor com a ilustração abaixo:
</p>
</p> <img src="https://primeirosacordes.com.br/images/stories/imagemApostilaViolao/2.png" alt="cordas"> <br>
<p><strong>Anatomia da guitarra</strong> <br> arrachas - Local onde se fixam as cordas e afinamos a guitarra.

Lock-nut(trava de micro-afinacão)- Para as guitarras que possuem micro-afinacão, esta trava evita que a guitarra se desafine.

Capotraste- Local por onde as cordas passam, pode ser considerado o traste inicial.

Trastes- Barras de metal que determinam as casas.

Pick-up(captadores)-Seria o microfone da guitarra.

Ponte-Local onde se fixam as cordas e a regulagem do braço da guitarra.

Chave dos pick-up - Determina qual pick-up será usado.

Alavanca- Modifica a nota tocada.

Micro-afinacão- Local onde se afina a guitarra depois de travada no lock-nut.
</p> <img src="https://primeirosacordes.com.br/images/stories/imagemApostilaViolao/3.png" alt="cordas"> <br>

<p><strong>Posição das mãos e do corpo</strong> <br>
Mão direita – Para dedilhados, usamos os seguintes dedos:

P=polegar – Toca a 6ª, 5ª, e 4ªcordas.

I= indicador – Toca a 3ª corda.

M= médio – Toca a 2ª corda.

A= anular – Toca a 1ªcorda.

Mão esquerda- Para montarmos os acordes usamos os seguintes dedos:

1= indicador

2=médio

3=anular

4=mindinho
</p> <img src="https://primeirosacordes.com.br/images/stories/imagemApostilaViolao/7.png" alt="cordas">
<p>O polegar da mão esquerda deve ser posicionado atrás do braço do violão, e o polegar deve apontar para cima.</p> 
<p>Há varias maneiras de você posicionar o violão ao seu corpo. O importante é que o braço do violão fique inclinado, como na figura , o que facilitará a visualização das casas.</p>

<p>A mão direita segura a palheta entre os dedos do polegar e indicador, formando uma pinça.</p>
 <img src="https://primeirosacordes.com.br/images/stories/imagemApostilaViolao/6.png" alt="cordas">

<h2><strong>Em Breve Mais Material</strong></h2>
</div>