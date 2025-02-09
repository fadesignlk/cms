<?php include 'includes/header.php'; ?>
    <h1>Edit Project</h1>
    <form method="post" action="index.php?controller=project&action=edit&id=<?php echo htmlspecialchars($project['id']); ?>">
        <label for="client_id">Client:</label>
        <select id="client_id" name="client_id" required>
            <?php foreach ($clients as $client): ?>
                <option value="<?php echo htmlspecialchars($client['id']); ?>" <?php if ($client['id'] == $project['client_id']) echo 'selected'; ?>><?php echo htmlspecialchars($client['name']); ?></option>
            <?php endforeach; ?>
        </select><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($project['name']); ?>" required><br>
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="<?php echo htmlspecialchars($project['location']); ?>" required><br>
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" value="<?php echo htmlspecialchars($project['start_date']); ?>" required><br>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" value="<?php echo htmlspecialchars($project['end_date']); ?>" required><br>
        <label for="budget">Budget:</label>
        <input type="number" id="budget" name="budget" value="<?php echo htmlspecialchars($project['budget']); ?>" required><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($project['description']); ?></textarea><br>
        <input type="hidden" name="created_by" value="<?php echo htmlspecialchars($project['created_by']); ?>"><!-- Assuming you have a way to get the current user ID -->
        <input type="submit" value="Update Project">
    </form>
<?php include 'includes/footer.php'; ?>