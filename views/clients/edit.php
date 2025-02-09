<?php include 'includes/header.php'; ?>

<h1>Edit Client</h1>
    <form method="post" action="index.php?controller=client&action=edit&id=<?php echo htmlspecialchars($client['id']); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($client['name']); ?>" required><br>
        <label for="contact_info">Contact Info:</label>
        <input type="text" id="contact_info" name="contact_info" value="<?php echo htmlspecialchars($client['contact_info']); ?>" required><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($client['address']); ?>" required><br>
        <input type="submit" value="Update Client">
</form>

<?php include 'includes/footer.php'; ?>