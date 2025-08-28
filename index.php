<?php 
include "data/products.php"; 
include "includes/header.php"; 
?>

<h2>Etalase Produk</h2>
<div class="product-grid">
    <?php foreach ($products as $p): ?>
        <div class="product-card">
            <img src="<?= $p['image']; ?>" alt="<?= $p['name']; ?>">
            <h3><?= $p['name']; ?></h3>
            <p><?= $p['price']; ?></p>
            <a href="product.php?id=<?= $p['id']; ?>" class="btn">Lihat Detail</a>
        </div>
    <?php endforeach; ?>
</div>

<?php include "includes/footer.php"; ?>
