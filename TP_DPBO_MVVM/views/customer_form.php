<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($customer) ? 'Edit Customer' : 'Add Customer'; ?></h2>
<form action="index.php?entity=customer&action=<?php echo isset($customer) ? 'update&id=' . $customer['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Name:</label>
        <input type="text" name="name" value="<?php echo isset($customer) ? $customer['name'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>