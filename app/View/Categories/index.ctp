<h1>Category List</h1>

<table>
    <caption>Category List</caption>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>

    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?php echo $category['Category']['id']; ?></td>
            <td><?php echo $category['Category']['name']; ?></td>
            <td><?php echo $category['Category']['created']; ?></td>
            <td><?php echo $category['Category']['modified']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>