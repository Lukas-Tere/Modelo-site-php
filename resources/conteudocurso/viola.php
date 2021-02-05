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
<h3>Aprenda a tocar Viola Caipira - aula 1</h3>


<p><strong>Aula 1 - Anatomia da Viola</strong> <br> O instrumento é dividido em 4 partes: corpo, braço, mão e parte elétrica. Vamos ver em detalhe cada um deles. Tome a figura da viola como exemplo:
</p> <img src="https://primeirosacordes.com.br/images/stories/partes%20viola.jpg" alt="cordas"> <p><strong>Corpo</strong>
O corpo pode ser eletro acústico ou acústico. O corpo acústico</p>

<p><strong>Leitura de cifras</strong> <br>
Para começarmos esse curso, temos de aprender o uso das cifras, assim poderemos identificar o nome dos acordes. As cifras são as letras que representam o nome das notas ou acordes, para isso precisamos saber os nomes das notas musicais que são:

Dó Ré Mi Fá Sol Lá Si

Para cada uma dessas notas damos o nome de uma letra, começando pela letra A que corresponde à nota Lá.

A=lá ; B=si ; C=dó ; D=ré ; E=mi ; F=fá ; G=sol

Portanto:

A = Lá maior a letra “A” corresponde à nota Lá, como ela está sozinha significa que o acorde é maior.

Am = Lá menor a letra “A” corresponde a nota Lá, e a letra “m” significa que o acorde é menor .

A7=Lá com sétima a letra “A” corresponde à nota Lá, e o nº 7 que o acorde é com sétima.
</p>
<p><strong>Nome das cordas</strong> <br> Agora que já temos noção de leitura de cifras, podemos falar sobre algumas afinações utilizadas na viola.

A viola caipira é um instrumento que diferente do violão, utiliza diversas afinações: cebolão, rio abaixo,rio acima, natural, entre outras. Para o nosso método, iremos usar a afinação CEBOLÃO EM MI MAIOR.

Vamos começar dando nomes às cordas, que na viola se apresentam em cinco pares:

1º Par - MI / MI
2º Par - SI / SI
3º Par - SOL SUSTENIDO OITAVADO / SOL SUSTENIDO
4º Par - MI OITAVADO / MI
5º Par - SI OITAVADO / SI
</p> <img src="https://primeirosacordes.com.br/images/stories/viola%201.jpg" alt="cordas"> <br>
<p>As notas B, E, G#, B, E, mostradas à esquerda, dentro do que representa a mão da viola, são as notas emitidas por cada par quando as cordas são tocadas soltas. Assim temos as notas em que cada corda deve ser afinada (lembrem-se de que as cordas são pressionadas aos pares, e não individuais, como no violão):

1º par - uníssono: E (mais agudo)
2º par - uníssono: B
3º par - oitavado: G#
4º par - oitavado: E
5º par - oitavado: B (mais grave)

Para uma perfeita afinação em sua viola, sugerimos a aquisição de um afinador eletrônico.</p>
<p><strong>Posição Da Viola ao corpo</strong> <br> Posição Clássica Posição perna cruzada Posição viola na diagonal</p>
</p> <img src="https://primeirosacordes.com.br/images/stories/almirsater31.jpg" alt="cordas"> <br>

<p><strong>Mãos na Viola</strong> </p>
<img src="https://primeirosacordes.com.br/images/stories/posio%20das%20mos.jpg" alt="cordas"> <br>
<p><strong>Mão direita</strong> – Para dedilhados, usamos os seguintes dedos:

P=polegar –

I= indicador –

M= médio –

A= anular –

<strong>Mão esquerda</strong>- Para montarmos os acordes usamos os seguintes dedos:

1= indicador

2=médio

3=anular

4=mindinho

O polegar da mão esquerda deve ser posicionado atrás do braço da viola, e o polegar deve apontar para cima.

<strong>Leitura tablatura</strong>

Para lermos uma tablatura é como se o braço da Viola estivesse de frente para nós, portanto, tome cuidado nesse caso com o primeiro par, mi, ele está em cima. Se aparecer cinco cordas ao invés de 10 cordas considere que cada 2 cordas equivalem a um par da viola e que portanto pra cada uma das cordas eu seguro um par. Os números que aparecem na tablatura são as casas.

No exemplo abaixo os pares tocados são, respectivamente, o quarto, o terceiro o segundo e o primeiro par. As casas seriam as cordas soltas.
</p> 
<img src="https://primeirosacordes.com.br/images/stories/viola2.jpg" alt="cordas">

<h2><strong>Em Breve Mais Material</strong></h2>
</div>