<?php include 'includes/header.php'; ?>

    <?php 
        $heading = "Client";
        $options = true;
        include 'includes/headline.php'; 
    ?>
    
    <form method="post" action="index.php?controller=client&action=bulkAction" id="bulk-action-form">
        <table class="table table-bordered">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th>Contact Info</th>
                <th>Address</th>
            </tr>
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><input type="checkbox" name="client_ids[]" value="<?php echo htmlspecialchars($client['id']); ?>"></td>
                <td><?php echo htmlspecialchars($client['id']); ?></td>
                <td><?php echo htmlspecialchars($client['name']); ?></td>
                <td><?php echo htmlspecialchars($client['contact_info']); ?></td>
                <td><?php echo htmlspecialchars($client['address']); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </form>

    <script>
        document.getElementById('select-all').onclick = function() {
            var checkboxes = document.getElementsByName('client_ids[]');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        }
    </script>

<?php include 'includes/footer.php'; ?>