<div class="bg-light">
  <div class="py-5 min-vh-100">
    <div class="container">
      <div class="row align-items-center g-3 g-md-5">
        <div class="col-lg-7">
          <div class="p-4 bg-white rounded shadow">
            <h2 class="fw-bold text-primary">Registrar protocolo</h2>
            <form action="registrar.php" method="post">
              <div class="mb-3">
                <label for="solicitante" class="form-label">Solicitante</label>
                <input type="text" class="form-control" name="solicitante" id="solicitante" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" rows="5" name="descricao" id="descricao" required></textarea>
              </div>
              <button type="submit" class="btn btn-success">
                Registrar
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <h4>Buscar informações da solicitação</h4>
          <p>
            <small class="text-muted">
              Digite o número do protocolo no campo abaixo.
            </small>
          </p>
          <form action="<?= URL ?>ver-protocolo.php" method="get">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Número do protocolo" name="protocolo">
              <button class="btn btn-success" type="submit">Buscar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>