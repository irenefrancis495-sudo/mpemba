<?php
$products = [
    ["id" => 1, "name" => "Smartphone X", "price" => 750000, "img" => "https://via.placeholder.com/200x200?text=Smartphone"],
    ["id" => 2, "name" => "Wireless Earbuds", "price" => 120000, "img" => "https://via.placeholder.com/200x200?text=Earbuds"],
    ["id" => 3, "name" => "Laptop Pro", "price" => 2200000, "img" => "https://via.placeholder.com/200x200?text=Laptop"],
    ["id" => 4, "name" => "Smartwatch", "price" => 350000, "img" => "https://via.placeholder.com/200x200?text=Smartwatch"],
];
foreach ($products as $product): ?>
    <div class="product-card" data-id="<?php echo $product['id']; ?>">
        <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>">
        <h3><?php echo $product['name']; ?></h3>
        <p class="price">Tsh <?php echo number_format($product['price'], 0); ?></p>
        <button class="btn-secondary add-to-cart" data-id="<?php echo $product['id']; ?>" data-name="<?php echo htmlspecialchars($product['name']); ?>" data-price="<?php echo $product['price']; ?>">Add to Cart</button>
    </div>
<?php endforeach; ?>
