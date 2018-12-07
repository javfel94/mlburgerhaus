<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wedding Band 
 */
    $restaurant_and_cafe_enabled_sections       = restaurant_and_cafe_get_sections();
    $restaurant_and_cafe_ed_slider_section      = get_theme_mod( 'restaurant_and_cafe_ed_slider_section' );
    $restaurant_and_cafe_testimonial_section_bg = get_theme_mod( 'restaurant_and_cafe_testimonial_section_bg' );
    $restaurant_and_cafe_reservation_section_bg = get_theme_mod( 'restaurant_and_cafe_reservation_section_bg' );

get_header(); 

           
    if ( 'posts' == get_option( 'show_on_front' ) ) {

       include( get_home_template() );

    }elseif( $restaurant_and_cafe_enabled_sections ){ 

        foreach( $restaurant_and_cafe_enabled_sections as $restaurant_and_cafe_section ){ 
            
            if ( $restaurant_and_cafe_section['id'] == "about" ) { 

                 do_action('restaurant_and_cafe_about_child');

            }elseif ( $restaurant_and_cafe_section['id'] == "testimonial") { ?>

                <section class="<?php echo esc_attr( $restaurant_and_cafe_section['class'] ); ?>" id="<?php echo esc_attr( $restaurant_and_cafe_section['id'] ); ?>" <?php if( $restaurant_and_cafe_testimonial_section_bg ) echo 'style="background: url(' . esc_url( $restaurant_and_cafe_testimonial_section_bg ) . ')no-repeat; background-size: cover; background-position: center; "';?> >
                    <?php get_template_part( 'sections/section', esc_attr( $restaurant_and_cafe_section['id'] ) ); ?>
                </section>

            <?php }elseif ( $restaurant_and_cafe_section['id'] == "reservation") { ?>  

                <section class="<?php echo esc_attr( $restaurant_and_cafe_section['class'] ); ?>" id="<?php echo esc_attr( $restaurant_and_cafe_section['id'] ); ?>" <?php if( $restaurant_and_cafe_reservation_section_bg ) echo 'style="background: url(' . esc_url( $restaurant_and_cafe_reservation_section_bg ) . ')no-repeat; background-size: cover; background-position: center; "';?> >
                    <?php get_template_part( 'sections/section', esc_attr( $restaurant_and_cafe_section['id'] ) ); ?>
                </section>

            <?php  }elseif ( $restaurant_and_cafe_section['id'] == "slider") { ?>  

                    <?php get_template_part( 'sections/section', esc_attr( $restaurant_and_cafe_section['id'] ) ); //section tag added in template, to add background image as css property?> 
             
            <?php }else { ?>
                <section class="<?php echo esc_attr( $restaurant_and_cafe_section['class'] ); ?>" id="<?php echo esc_attr( $restaurant_and_cafe_section['id'] ); ?>">
                    <?php get_template_part( 'sections/section', esc_attr( $restaurant_and_cafe_section['id'] ) ); ?>
                </section>
            <?php
            }
        }      
    }else {

        include( get_page_template() );

    }

    ?>
    <div class="about-us-2" id="about-2">
        <h2 class="main-title">M&amp;L Burger Haus, pronto en Donostia.</h2>   
        <div class="about-grid">                                               
            <p>M&amp;L BurgerHaus nace con la intención de acercar esta ciudad, tan dada a la buena gastronomía, a un producto que en los últimos años ha dejado de ser considerado comida basura y se ha convertido en una comida saludable y gourmet.</p>
            <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2018/11/icons8-hamburger-80.png" alt="burger-image"/>                                                     
            <p>La hamburguesa es el eje de nuestro local, pero ni mucho menos el único producto que ofrecemos. Alitas de pollo al auténtico estilo americano, suculentos postres caseros y una variada carta de cervezas artesanales son algunas de nuestras propuestas adicionales.</p>                                                         
            <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2018/11/icons8-beer-glass-64.png" alt="beer-image"/>
            <p>En M&amp;L no nos olvidamos de nadie y por ello ofrecemos opciones para todo tipo de gustos: hamburguesas de ternera, de pollo y vegetarianas. Todo ello utilizando productos locales y de alta calidad. </p>
            <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2018/11/icons8-natural-food-64.png" alt="healthy-food-image"/>
        </div>
        <div class="about-us-link">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>conocenos/">Conócenos</a>
        </div>
    </div>
    <div class="photo-carousel">
        <div class="owl-carousel owl-theme">
            <div><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2018/11/burger-1-e1541949692626.jpeg" alt="Burger" /></div>
            <div><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2018/11/burger-3-e1541949662126.jpeg" alt="Burger" /></div>
            <div><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2018/11/DSC_0302.jpg" alt="Burger" /></div>
            <div><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2018/11/DSC_0305.jpg" alt="Burger" /></div>
            <div><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2018/11/ml-burger.jpeg" alt="Burger" /></div>
        </div>
    </div>

<?php
                  
get_footer();