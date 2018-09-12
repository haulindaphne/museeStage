<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
</div><!-- .site-content-->

 <footer id="colophon" class="site-footer" role="contentinfo">
    <?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
		    		'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
					) );
				?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>

	<div class="site-info">
		<?php
			/**
			 * Fires before the twentysixteen footer text for footer customization.
			 *
			 * @since Twenty Sixteen 1.0
			 */
			do_action( 'twentysixteen_credits' );
		?>

	<section class="site-footer-container">
		<div class="container-fluid">
			<div class="row googlemap">
				<div class="col-md-12 site-footer-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.841145429581!2d4.403191515629416!3d50.38815977946682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2244b5a1ea859%3A0x10e2cbc10483b89!2sMus%C3%A9e+de+la+Photographie!5e0!3m2!1sfr!2sbe!4v1532514818774" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div><!-- .col-md-12 site-footer-map -->
			</div><!-- .row googlemap -->

			<div class="row informations">
				<div class="col-md-4 site-footer-address">
                    <div id="address-text">
                        <p id="site-footer-address-title"><strong>Musée de la Photographie</strong></p>
                        <p class="site-footer-address-txt">Avenue Paul Pastur 11,</p>
                        <p class="site-footer-address-txt">6032 Charleroi.</p>
                      <!--  <p class="site-footer-address-txt">GPS: Place des Essarts.</p> -->

                        <div class="site-footer-socialNetwork">
                            <a href="">
                                <img class="socialNetwork-img" src="http://localhost/museedelaphotographie/wp-content/uploads/2018/07/googleplus.png" alt="Logo GooglePlus">
                            </a> 
                            <a href="">
                                <img class="socialNetwork-img" src="http://localhost/museedelaphotographie/wp-content/uploads/2018/07/pinterest.svg" alt="Logo Pinterest">
                            </a>
                            <a href="">
                                <img class="socialNetwork-img" src="http://localhost/museedelaphotographie/wp-content/uploads/2018/07/instagram.svg" alt="Logo Instagram">
                            </a>
                            <a href="https://www.facebook.com/museephotocharleroi/"> 
                                <img class="socialNetwork-img" src="http://localhost/museedelaphotographie/wp-content/uploads/2018/07/facebook.svg" alt="logo Facebook">
                            </a>
                            
                        </div><!-- .site-footer-socialNetwork --> 
                        <div id="logo-site-footer">
                        <img class="site-footer-logo" src="http://localhost/museedelaphotographie/wp-content/uploads/2018/08/logogris-e1533898218744.png" alt="logo du musée de la photographie" width="150">
                    </div><!-- #logo-site-footer -->        

                    </div><!-- #address-text -->
				</div><!-- col-md-4 site-footer-address -->

				<div class="col-md-4 site-footer-access">
                    <div id="itineris">
                        <p class="site-footer-title">Accessibilité:</p>
                        <p class="site-footer-access-txt"><span>GPS</span> : place des Essarts</p>
                        <p class="site-footer-access-txt"><span>Bruxelles</span> : A54 et Ring 9, sortie "Porte de la Villette".</p>
                        <p class="site-footer-access-txt"><span>Mons ou Namur:</span> E42, prendre le périphérique R3, sortie 5. </p>
                        
                        <div class="access-icon">
                            <img class="site-footer-ico" src="http://localhost/museedelaphotographie/wp-content/uploads/2018/07/no-smoking-sign.svg" alt="logo no-smoking">
                            <img class="site-footer-ico" src="http://localhost/museedelaphotographie/wp-content/uploads/2018/07/handicap-wc.svg" alt="logo pmr-wc">
                            <img class="site-footer-ico" src="http://localhost/museedelaphotographie/wp-content/uploads/2018/07/handicap-park.svg" alt="logo pmr-parking">
                            <img class="site-footer-ico" src="http://localhost/museedelaphotographie/wp-content/uploads/2018/07/handicap-asc.svg" alt="logo pmr-lift">
                            <img class="site-footer-ico" src="http://localhost/museedelaphotographie/wp-content/uploads/2018/07/handicap-1.svg" alt="logo pmr">
                        </div><!-- .access-icon -->
                    </div><!-- #itineris -->
                </div><!-- .site-footer-access -->
                
				<div class="col-md-4 site-footer-practical">
                    <div id="practice">
                        <p class="site-footer-title">Infos pratiques:</p>
                            <ul class="site-footer-txt">
                                <li><p class="site-footer-practical-txt">7,00 euros pour les visiteurs individuels </p></li>
                                <li><p class="site-footer-practical-txt">5,00 euros pour les seniors et les groupes à partir de 10 personnes</p></li>
                                <li><p class="site-footer-practical-txt">4,00 euros pour les étudiants et les demandeurs d'emploi</p></li>
                            </ul>
                            
                        <p class="want-more">
                            <a href="http://localhost/museedelaphotographie/planifier-sa-visite/">En savoir plus...</a>
                        </p>
                    </div><!-- #practice -->
				</div><!-- .col-md-4 site-footer-practical -->
            </div><!-- .row informations -->

            <div class="row quality">
                <div class="col-md-2"><!-- empty --></div>
                
                <div class="col-md-8 site-footer-partners" id="partners">
                    <?php echo do_shortcode("[smls id='247']"); ?>
                </div><!-- .site-footer-partners -->

                <div class="col-md-2 site-footer-quality" id="quality">
                    <div class="quality-gallery">
                    <?php echo do_shortcode("[supsystic-gallery id=1]"); ?>
                    </div>
                </div><!-- .col-md-2 site-footer-quality -->
            </div><!-- .row quality -->

            <div class="row copyright" id="copyright">
                <div class="col-md-2"></div>

                <div class="site-footer-copyright">
                    <p>© 2018 WWW.MUSEEPHOTO.BE • DESIGNED BY BECODE.ORG • ALL RIGHTS RESERVED</p>
                </div><!-- .site-footer-copyright -->
            
                <div class="col-md-2"></div>
            </div><!-- .row copyright -->
        </div><!-- .container-fluid -->
    </section><!-- .site-footer-container -->

    </div><!-- .site-footer-cont-info -->

  </footer><!-- .site-footer -->
    
    </div><!-- .site-inner -->
</div><!-- .site -->     

<?php wp_footer(); ?>

</body>
</html>
