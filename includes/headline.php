<h1 class="display-6"><?php echo $heading . ($options ? 's' : null) ; ?></h1>

<?php if($options) { ?>
    <div class="list_options mb-3">
        <a href="index.php?controller=<?php echo  $heading; ?>&action=add" data-bs-title="Add a New <?php echo $heading; ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"><i class="bi bi-plus"></i></a>
        <button class="unset-btn" type="submit" form="bulk-action-form" name="action" value="edit" data-bs-title="Edit <?php echo $heading; ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"><i class="bi bi-pencil-square"></i></button>
        <button class="unset-btn" type="submit" form="bulk-action-form" name="action" value="delete" onclick="return confirm('Are you sure you want to delete the selected clients?');" href="index.php?controller=<?php echo  $heading; ?>&action=add" data-bs-title="Delete <?php echo $heading; ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"><i class="bi bi-trash3"></i></button>
    </div>
<?php }  ?>
