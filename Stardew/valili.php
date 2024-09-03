<?php
    $severname= "localhost"; // esse é o nosso servidor
    $username= "root"; // usuario padrão
    $password= ""; // senha padrão
    $db_name= "clientes"; // nome do banco de dados

    $conn= new mysqli($severname,$username,$password,$db_name); // contato direto com o servidor

    if ($conn->connect_error) {
        die ("morreu " . $conn->connect_error);
    } // caso acontecer o erro, o site irá cair

    $email= $_POST ['email']; // vai enviar o email
    $senha= $_POST ['senha']; // vai enviar a senha
    $submit= $_POST ['submit']; //vai enviar todas as informações

    //método que realiza a consulta, com parãmetro de conexão e query
    $sql= mysqli_query($conn, "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'");

    if (isset($submit)) {

    //se o número de células for menor ou igual a 0, vai dar erro
    if (mysqli_num_rows($sql)<=0) {
        header("Location: index.php?login=erro");
        die("Erro.");
    }else {
        header("Location: home.php");
    }
}
?>