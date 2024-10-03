<h1>Lista de Usuarios</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Documento</th>
            <th>Teléfono</th>
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
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
