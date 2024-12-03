<?php
include('basededatos.php');

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nombre']}</td>
            <td>{$row['apellido']}</td>
            <td>{$row['email']}</td>
            <td class='acciones'>
                <button onclick=\"editarUsuario({$row['id']})\">Editar</button>
                <button onclick=\"eliminarUsuario({$row['id']})\">Eliminar</button>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No hay usuarios registrados.";
}
?>
