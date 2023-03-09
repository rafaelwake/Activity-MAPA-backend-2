<?php

function obter_conexao(): PDO
{
  $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;

  return new PDO($dsn, DB_USER, DB_PASS);
}

/**
 * @return string|false
 */
function salvar_protocolo(string $solicitante, string $descricao, string $email)
{
  $conexao = obter_conexao();

  $query = "INSERT INTO protocolo (`solicitante`, `descricao`, `email`, `ano`, `status`, `dataCadastro`) VALUES ";
  $query .= "(:solicitante, :descricao, :email, :ano, 1, NOW())";

  $params = [
    ':solicitante' => $solicitante,
    ':descricao' => $descricao,
    ':email' => $email,
    ':ano' => date('Y')
  ];

  $stmt = $conexao->prepare($query);

  foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value);
  }

  $status = $stmt->execute();

  if ($status) {
    return $conexao->lastInsertId();
  } else {
    return false;
  }
}

function obter_protocolo(int $numero)
{
  $conexao = obter_conexao();

  $query = "SELECT * FROM protocolo WHERE `numero` = :num";

  $stmt = $conexao->prepare($query);
  $stmt->bindValue(':num', $numero);

  $status = $stmt->execute();

  if ($status === false) {
    return null;
  }

  $protocolo = $stmt->fetchObject();

  if ($protocolo === false) {
    return null;
  }

  return $protocolo;
}
