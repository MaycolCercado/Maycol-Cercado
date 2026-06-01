<h2>Lista de Usuarios</h2>
<a href="index.php?action=nuevo">Nuevo Usuario</a>
<table border="1" cellpadding="5">
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>direccion</th>
        <th>edad</th>
    </tr>
   
<?php if (isset($usuarios) && is_array($usuarios)): ?>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
            <td><?php echo htmlspecialchars($usuario['email']); ?></td>
            <td><?php echo htmlspecialchars($usuario['telefono']); ?></td>
            <td><?php echo htmlspecialchars($usuario['direccion']); ?></td>
            <td><?php echo htmlspecialchars($usuario['edad']); ?></td>
            <td>
                <a href="index.php?action=editar&id=<?php echo $usuario['id']; ?>">Editar</a> |
                <a href="index.php?action=eliminar&id=<?php echo $usuario['id']; ?>" onclick="return confirm('¿Eliminar este usuario?');">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="4">Proceso ejecutado.</td></tr>
<?php endif; ?>