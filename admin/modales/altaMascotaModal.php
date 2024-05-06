<div class="modal fade" id="altaMascotaModal" tabindex="-1" role="dialog" aria-labelledby="altaMascotaModalLabel" aria-modal="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="altaMascotaModalLabel">
          Registrar mascota
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./altaMascota.php" method="POST">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required />
          </div>
          <div class="mb-3">
            <label for="raza" class="form-label">Raza</label>
            <input type="text" class="form-control" id="raza" name="raza" required />
          </div>
          <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input value="Sin definir" type="text" class="form-control" id="color" name="color" required />
          </div>
          <div class="mb-3">
            <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required />
          </div>
          <div class="mb-3">
            <label for="img_mascota" class="form-label">Imagen de la mascota</label>
            <input type="file" class="form-control" id="img_mascota" name="img_mascota" accept="image/jpg, image/jpeg" />
          </div>
          <div class="mb-3">
            <label for="cliente_id" class="form-label">Dueño</label>
            <select class="form-select" id="cliente_id" name="cliente_id" required>
              <option value="" selected>Seleccionar cliente</option>
              <?php
              $clientes = $admin->getAllClientes();
              foreach ($clientes as $cliente) { ?>
                <option value="<?= $cliente['cliente_id']; ?>">
                  <?= ucfirst($cliente['nombre']) . ' ' . ucfirst($cliente['apellido']) . ' - ' . $cliente['email']; ?>
                </option>
              <?php } ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>