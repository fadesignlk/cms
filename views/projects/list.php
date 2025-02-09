<?php include 'includes/header.php'; ?>
    <h1>Projects</h1>
    <a href="index.php?controller=project&action=add">Add New Project</a>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Client ID</th>
            <th>Name</th>
            <th>Location</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Budget</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($projects as $project): ?>
        <tr>
            <td><?php echo htmlspecialchars($project['id']); ?></td>
            <td><?php echo htmlspecialchars($project['client_id']); ?></td>
            <td><?php echo htmlspecialchars($project['name']); ?></td>
            <td><?php echo htmlspecialchars($project['location']); ?></td>
            <td><?php echo htmlspecialchars($project['start_date']); ?></td>
            <td><?php echo htmlspecialchars($project['end_date']); ?></td>
            <td><?php echo htmlspecialchars($project['budget']); ?></td>
            <td><?php echo htmlspecialchars($project['description']); ?></td>
            <td>
                <a href="index.php?controller=project&action=edit&id=<?php echo htmlspecialchars($project['id']); ?>">Edit</a>
                <a href="index.php?controller=project&action=delete&id=<?php echo htmlspecialchars($project['id']); ?>" onclick="return confirm('Are you sure you want to delete this project?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php include 'includes/footer.php'; ?>