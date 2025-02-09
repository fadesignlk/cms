<?php include 'includes/header.php'; ?>
    <h1>Add Project</h1>
    <form method="post" action="index.php?controller=project&action=add">
        <label for="client_id">Client:</label>
        <select id="client_id" name="client_id" required>
            <?php foreach ($clients as $client): ?>
                <option value="<?php echo htmlspecialchars($client['id']); ?>"><?php echo htmlspecialchars($client['name']); ?></option>
            <?php endforeach; ?>
        </select><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br>
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required><br>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required><br>
        <label for="budget">Budget:</label>
        <input type="number" id="budget" name="budget" required><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br>
        <input type="hidden" name="created_by" value="<?php echo htmlspecialchars($current_user_id); ?>"><!-- Assuming you have a way to get the current user ID -->
        <input type="submit" value="Add Project">
    </form>
<?php include 'includes/footer.php'; ?>