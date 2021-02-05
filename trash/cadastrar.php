
  <?php
 include "app.php";
 require_once("app.php");
    if(isset($_POST["btnCad"])==true) {
   
        $login = $_POST ["txtLogin"];
        $email = $_POST ["txtEmail"];
        $conexao = openConnection();
        

        $validauser =mysqli_query($conexao, "SELECT*FROM usuario WHERE login = '{$login}'");
        $validaemail =mysqli_query($conexao, "SELECT*FROM usuario WHERE email = '{$email}'");

        if(mysqli_num_rows($validauser) > 0){
            $mensagem = 'Login já existe no sistema';
            header("Location: index.php?&alerta=$mensagem");

        } else if (mysqli_num_rows($validaemail) > 0){
            $mensagem = 'Email já existe no sistema';
            header("Location: index.php?&alerta=$mensagem");

        } else {
        $nome = $_POST ["txtNome"];
        $senha = md5($_POST["txtSenha"]);
 
        $nome = mysqli_escape_string($conexao, $nome);
        $ativo = md5(uniqid(rand()));
        $inserir = "INSERT INTO usuario VALUE(null, '$nome', '$login', '$senha', '$email', '$ativo');";
        $executar = mysqli_query($conexao, $inserir);
           if(mysqli_affected_rows($conexao) > 0){
            $id = mysqli_insert_id($conexao);
            $to = $email;
            $subject = "Confirmação da Anxaife para" . $nome;
            $header = "Agreen Space: Confirme o seu e-mail.";
            $message = "Por favor clique no link abaixo para confirmar a sua conta. rn ";
            $message .= "anxaife.epizy.com/teste/ativação.php?passkey=$ativo";
            mail($to,$subject,$message,$header);
            $mensagem = 'Cadastro Efetuado com Sucesso e email de confirmação enviado';
            header("Location: index.php?&alerta=$mensagem");
        }

        
    } mysqli_close($conexao);
    
    }
 
?>
