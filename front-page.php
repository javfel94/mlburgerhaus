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

            <?php 
            }else{ ?>
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
    <div class="photo-carousel">
        <div class="owl-carousel owl-theme">
            <div><img src="https://mlburgerhaus.com/wp-content/uploads/2018/11/burger-1-e1541949692626.jpeg" alt="Burger" /></div>
            <div><img src="https://mlburgerhaus.com/wp-content/uploads/2018/11/burger-3-e1541949662126.jpeg" alt="Burger" /></div>
            <div><img src="https://mlburgerhaus.com/wp-content/uploads/2018/11/burger-2-e1541949722401.jpeg" alt="Burger" /></div>
        </div>
    </div>
    <div class="about-us" id="about">
        <h2 class="main-title">M&amp;L Burger Haus, pronto en Donostia.</h2>
        <div class="col">                        
            <div class="about-text">
                <p>M&amp;L BurgerHaus nace con la intención de acercar esta ciudad, tan dada a la buena gastronomía, a un producto que en los últimos años ha dejado de ser considerado comida basura y se ha convertido en una comida saludable y gourmet.</p>
                <p>M&amp;L es la idea de dos jóvenes vascos entusiasmados por la buena gastronomía y las hamburguesas. Tras probar hamburguesas en decenas de países decidieron seguir su pasión y abrir un restaurante mezclando dos de sus grandes placeres: las hamburguesas y la cerveza.</p>
            </div>
        </div>                               
        <div class="col">                        
            <div class="about-text">
                <p>Nuestra idea es enseñar al público donostiarra que la hamburguesa puede ser también un plato único y especial, con el que se puede innovar y obtener unos sabores auténticos. </p>
                <p>Por ello ofrecemos unas hamburguesas diferentes a cualquier otra del mercado, con unos sabores vivos y una jugosidad y frescura que no se encuentra en otra parte. Todo ello utilizando productos de la tierra, ya que siempre hemos creído en promover el producto local y aprovechar su alta calidad.</p>
                <p>En M&amp;L no nos olvidamos de nadie y por ello ofrecemos opciones para todo tipo de gustos: hamburguesas de ternera, de pollo y vegetarianas. Siendo esta último de un concepto que nada tiene que ver con el resto de hamburguesas vegetarianas del mercado.</p>                        
            </div>                         
        </div>
    </div>

<?php
                  
get_footer();