    <style type="text/css">
            /* root font */
            <?php if(!empty($storer_root_font)){ ?>
                html body{
                    font-family: <?php echo esc_html($storer_root_font); ?>;
                }
            <?php } ?>
            /* title */
            <?php if(!empty($storer_heading_font)){ ?>
                body h1,
                body h2,
                body h3,
                body h4,
                body h5{
                    font-family: <?php echo esc_html($storer_heading_font); ?>;
                }
            <?php } ?>
            <?php if(!empty($storer_heading_weight)){ ?>
                body h2,
                body h3,
                body h4,
                body h5{
                    font-weight: <?php echo esc_html($storer_heading_weight); ?>;
                }
            <?php } ?>
            <?php if(!empty($storer_heading_case)){ ?>
                body .twp-section-title{
                    text-transform: <?php echo esc_html($storer_heading_case); ?>;
                }
            <?php } ?>
            /* HEADER COLOR */
            <?php if(!empty( $storer_header_color)){ ?>
                body .twp-preloader,
                body .twp-site-footer,
                body .twp-header,
                body .twp-site-branding.sticky,
                body .twp-main-navigation .twp-feature-category-list{
                    background-color: <?php echo esc_html( $storer_header_color); ?>;
                }
                body .twp-footer-widget-section{
                    background-color: rgba(<?php echo esc_html($header_color_rgb)?>,0.92);
                }
            <?php } ?>
            /* Header bg text color*/
            <?php if(!empty($storer_header_text_color)){ ?>
                
                body .twp-preloader,
                body .twp-site-footer,
                body .twp-site-footer .site-info a:hover,
                body .twp-site-footer ul a,
                body .twp-site-footer ul a:visited,
                body .twp-header,
                body .twp-header a,
                body .twp-header button,
                body .twp-header a:visited,
                body .twp-header button:visited,
                body .twp-main-navigation .twp-feature-category-list a,
                body .twp-main-navigation .twp-feature-category-list a:visited,
                body .twp-footer-widget-section,
                body .twp-footer-widget-section a,
                body .twp-footer-widget-section a:visited{
                    color: <?php echo esc_html($storer_header_text_color); ?>;
                }
                body .twp-preloader .twp-circle,
                body .twp-menu-icon span:before,
                body .twp-menu-icon span:after{
                    background-color: <?php echo esc_html($storer_header_text_color); ?>;
                }

                
            <?php } ?>
            /* primary color */
            <?php if(!empty($storer_primary_color)){ ?>
                body a:hover,
                body .twp-post-title-md a:hover,
                body .twp-meta-tag .twp-icon,
                body .twp-archive-post .entry-footer .cat-links a,
                body .twp-archive-post .entry-footer .tags-links a,
                body .twp-archive-post .entry-footer .cat-links a:visited,
                body .twp-archive-post .entry-footer .tags-links a:visited,
                body .twp-compare-icon a.button:hover,
                body .twp-compare-icon a.button.alt:hover,
                body .twp-compare-icon a.compare:hover,
                body .twp-quick-view-icon a.button:hover,
                body .twp-quick-view-icon a.button.alt:hover,
                body .twp-quick-view-icon a.compare:hover,
                body .twp-product-wishlist-icon a.button:hover,
                body .twp-product-wishlist-icon a.button.alt:hover,
                body .twp-product-wishlist-icon a.compare:hover,
                body .twp-site-feature .twp-user .twp-content a:hover,
                body .twp-site-feature .twp-cart .twp-content a:hover,
                body .twp-site-feature .twp-cart .twp-cart-counter,
                body .twp-site-feature .twp-cart .twp-wishlist-counter,
                body .twp-site-feature .twp-wishlist .twp-cart-counter,
                body .twp-site-feature .twp-wishlist .twp-wishlist-counter,
                body .twp-arrow .slick-arrow,
                body .wp-block-gallery .slick-arrow,
                body .widget_media_gallery .slick-arrow,
                body .twp-slick .slick-arrow,
                body .twp-title-style-1 a,
                body .mfp-container .mfp-arrow-left:hover:before,
                body .mfp-container .mfp-arrow-right:hover:before ,
                body .desktop ul.twp-nav-menu > li .sub-menu a:hover,
                body .desktop div.twp-nav-menu > ul > li .children a:hover,
                body .desktop ul.twp-nav-menu > li > a:hover,
                body .desktop div.twp-nav-menu > ul > li > a:hover,
                body .twp-single-post .entry-footer .twp-icon,
                body .twp-single-post .entry-footer i,
                body .twp-single-post blockquote p:before,
                body .twp-single-post blockquote p:after,
                body .twp-single-post blockquote cite,
                body .widget.widget_calendar a,
                body .widget.widget_calendar a:visited,
                body .twp-header a:hover,
                body .twp-header button:hover ,
                body .twp-header .twp-feature:hover,
                body .woocommerce .product .stock.out-of-stock,
                body .twp-404-section .page-title,
                body .woocommerce ul.shop_table .product-remove a:before,
                body .woocommerce table.shop_table .product-remove a:before,
                body .woocommerce table.twp-cart-table tfoot .twp-icon,
                body .twp-minicart-content .woocommerce ul.cart_list li .remove:before,
                body .twp-minicart-content .woocommerce ul.product_list_widget li .remove:before,
                body .widget.twp-woocommerce-widget li .count,
                body .twp-footer-widget-section .widget li .count,
                body .woocommerce .twp-single-product .twp-product-summary form .twp-quantity-section-icon .button:hover,
                body .woocommerce .twp-single-product .twp-product-summary form .twp-quantity-section-icon .compare:hover,
                body .woocommerce .product .summary .product_meta span a:hover,
                body .woocommerce .product .twp-product-summary .product_meta span a:hover,
                body .woocommerce ul.products .twp-product .twp-btn-section .button:hover ,
                body #yith-quick-view-modal #yith-quick-view-close{
                    color: <?php echo esc_html($storer_primary_color); ?>;
                }
                body .widget.twp-woocommerce-widget ul.product_list_widget li .remove,
                body .twp-footer-widget-section .widget ul.product_list_widget li .remove,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget ul.products-list .remove,
                body .twp-footer-widget-section .widget.yith-woocompare-widget ul.products-list .remove{
                    color: <?php echo esc_html($storer_primary_color); ?> !important;
                }
                body .twp-sale,
                body .onsale,
                body .product span.onsale,
                body .twp-category a,
                body .post-navigation a,
                body .posts-navigation a,
                body .twp-page-title::after,
                body .twp-btn.twp-primary-btn,
                body #scroll-top:hover,
                body .twp-nav-menu .twp-menu-description,
                body .widget .search-form .search-submit,
                body .widget .tagcloud a,
                body #yith-wcwl-popup-message,
                body .twp-404-section .search-form .search-submit,
                body .twp-minicart-content .woocommerce .widget_shopping_cart .buttons .button,
                body .twp-minicart-content .woocommerce.widget_shopping_cart .buttons .button,
                body .woocommerce .twp-cart-collaterals .twp-cart-total .cart_totals .wc-proceed-to-checkout a,
                body .woocommerce .twp-cart-collaterals .twp-shiping-form .woocommerce-shipping-calculator .shipping-calculator-button,
                body .widget.twp-woocommerce-widget .woocommerce-product-search button[type=submit],
                body .twp-footer-widget-section .widget .woocommerce-product-search button[type=submit],
                body .widget.twp-woocommerce-widget .widget_shopping_cart_content .buttons a,
                body .twp-footer-widget-section .widget .widget_shopping_cart_content .buttons a ,
                body .widget.twp-woocommerce-widget.widget_price_filter button:hover,
                body .twp-footer-widget-section .widget.widget_price_filter button:hover,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget a.button:hover,
                body .twp-footer-widget-section .widget.yith-woocompare-widget a.button:hover,
                body .woocommerce .product div.woocommerce-product-gallery a.woocommerce-product-gallery__trigger:after,
                body .woocommerce .product .summary form.cart button,
                body .woocommerce .product .summary .woocommerce-variation-add-to-cart button,
                body .woocommerce .product .twp-product-summary form.cart button,
                body .woocommerce .product .twp-product-summary .woocommerce-variation-add-to-cart button,
                body .wp-block-gallery .slick-dots .slick-active button,
                body .widget_media_gallery .slick-dots .slick-active button,
                body .twp-slick .slick-dots .slick-active button {
                    background-color: <?php echo esc_html($storer_primary_color); ?>;
                }
                body .post-navigation a,
                body .posts-navigation a,
                body .twp-title-style-1 a,
                body .twp-btn.twp-primary-btn,
                body .woocommerce .product div.woocommerce-product-gallery a.woocommerce-product-gallery__trigger:before,
                body .woocommerce .product .summary form.cart button,
                body .woocommerce .product .summary .woocommerce-variation-add-to-cart button,
                body .woocommerce .product .twp-product-summary form.cart button,
                body .woocommerce .product .twp-product-summary .woocommerce-variation-add-to-cart button{
                    border-color: <?php echo esc_html($storer_primary_color); ?>;
                }
                body .desktop .twp-nav-menu .twp-menu-description:before{
                    border-top-color: <?php echo esc_html($storer_primary_color); ?>;
                }
                body .twp-category a:hover,
                body .post-navigation a:hover,
                body .posts-navigation a:hover,
                body .widget .search-form .search-submit:hover,
                body .widget .tagcloud a:hover,
                body .twp-404-section .search-form .search-submit:hover,
                body .woocommerce ul.shop_table .product-remove a:hover:before,
                body .woocommerce table.shop_table .product-remove a:hover:before,
                body .widget.twp-woocommerce-widget .woocommerce-product-search button[type=submit]:hover,
                body .twp-footer-widget-section .widget .woocommerce-product-search button[type=submit]:hover,
                body .widget.twp-woocommerce-widget .widget_shopping_cart_content .buttons a:hover,
                body .twp-footer-widget-section .widget .widget_shopping_cart_content .buttons a:hover,
                body .woocommerce .product .summary form.cart button:hover,
                body .woocommerce .product .summary .woocommerce-variation-add-to-cart button:hover,
                body .woocommerce .product .twp-product-summary form.cart button:hover,
                body .woocommerce .product .twp-product-summary .woocommerce-variation-add-to-cart button:hover,
                body #yith-quick-view-modal #yith-quick-view-close:hover{
                    background-color: rgba(<?php echo esc_html($primary_color_rgb); ?>,0.64);
                }
                body .twp-archive-post .entry-footer .cat-links a:hover,
                body .twp-archive-post .entry-footer .tags-links a:hover{
                    color: rgba(<?php echo esc_html($primary_color_rgb); ?>,0.64);
                }

            <?php } ?>
            /* primary bg text color */
            <?php if(!empty($storer_primary_bg_text_color)){ ?>
                body .twp-sale,
                body .onsale,
                body .product span.onsale,
                body .twp-category a,
                body .twp-category a:visited,
                body .post-navigation a:visited,
                body .posts-navigation a:visited,
                body .twp-btn.twp-primary-btn,
                body #scroll-top:hover,
                body .twp-nav-menu .twp-menu-description,
                body .widget .search-form .search-submit,
                body .widget .tagcloud a,
                body .widget .tagcloud a:visited,
                body #yith-wcwl-popup-message,
                body .twp-404-section .search-form .search-submit,
                body .twp-minicart-content .woocommerce .widget_shopping_cart .buttons .button,
                body .twp-minicart-content .woocommerce.widget_shopping_cart .buttons .button,
                body .woocommerce .twp-cart-collaterals .twp-cart-total .cart_totals .wc-proceed-to-checkout a,
                body .woocommerce .twp-cart-collaterals .twp-shiping-form .woocommerce-shipping-calculator .shipping-calculator-button
                body .widget.twp-woocommerce-widget .woocommerce-product-search button[type=submit],
                body .twp-footer-widget-section .widget .woocommerce-product-search button[type=submit],
                body .widget.twp-woocommerce-widget .widget_shopping_cart_content .buttons a,
                body .twp-footer-widget-section .widget .widget_shopping_cart_content .buttons a,
                body .widget.twp-woocommerce-widget.widget_price_filter button:hover,
                body .twp-footer-widget-section .widget.widget_price_filter button:hover,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget a.button:hover,
                body .twp-footer-widget-section .widget.yith-woocompare-widget a.button:hover,
                body .woocommerce .product .summary form.cart button,
                body .woocommerce .product .summary .woocommerce-variation-add-to-cart button,
                body .woocommerce .product .twp-product-summary form.cart button,
                body .woocommerce .product .twp-product-summary .woocommerce-variation-add-to-cart button {
                    color: <?php echo esc_html($storer_primary_bg_text_color); ?>;
                }
            <?php } ?>

            /* SECONDARY COLOR */
            <?php if(!empty($storer_secondary_color)){ ?>
                body .twp-meta-tag-secondary,
                body .twp-meta-tag-secondary .twp-icon,
                body .twp-meta-tag-secondary a,
                body .twp-meta-tag-secondary a:visited,
                body .twp-store-feature-post .twp-icon,
                body .twp-price .price,
                body .woocommerce ul.products li.product .twp-price .price,
                body .twp-mobile-menu .twp-mobile-close-icon button,
                body .comments-area .comment-respond .comment-form .logged-in-as a,
                body .comments-area .comment-list li .comment-reply-link,
                body .comments-area .comment-respond .comment-form .logged-in-as a:visited,
                body .comments-area .comment-list li .comment-reply-link:visited,
                body .comments-area #respond input#submit:hover,
                body .comments-area .comment-list li .comment-meta,
                body .widget.widget_calendar a:hover,
                body .twp-site-footer .site-info a,
                body .twp-site-footer .site-info a:visited,
                body .twp-site-footer ul a:hover,
                body .twp-main-navigation .twp-feature-category-list a:hover,
                body .twp-offcanvas-section .twp-close-section button,
                body .twp-footer-widget-section a:hover,
                body .woocommerce .woocommerce-breadcrumb a,
                body .widget.twp-woocommerce-widget ul.product_list_widget li .star-rating,
                body .twp-footer-widget-section .widget ul.product_list_widget li .star-rating,
                body .widget.twp-woocommerce-widget ul.product_list_widget li ins,
                body .twp-footer-widget-section .widget ul.product_list_widget li ins,
                body .widget.twp-woocommerce-widget .widget_shopping_cart_content .total span,
                body .twp-footer-widget-section .widget .widget_shopping_cart_content .total span,
                body .widget.twp-woocommerce-widget .star-rating:before,
                body .twp-footer-widget-section .widget .star-rating:before,
                body .widget.twp-woocommerce-widget .star-rating span:before,
                body .twp-footer-widget-section .widget .star-rating span:before,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget .clear-all,
                body .twp-footer-widget-section .widget.yith-woocompare-widget .clear-all,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget .clear-all:visited,
                body .twp-footer-widget-section .widget.yith-woocompare-widget .clear-all:visited,
                body .woocommerce .product .summary .price,
                body .woocommerce .product .twp-product-summary .price,
                body .woocommerce .product .summary .product_meta span,
                body .woocommerce .product .twp-product-summary .product_meta span,
                body .woocommerce .product div.woocommerce-tabs ul.tabs li a:active{
                    color: <?php echo esc_html($storer_secondary_color); ?>
                }
                body .widget.twp-woocommerce-widget ul.product_list_widget li .remove:hover,
                body .twp-footer-widget-section .widget ul.product_list_widget li .remove:hover,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget ul.products-list .remove:hover,
                body .twp-footer-widget-section .widget.yith-woocompare-widget ul.products-list .remove:hover{
                    color: <?php echo esc_html($storer_secondary_color);?> !important;
                }
                body .twp-btn.twp-secondary-btn,
                body .twp-search-field button[type=submit],
                body .comments-area .comment-respond .comment-form .logged-in-as a:hover,
                body .comments-area .comment-list li .comment-reply-link:hover,
                body .comments-area #respond input#submit,
                body .woocommerce .wishlist_table .product-name .button,
                body .woocommerce .twp-cart-collaterals .twp-cart-total .cart_totals table .twp-coupon .coupon button ,
                body .widget.twp-woocommerce-widget.widget_price_filter .ui-slider-range,
                body .widget.twp-woocommerce-widget.widget_price_filter .ui-slider-handle,
                body .twp-footer-widget-section .widget.widget_price_filter .ui-slider-range,
                body .twp-footer-widget-section .widget.widget_price_filter .ui-slider-handle {
                    background-color: <?php echo esc_html($storer_secondary_color); ?>;
                }
                body .comments-area #respond input#submit:hover,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget ul.products-list .remove:hover,
                body .twp-footer-widget-section .widget.yith-woocompare-widget ul.products-list .remove:hover{
                    background-color: transparent;
                }
                body .twp-product-count .twp-product-count-wrapper,
                body .twp-search-field button[type=submit],
                body .twp-btn.twp-secondary-btn,
                body .comments-area .comment-respond .comment-form .logged-in-as a,
                body .comments-area .comment-list li .comment-reply-link,
                body .comments-area #respond input#submit,
                body .woocommerce .twp-cart-collaterals .twp-cart-total .cart_totals table .twp-coupon .coupon button,
                body .woocommerce .twp-cart-collaterals .twp-shiping-form .woocommerce-shipping-calculator .shipping-calculator-form button{
                    border-color: <?php echo esc_html($storer_secondary_color); ?>
                }
                body .twp-meta-tag-secondary a:hover,
                body .widget.twp-woocommerce-widget.yith-woocompare-widget .clear-all:hover,
                body .twp-footer-widget-section .widget.yith-woocompare-widget .clear-all:hover{
                    color: rgba(<?php echo esc_html($secondary_color_rgb); ?>,0.64);
                }
                body .twp-search-field button[type=submit]:hover,
                body .twp-btn.twp-secondary-btn,
                body .woocommerce .wishlist_table .product-name .button:hover{
                    background-color: rgba(<?php echo esc_html($secondary_color_rgb); ?>,0.64);
                }
            <?php } ?>

            /*SECONDARY BG TEXT COLOR  */
            <?php if(!empty($storer_primary_bg_text_color)){ ?>
                body .twp-search-field button[type=submit],
                body .twp-search-field button[type=submit]:visited,
                body .twp-search-field button[type=submit]:hover,
                body .twp-btn.twp-secondary-btn,
                body .comments-area .comment-respond .comment-form .logged-in-as a:hover,
                body .comments-area .comment-list li .comment-reply-link:hover,
                body .comments-area #respond input#submit,
                body .comments-area #respond input#submit:visited,
                body .woocommerce .wishlist_table .product-name .button,
                body .woocommerce .twp-cart-collaterals .twp-cart-total .cart_totals table .twp-coupon .coupon button,
                body .woocommerce .twp-cart-collaterals .twp-shiping-form .woocommerce-shipping-calculator .shipping-calculator-form button{
                    color: <?php echo esc_html($storer_secondary_bg_text_color); ?>
                }
            <?php } ?>


        </style>