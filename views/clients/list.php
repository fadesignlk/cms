<?php include 'includes/header.php'; ?>

<h1>Client List</h1>
    <a href="index.php?controller=client&action=add">Add New Client</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Contact Info</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($clients as $client): ?>
        <tr>
            <td><?php echo htmlspecialchars($client['id']); ?></td>
            <td><?php echo htmlspecialchars($client['name']); ?></td>
            <td><?php echo htmlspecialchars($client['contact_info']); ?></td>
            <td><?php echo htmlspecialchars($client['address']); ?></td>
            <td>
                <a href="index.php?controller=client&action=edit&id=<?php echo htmlspecialchars($client['id']); ?>">Edit</a>
                <a href="index.php?controller=client&action=delete&id=<?php echo htmlspecialchars($client['id']); ?>" onclick="return confirm('Are you sure you want to delete this client?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

<?php include 'includes/footer.php'; ?>