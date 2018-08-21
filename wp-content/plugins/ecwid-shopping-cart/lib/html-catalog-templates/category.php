
<?php if ( $main_category ): ?>
    
<h1 class="category-name"><?php echo $main_category->name; ?></h1>
<?php if ( $main_category->description ): ?>
<div class="category-description"><?php echo $main_category->description; ?></div>
<?php endif; ?>

<?php endif; ?>

<?php if ( $categories ): foreach ( $categories as $category ): ?>
<div class="category-<?php echo $category->id; ?>">
	<a href="<?php echo Ecwid_Store_Page::get_category_url( $category->id ); ?>">
        <?php echo EcwidPlatform::esc_html( $category->name ); ?> 
    </a>
</div>
<?php endforeach; endif; ?>

<?php if ( $products ): foreach ( $products as $product ): ?>

<?php $product = Ecwid_Product::get_by_id($product->id); ?>
<div class="text-center product_card product-<?php echo $product->id; ?>">
	<div class="mark_wrapper">
		<div class="t776__mark">пакет 2 кг</div>
	</div>
	
	<div class="item">
		<span class="product-name">
			<a href="<?php echo $product->link; ?>">
				<?php echo EcwidPlatform::esc_html( $product->name ); ?> 
			</a>
		</span>
		
	</div>
	<div class="product_name">100% Индюшка</div>
	<div class="product_description">для взрослых (от года) кастрированных кошек</div>
	<div class="product_price">
		<span class="product-price">
        <?php echo $product->defaultDisplayedPrice . ' ' . $formats->currency; ?> 
    </span>
	</div>
	<a href="#zakaz" class="btn redcolor  popup-with-form">В корзину</a>
</div>


<?php endforeach; endif; ?>
