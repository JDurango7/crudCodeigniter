<h1><?php echo isset($title) ? $title : 'Crear Usuario'; ?></h1>

<div class="container mt-4">
    
    <form method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" name="correo" required>
        </div>
        <div class="form-group">
            <label for="documento">Documento</label>
            <input type="text" class="form-control" name="documento" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" name="telefono" required>
        </div>
        <button type="submit" class="btn btn-success">Crear Usuario</button>
        <a href="<?php echo base_url('usuarios'); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
