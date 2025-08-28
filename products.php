<?php 
include "data/products.php"; 
include "includes/header.php"; 

$id = $_GET['id'] ?? 0;
$product = null;

foreach ($products as $p) {
    if ($p['id'] == $id) {
        $product = $p;
        break;
    }
}
?>

<?php if ($product): ?>
    <div class="product-detail">
        <img src="<?= $product['image']; ?>" alt="<?= $product['name']; ?>">
        <h2><?= $product['name']; ?></h2>
        <p>Harga: <?= $product['price']; ?></p>
        <a href="<?= $product['affiliate_link']; ?>" target="_blank" class="btn-buy">Beli Sekarang</a>
    </div>
<?php else: ?>
    <p>Produk tidak ditemukan.</p>
<?php endif; ?>

<?php include "includes/footer.php"; ?>
