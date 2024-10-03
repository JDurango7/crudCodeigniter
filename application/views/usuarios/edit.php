<div class="container mt-4">
    <h1><?php echo $title; ?></h1>
    <form method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $usuario->nombre; ?>" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" name="correo" value="<?php echo $usuario->correo; ?>" required>
        </div>
        <div class="form-group">
            <label for="documento">Documento</label>
            <input type="text" class="form-control" name="documento" value="<?php echo $usuario->documento; ?>" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" name="telefono" value="<?php echo $usuario->telefono; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar Usuario</button>
        <a href="<?php echo base_url('usuarios'); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
