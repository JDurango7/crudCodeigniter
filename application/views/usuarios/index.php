
<div class="container mt-4">
    <h1><?php echo $title; ?></h1>
    <a href="<?php echo base_url('usuarios/create'); ?>" class="btn btn-primary mb-2">Agregar Usuario</a>
    <table class="table table-bordered" id="usuariosTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Documento</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario->id; ?></td>
                <td><?php echo $usuario->nombre; ?></td>
                <td><?php echo $usuario->correo; ?></td>
                <td><?php echo $usuario->documento; ?></td>
                <td><?php echo $usuario->telefono; ?></td>
                <td>
                    <a href="<?php echo base_url('usuarios/edit/'.$usuario->id); ?>" class="btn btn-warning">Editar</a>
                    <a href="<?php echo base_url('usuarios/delete/'.$usuario->id); ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<a href="<?php echo base_url('usuarios/generate_pdf'); ?>" class="btn btn-info mb-2">Generar PDF</a>

<script>
$(document).ready(function() {
    $('#usuariosTable').DataTable();
});
</script>
