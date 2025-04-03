<?php


return [
	'title' => __( 'Blocksy - Hero Section', 'blocksy' ),
	'categories' => ['about', 'blocksy'],
	
	'content' => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem"}}},"backgroundColor":"black","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-black-background-color has-background" style="padding-top:7rem;padding-bottom:7rem"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-bottom:20px;font-style:normal;font-weight:500">Our amazing clients</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-xx-large-font-size" style="margin-top:0;margin-bottom:20px;font-style:normal;font-weight:800;line-height:1.2">The Perfect Theme For <br>Stunning Websites!</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--80)">Lorem ipsum dolor sit amet consectetur adipiscing eiusmod tempor incididunt.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"50px","bottom":"50px","left":"50px","right":"50px"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}},"backgroundColor":"white"} -->
<div class="wp-block-columns are-vertically-aligned-center has-white-background-color has-background" style="border-radius:20px;padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":7891,"width":"auto","height":"25px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . trailingslashit( get_template_directory_uri() ) . 'inc/components/patterns/assets/pattern-client-1.svg" alt="" class="wp-image-7891" style="width:auto;height:25px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":7892,"width":"auto","height":"25px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . trailingslashit( get_template_directory_uri() ) . 'inc/components/patterns/assets/pattern-client-2.svg" alt="" class="wp-image-7892" style="width:auto;height:25px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":7893,"width":"auto","height":"25px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . trailingslashit( get_template_directory_uri() ) . 'inc/components/patterns/assets/pattern-client-3.svg" alt="" class="wp-image-7893" style="width:auto;height:25px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":7894,"width":"auto","height":"25px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . trailingslashit( get_template_directory_uri() ) . 'inc/components/patterns/assets/pattern-client-4.svg" alt="" class="wp-image-7894" style="width:auto;height:25px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":7895,"width":"auto","height":"25px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . trailingslashit( get_template_directory_uri() ) . 'inc/components/patterns/assets/pattern-client-5.svg" alt="" class="wp-image-7895" style="width:auto;height:25px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":7896,"width":"auto","height":"25px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . trailingslashit( get_template_directory_uri() ) . 'inc/components/patterns/assets/pattern-client-6.svg" alt="" class="wp-image-7896" style="width:auto;height:25px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->'
];