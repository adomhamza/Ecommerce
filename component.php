function add_to_cart($productname, $productprice, $productimg, $productid){
$element = "
<form action=\"index.php\" method=\"post\">
    <div class="dropdown-cart-products">
        <div class="product">
            <div class="product-details">
                <h4 class="product-title">
                    <a href="product.php">$productname</a>
                </h4>

                <span class="cart-product-info">
                    <span class="cart-product-qty">1</span>
                    x $productprice
                </span>
            </div><!-- End .product-details -->

            <figure class="product-image-container">
                <a href="product.php" class="product-image">
                    <img src="assets/images/products/cart/$productimg" alt="product">
                </a>
                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
            </figure>
        </div><!-- End .product -->


    </div><!-- End .cart-product -->
</form>
";
echo $element;
}