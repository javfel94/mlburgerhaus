<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', PHP_INT_MAX);

    function my_theme_enqueue_styles() {

        $parent_style = 'parent-style'; 
    
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style )
        );
    }

    function my_theme_scripts_function() {

        /* load the minified script Library from the Child Theme Folder */
        wp_enqueue_script('jquery_min_script', get_stylesheet_directory_uri() .'/js/jquery.min.js');
 
        /* load your custom script from the Child Theme Folder */
        wp_enqueue_script('my_script', get_stylesheet_directory_uri() .'/js/child.js');  
      
      }
      
      add_action('wp_enqueue_scripts','my_theme_scripts_function');
    


// END ENQUEUE PARENT ACTION



function restaurant_and_cafe_banner_cb_child(){     // BANNER FOR CHILD THEME
    $restaurant_and_cafe_ed_slider_section = get_theme_mod( 'restaurant_and_cafe_ed_slider_section' );
    $restaurant_and_cafe_banner_post       = get_theme_mod( 'restaurant_and_cafe_banner_post' );
    $restaurant_and_cafe_banner_read_more  = get_theme_mod( 'restaurant_and_cafe_banner_read_more',  __( 'Get Started', 'restaurant-and-cafe' ) );
    ?>
        <?php 
            if( $restaurant_and_cafe_ed_slider_section ){
                
                $banner_qry = new WP_Query( array( 'p' => $restaurant_and_cafe_banner_post ) );
                
                if( $banner_qry->have_posts() ){
                    while( $banner_qry->have_posts() ){
                        $banner_qry->the_post();
                        $categories_list = get_the_category_list( esc_html__( ', ', 'restaurant-and-cafe' ) );
                        if( has_post_thumbnail() ){
                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                            echo '<div class="banner" id="slider" style="background-image: url('. esc_url($featured_img_url) .')">';
                            echo '</div>';
                        ?>                      
                        <?php
                        }
                    }
                    wp_reset_postdata();
                }
                
            }
        ?>
    <?php
    }
    
    add_action( 'restaurant_and_cafe_banner_child', 'restaurant_and_cafe_banner_cb_child' );

    /** Callback Function for about Block - child theme */
function restaurant_and_cafe_about_cb_child(){

    $restaurant_and_cafe_about_section_bg = get_theme_mod('restaurant_and_cafe_about_section_bg');
    $restaurant_and_cafe_about_section_page = get_theme_mod( 'restaurant_and_cafe_about_section_page' );
        
    
        ?>
        <section class="section-2" id="<?php echo esc_html( 'about' ); ?>" <?php if( $restaurant_and_cafe_about_section_bg ) echo 'style="background: url(' . esc_url( $restaurant_and_cafe_about_section_bg ) . '); background-size: cover; background-repeat: no-repeat; background-position: center;"';?> >
    <?php
     if($restaurant_and_cafe_about_section_page){
    
      $about_qry = new WP_Query( array( 
                        'post_type'             => 'page',
                        'post__in'              => array( $restaurant_and_cafe_about_section_page ),
                        'post_status'           => 'publish',
                        'posts_per_page'        => -1,
                        'ignore_sticky_posts'   => true ) );
    
     ?>
    
      <div class="container">
        
        <?php
          if( $about_qry->have_posts() ){                
                        while( $about_qry->have_posts() ){
                            $about_qry->the_post(); ?>                
                <div class="text-holder">
                <?php
                    the_title( '<h2 class="main-title">', '</h2>' );  
                    ?>
                    <div class="about-text">
                    <?php
                        the_content();
                    ?>
                    </div>
                </div>                
                <?php } 
    
                wp_reset_postdata();
    
              } ?>
        
      </div>
    <?php } ?>
    </section>
    <?php
     } 
     add_action( 'restaurant_and_cafe_about_child', 'restaurant_and_cafe_about_cb_child' ); 