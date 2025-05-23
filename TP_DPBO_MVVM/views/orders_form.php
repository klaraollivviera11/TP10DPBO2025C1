<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($orders) ? 'Edit Orders' : 'Add Orders'; ?></h2>
<form action="index.php?entity=orders&action=<?php echo isset($orders) ? 'update&id=' . $orders['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Order Number:</label>
        <input type="text" name="order_number" value="<?php echo isset($orders) ? $orders['order_number'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Customer:</label>
        <select name="customer_id" class="border p-2 w-full" required>
            <?php foreach ($customer as $cos): ?>
            <option value="<?php echo $cos['id']; ?>" <?php echo isset($orders) && $orders['customer_id'] == $cos['id'] ? 'selected' : ''; ?>><?php echo $cos['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block">Shipping:</label>
        <select name="shipping_method_id" class="border p-2 w-full" required>
            <?php foreach ($shipping as $shipping): ?>
            <option value="<?php echo $shipping['id']; ?>" <?php echo isset($orders) && $orders['shipping_method_id'] == $shipping['id'] ? 'selected' : ''; ?>><?php echo $shipping['method_name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>