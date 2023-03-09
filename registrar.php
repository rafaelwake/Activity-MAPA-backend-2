<?php

require __DIR__ . '/config.php';

if (!eh_metodo_post()) {
  header('Location: ' . URL);
  exit;
}

$solicitante = htmlspecialchars($_POST['solicitante']);
$descricao = htmlspecialchars($_POST['descricao']);
$email = htmlspecialchars($_POST['email']);

$id = salvar_protocolo($solicitante, $descricao, $email);

if ($id === false) {
  echo 'Erro ao salvar o protocolo';
} else {
  $rota = 'ver-protocolo.php?' . http_build_query(['protocolo' => $id]);
  header('Location: ' . URL . $rota);
}
