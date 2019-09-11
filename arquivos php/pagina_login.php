<?php   
    session_start();
    $informacao = $_POST['usuario'];
    $informacao2 = $_POST['senha'];
    echo $informacao,"<br>";
    $conexao = mysqli_connect("localhost", "id9955640_shopbuildcacoal","","id9955640_shopbuild",3306);

    if($conexao == true)
    {
        echo "<h1> Login Efetuado com sucesso</h1> <br>";

        $resultado_do_comando = mysqli_query($conexao,"SELECT nome, senha FROM Cliente WHERE nome = '$informacao' AND senha = '$informacao2';");

        if(mysqli_num_rows($resultado_do_comando) > 0) 
        {
              echo "login feito com sucesso<br>";
              $_SESSION['logado'] = $informacao;
              header ('Location: pagina_login.php');
        }
        else{
            echo "Não foi possível realizar o login<br>";
        }

            
        }
        else{
            echo "Tente novamente<br>";
        }
        
    ?>