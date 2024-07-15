<?php
/**
 * Title: Card Cart
 * Slug: ullermedical/card-cart
 * Categories: card
 * Viewport width: 1400
 */
?>
<?php  
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 3,
    );

    $loop = new WP_Query( $args ); ?>

<div class="layout-part-product">
<div class="container-part-product">
    <?php while ( $loop->have_posts() ) : $loop->the_post();
        global $product; ?>
            <article class="item-part-producto">
                <?php echo woocommerce_get_product_thumbnail(); ?>
                <h5 style="margin: 0 !important; font-weight: 500; font-size: 24px; color: #757575 !important;"><?php echo get_the_title(); ?> </h5>
                <p class="part-description-product"><?php echo get_the_content(); ?></p>
                <div class="container-info-part-product">
                    <div>
                        hola
                        <!-- <p class="part-regular-price">$<?php echo $product->get_price(); ?> </p>
                        <h6 class="part-free-shipping">ENVIO GRATIS</h6> -->
                    </div>
                    <!-- <div>
                        <?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                        sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="part-add-to-cart"><img src="http://localhost:10018/wp-content/uploads/2024/05/Group-82.png"/></a>',
                            esc_url( $product->add_to_cart_url() ),
                            esc_attr( $product->get_id() ),
                            esc_attr( $product->get_sku() ),
                            $product->is_purchasable() ? 'add_to_cart_button' : '',
                            esc_attr( $product->get_type() ),
                            esc_html( $product->add_to_cart_text() )
                        ),
                    $product ); ?>
                    </div> -->
                </div>
            </article>
        <?php endwhile; ?>
        </div>
    
    </div>
    <?php

    wp_reset_query();
?>