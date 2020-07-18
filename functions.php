<?php

function component(){
    $element = ' 
      <div class="product-default">
        <figure>
            <a href="product.html">
             <img src="assets/images/products/product-1.jpg">
            </a>
        </figure>
    <div class="product-details">
        <div class="ratings-container">
            <!-- <div class="product-ratings">
                <span class="ratings" style="width:100%"></span> --><!-- End .ratings -->
               <!--  <span class="tooltiptext tooltip-top"></span>
            </div> --><!-- End .product-ratings -->
        </div><!-- End .product-container -->
        <h2 class="product-title">
            <a href="product.html">Product Short Name</a>
        </h2>
        <div class="price-box">
            <span class="product-price">$9.00</span>
        </div><!-- End .price-box -->
        <div class="product-action">
            <!-- <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a> -->
            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
            <!-- <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> --> 
        </div>
    </div><!-- End .product-details -->
 </div>';
    echo $element;
};