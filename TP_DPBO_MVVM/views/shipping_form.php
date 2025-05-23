<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($shipping) ? 'Edit Shipping' : 'Add Shipping'; ?></h2>
<form action="index.php?entity=shipping&action=<?php echo isset($shipping) ? 'update&id=' . $shipping['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Shipping Name:</label>
        <input type="text" name="method_name" value="<?php echo isset($shipping) ? $shipping['method_name'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>