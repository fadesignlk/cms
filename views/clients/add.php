<?php include 'includes/header.php'; ?>

    <?php 
        $heading = "Add new Client";
        $options = false;
        include 'includes/headline.php'; 
    ?>
    <form method="post" class="w-25" action="index.php?controller=client&action=add">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="contact_info" class="form-label">Contact Info:</label>
            <input type="text" id="contact_info" class="form-control" name="contact_info" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea type="text" id="address" name="address" class="form-control" required></textarea>
        </div>
        <input type="submit" value="Add Client" class="btn btn-primary">
        <a href="<?= BASE_URL ?>?controller=client&action=list" class="btn btn-warning">Cancel</a>
    </form>

<?php include 'includes/footer.php'; ?>

