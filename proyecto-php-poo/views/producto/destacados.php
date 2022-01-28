<h1>Algunos de nuestros productos</h1>
<?php while ($product = $productos->fetch_object()): ?>
    <div class="product">
        <a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
            <?php if ($product->imagen != null): ?>
                <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>">
            <?php else: ?>    
                <img src="<?= base_url ?>assets/img/camiseta.png">
            <?php endif; ?>
            <div class="stock-cero">
                <?php if ($product->stock == 0): ?>
                    <h4>No hay productos disponibles</h4>
                <?php endif; ?>
            </div>
            <h2><?= $product->nombre ?></h2>
        </a>
        <p><?= $product->precio ?></p>
        <a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button <?=$product->stock == 0 ? 'disabled' : ''?>" >Comprar</a>
    </div>
<?php endwhile; ?>

