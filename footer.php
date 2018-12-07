<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Restaurant_and_Cafe
 */

    $ed_section = restaurant_and_cafe_get_sections();

    if( is_home() || ! $ed_section || ! ( is_front_page()  || is_page_template( 'template-home.php' ) ) ){ ?>
        		</div>
        	</div><!-- #content -->
        </div>
    <?php } ?>

	<footer id="colophon" class="site-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
        <div class="widget-area">
            <div class="container">
                <div class= "col-3">
                    <h2>Contact Us</h2>
                    <p><a href="mailto:mlburgerhaus@gmail.com">mlburgerhaus@gmail.com</a></p>
                </div>
                <div class= "col-3">
                    <h2>Follow Us</h2>            
                    <ul class="social-networks">
                        <li><a href="https://www.facebook.com/MandLBurgerHaus/" title="Facebook" class="fa fa-facebook"></a></li>
                        <li><a href="https://www.instagram.com/mlburgerhaus/" title="Instagram" class="fa fa-instagram"></a></li>
                    </ul>
                </div>
            </div>	
        </div>
        <div class="copyright">
            <small> 
                <i class="fa fa-copyright"></i> 
                2018 M and L Burger Haus - Todos los derechos reservados
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>politica-de-privacidad">Política de privacidad</a>
            </small>
        </div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>