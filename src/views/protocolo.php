<?php

$numero = filter_input(INPUT_GET, 'protocolo', FILTER_SANITIZE_NUMBER_INT);
$protocolo = obter_protocolo($numero);

?>
<div class="bg-light">
  <div class="py-5 min-vh-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <?php if (is_null($protocolo)) : ?>
            <div class="alert alert-warning text-center">
              <h4 class="alert-heading mb-3">Esse protocolo não foi encontrado</h4>
              <a href="<?= URL ?>" class="btn btn-dark">Voltar a página inicial</a>
            </div>
          <?php else : ?>
            <h3 class="mb-3 text-center">Protocolo Nº <b><?= $protocolo->numero ?></b></h3>
            <div class="bg-white rounded shadow mb-3">
              <div class="table-responsive">
                <table class="table mb-0">
                  <tbody>
                    <tr>
                      <th>Solicitante</th>
                      <td><?= $protocolo->solicitante ?></td>
                    </tr>
                    <tr>
                      <th>E-mail</th>
                      <td><?= $protocolo->email ?></td>
                    </tr>
                    <tr>
                      <th>Ano</th>
                      <td><?= $protocolo->ano ?></td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td><?= STATUS[$protocolo->status] ?></td>
                    </tr>
                    <tr>
                      <th>Data do cadastro</th>
                      <td><?= date('d/m/Y \à\s H:i', strtotime($protocolo->dataCadastro)) ?></td>
                    </tr>
                    <tr class="table-dark">
                      <th colspan="2" class="text-center">Descrição</th>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <p class="mb-0"><?= preg_replace('/\n/', '<br>', $protocolo->descricao) ?></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="text-center">
              <a href="<?= URL ?>" class="btn btn-success">Voltar a página inicial</a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>