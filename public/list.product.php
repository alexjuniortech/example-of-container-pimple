<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    <?php foreach ($list as $product): ?>
    <tr>
        <td><?=$product['id']?></td>
        <td><?=$product['name']?></td>
        <td><?=$product['description']?></td>
    </tr>
    <?php endforeach; ?>
</table>