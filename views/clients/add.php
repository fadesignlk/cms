<?php include 'includes/header.php'; ?>

<h1>Add Client</h1>
    <form method="post" action="index.php?controller=client&action=add">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="contact_info">Contact Info:</label>
        <input type="text" id="contact_info" name="contact_info" required><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>
        <input type="submit" value="Add Client">
</form>

<?php include 'includes/footer.php'; ?>

