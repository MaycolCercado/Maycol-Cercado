<form method="POST" action="index.php?action=<?php echo isset($usuario) ? 'actualizar&id=' . $usuario['id'] : 'agregar'; ?>">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo isset($usuario) ? htmlspecialchars($usuario['nombre']) : ''; ?>" required><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo isset($usuario) ? htmlspecialchars($usuario['email']) : ''; ?>" required><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="<?php echo isset($usuario) ? htmlspecialchars($usuario['telefono']) : ''; ?>" required><br>

    <label>Dirección:</label>
<input type="text" name="direccion" value="<?php echo isset($usuario) ? htmlspecialchars($usuario['direccion']) : ''; ?>" required>

    <label>Edad:</label>
    <input type="text" name="edad" value="<?php echo isset($usuario) ? htmlspecialchars($usuario['edad']) : ''; ?>" required><br>

    <button type="submit"><?php echo isset($usuario) ? 'Actualizar' : 'Agregar'; ?></button>
</form>