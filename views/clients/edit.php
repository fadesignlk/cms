<?php include 'includes/header.php'; ?>

    <?php 
        $heading = "Edit Client";
        $options = false;
        include 'includes/headline.php'; 
    ?>
    <form method="post" class="w-25" action="index.php?controller=client&action=edit&id=<?php echo htmlspecialchars($client['id']); ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($client['name']); ?>" required>
    </div>
    <div class="mb-3">
        <label for="contact_info" class="form-label">Contact Info:</label>
        <input type="text" class="form-control" id="contact_info" name="contact_info" value="<?php echo htmlspecialchars($client['contact_info']); ?>" required>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address:</label>
        <textarea class="form-control" id="address" name="address" required><?php echo htmlspecialchars($client['address']); ?></textarea>
    </div>
        <input type="submit" value="Update Client" class="btn btn-success">
        <a href="<?= BASE_URL ?>?controller=client&action=list" class="btn btn-warning">Cancel</a>
    </form>

<?php include 'includes/footer.php'; ?>