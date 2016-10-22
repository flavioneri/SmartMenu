<?php
    session_start();
    if(isset($_POST['username'])) $username = $_POST['username'];
    if(isset($_POST['pass'])) $password = $_POST['pass'];

    $connect = mysqli_connect("localhost", "root", "", "smartmenu");
    $query = "SELECT * FROM `admin`";
    
    $result = mysqli_query($connect, $query);
    
    while($row = mysqli_fetch_array($result))
    {  

       if($row['username'] == $username && $row['pass']==$password){
            $_SESSION['login_user']= $username;  // Initializing Session with value of PHP Variable
            header('Location: administracao.php');
            exit();
        }
    }

    // nenhum login valido encontrado na bd, por isso mostra login invalido
    echo "<script type='text/javascript'>alert('Login Incorreto. Verifique as suas credenciais de administrador.'); window.location='admin.html';</script>";

?>

