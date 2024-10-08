<?php
/**
 * Title: Products All
 * Slug: ullermedical/part-all
 * Categories: Products
 * Viewport width: 1400
 */    

 $args = array(
    'post_type'      => 'product',
    'posts_per_page' => 1000,
);

$loop = new WP_Query( $args ); 

?>

<div class="layout-part-product">
<div class="container-part-product">
        <?php while ( $loop->have_posts() ) : $loop->the_post();
            global $product; ?>
            <article class="item-part-producto">
                <?php echo woocommerce_get_product_thumbnail(); ?>
                <div class="info-product-part">
                    <div>
                        <h5 class="title-part-product"><?php echo the_title(); ?> </h5>
                    </div>
                    <?php echo $product; ?>
                    <div class="row-add-to-cart">
                        <div>
                        <?php 
                            if($product->get_price()) { ?>
                                <p class="part-regular-price ">$<?php echo $product->get_price(); ?></p>
                        <?php }  ?>
                            <h6 class="part-free-shipping">ENVIO GRATIS</h6>
                        </div>
                        <div>
                            <?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="part-add-to-cart"><img src=" ' . get_stylesheet_directory_uri() . '/assets/img/Group-82.png"/></a>',
                                    esc_url( $product->add_to_cart_url() ),
                                    esc_attr( $product->get_id() ),
                                    esc_attr( $product->get_sku() ),
                                    $product->is_purchasable() ? 'add_to_cart_button' : '',
                                    esc_attr( $product->get_type() ),
                                    esc_html( $product->add_to_cart_text() )
                                ),
                            $product ); ?>
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    </div>   
</div>