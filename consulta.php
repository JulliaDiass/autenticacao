<?php

  $usuarios = file_get_contents('senhas.txt');
  $usuarios = json_decode($usuarios, true);
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  foreach ($usuarios as $usuario) {
    if ($usuario['login'] === $login && $usuario['senha'] === $senha) {
  $papel = $usuario['papel'];  
  header('Location: correto.php?login=' . urlencode($login) . '&papel=' . urlencode($papel));
  exit();
 }
}
  header('Location: errado.php');
  exit();

?>