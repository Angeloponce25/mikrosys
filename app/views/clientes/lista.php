<h2>Clientes QoS</h2>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>Max Limit</th>
    <th>Acción</th>
</tr>

<?php foreach ($colas as $c): ?>
<tr>
    <td><?= $c['name'] ?></td>
    <td><?= $c['max-limit'] ?></td>
    <td>
        <a href="<?= BASE_URL ?>clientes/cortar/<?= $c['.id'] ?>">Cortar</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
