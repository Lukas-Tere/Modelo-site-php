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
<h3>Aula 1 - Noções básicas</h3>

<p><strong>Leitura de Cifras</strong> <br> Para começarmos esse curso, temos de aprender o uso das cifras, assim poderemos identificar o nome dos acordes.
 As cifras são os nomes que damos aos acordes, para isso precisamos saber os nomes das notas musicais que são:<br>
Dó   Ré   Mi   Fá   Sol   Lá   Si <br>
Para cada uma dessas notas damos o nome de uma letra, começando pela letra A que corresponde a nota Lá. <br>
A=lá ;  B=si  ;  C=dó  ;  D=ré  ;  E=mi  ;  F=fá  ;  G=sol <br>
Portanto: <br>
A = Lá maior, a letra “A” corresponde a nota Lá, como ela está sozinha significa que o acorde é maior. <br>
Am = Lá menor, a letra “A” corresponde à nota Lá, e a letra “m” significa que o      acorde é menor . <br>
A7=Lá com sétima, a letra “A” corresponde à nota Lá, e  o  nº 7  que o  acorde é  com sétima. <br>
<strong>Exercícios</strong> <br>
Descubra o nome dos acordes: <br>
D7 – Ré com sétima  <br>
C – <br>
Em - <br>
F – <br>
A7 -<br>
G4 –<br>
</p>
<h3>Noções básicas</h3>
<p><strong>Nome das cordas</strong> <br> O nome das cordas soltas do contrabaixo, começando pela primeira corda, contando de baixo para cima são: 1º corda – sol, 2º corda – ré, 3º corda – lá, 4º corda – mi. <br>
</p> <img src="https://primeirosacordes.com.br/images/stories/imagembaixo/cordas.png" alt="cordas"> <br>
<p><strong>Leitura tablatura</strong> <br>
Para lermos uma tablatura é como se o braço do contrabaixo estivesse de frente para nós, portanto, tome cuidado nesse caso com a primeira corda, corda sol, ela  está em cima. Os números que aparecem na tablatura são as casas.No exemplo abaixo a corda usada é a terceira corda presa na terceira casa. <br>
</p> <img src="https://primeirosacordes.com.br/images/stories/imagembaixo/tablatura.png" alt="cordas"> <br>
<p><strong>Posição dos dedos mão esquerda</strong> <br>
Para mão esquerda usamos os seguintes dedos: polegar, indicador, médio e anular. Cada um deles recebe um número para designá-lo. <br>
</p> <img src="https://primeirosacordes.com.br/images/stories/imagembaixo/mo%20esquerda.png" alt="cordas"> <br>
<p><strong>Posição dos dedos mão esquerda</strong> <br>
O polegar serve de apoio suave, atrás do instrumento. O sentido do polegar deve ser em forma de positivo.Os dedos devem pressionar as cordas, bem próximo dos ferrinhos (trastes). <br>
</p> <img src="https://primeirosacordes.com.br/images/stories/imagembaixo/posio%20mo%20esquerda.png" alt="cordas"> <br>
<p>Posição dos dedos mão direita</p> <br>
 <img src="https://primeirosacordes.com.br/images/stories/imagembaixo/posio%20mo%20direita.png" alt="cordas"> <br>
<p>Os dedos estão indicados com suas iniciais; P= polegar, i= indicador, m= médio, a= anular.
A mão direita é posicionada com naturalidade, de maneira que os dedos fiquem perpendiculares ás cordas.</p> <br>
 <img src="https://primeirosacordes.com.br/images/stories/imagembaixo/posio%20no%20corpo.png" alt="cordas"> <br>
 <p><strong>Posição dos dedos mão direita</strong> <br>
A mão direita pode executar de duas maneiras usando palheta, nesse caso a palhetada deve ser basicamente alternada, ou usando o indicador e o médio, que devem alternar entre eles a execução na corda.<br>
</p> <img src="https://primeirosacordes.com.br/images/stories/imagembaixo/palheta.png" alt="cordas"> <br>
<p>Observe, na figura, que quando tocamos com os dedos, o dedo da mão direita, após tocar numa corda se apóia na seguinte. A letra “A” representa o ponto de partida, o dedo passa por “B”, tocando a corda em “C”, indo repousar em “D”, que é a corda que ele vai se apoiar.</p>
<p><strong>Dica</strong> <br>
ome cuidado com as cifras que vêm escritas da seguinte maneira: <br>
Exemplo- C/G <br>
A primeira letra é o nome do acorde, a barra significa baixo, e a segunda letra o baixo a ser tocado. Portanto no exemplo acima devemos ler: Dó com baixo em Sol. Para o contrabaixo, principalmente nesse começo, a nota Sol teria mais valor que o resto do acorde.
</p>
<h2><strong>Em Breve Mais Material</strong></h2>
</div>