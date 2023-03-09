<?php

function dp($dump): void
{
  echo '<pre>';
  var_dump($dump);
  echo '</pre>';
}

function obter_pagina(string $filename): string
{
  ob_start();

  require VIEW_PATH . "/{$filename}";

  return ob_get_clean();
}

function renderizar_pagina(string $titulo_da_pagina, string $nome_do_arquivo): void
{
  require SRC_PATH . '/includes/layout.php';
}

function eh_metodo_post(): bool
{
  return $_SERVER['REQUEST_METHOD'] === 'POST';
}
