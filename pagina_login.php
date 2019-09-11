<?php   
    session_start();
    $informacao = $_REQUEST['usuario'];
    $informacao2 = $_REQUEST['senha'];
 
    $conexao = mysqli_connect("localhost", "root","","banco_usuario",3306);

    if($conexao == true)
    {
        echo "<h1> Login Efetuado com sucesso</h1> <br>";

        $resultado_do_comando = mysqli_query($conexao,"SELECT nome, senha FROM cliente WHERE nome = '$informacao' AND senha = '$informacao2';");

        if(mysqli_num_rows($resultado_do_comando) > 0) 
        {
              $_SESSION['logado'] = $informacao;
              header ('Location: index.html');
        }
        else{
            
            header ('Location: cadastro.html');
        }

            
        }
       
      
    ?>