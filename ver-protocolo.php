<?php

require __DIR__ . '/config.php';

if (!isset($_GET['protocolo'])) {
  header("Location: " . URL);
}

renderizar_pagina('Protocolo', 'protocolo.php');
