<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vicem
 */

?>
    </div>
    </div>
    <!-- #content -->
<?php if( is_active_sidebar('sidebar-3') ) { ?>
    <div class="footer-widget">
        <div class="wrap">
            <div class="footer-widget-left">
                <?php dynamic_sidebar('sidebar-3') ?>
            </div>
        </div>
    </div>
<?php } ?>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">
            <div class="wrap">
                <div class="row-site-info">
                <?php echo '&copy; '.date("Y"); ?> 
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Vicem WordPress Theme ','vicem')); ?>
			<span class="sep"> | </span>

			<?php 
			printf( esc_html__( 'By Monika Rao', 'vicem' )); 
			?>
                </div>

                <div class="footer-right">
                    <ul class="alignleft">
                        <?php if( get_theme_mod('Facebook') ) : ?>
                <li class="social-facebook"><a href="<?php echo get_theme_mod('Facebook') ?>"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                </li>
                        <?php if( get_theme_mod('Google_plus') ) : ?>                
                <li class="social-gplus"><a href="<?php echo get_theme_mod('Google_plus') ?>"><i class="fa fa-google-plus"></i></a>
                        <?php endif; ?>
                </li>
                        <?php if( get_theme_mod('Twitter') ) : ?> 
                <li class="social-twitter"><a href="<?php echo get_theme_mod('Twitter') ?>"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>
                </li>
				<?php if( get_theme_mod('Youtube') ) : ?> 
                <li class="social-youtube"><a href="<?php echo get_theme_mod('Youtube') ?>"><i class="fa fa-youtube"></i></a>
                        <?php endif; ?>
                </li>
				<?php if( get_theme_mod('Linkedin') ) : ?> 
                <li class="social-linkedin"><a href="<?php echo get_theme_mod('Linkedin') ?>"><i class="fa fa-linkedin"></i></a>
                        <?php endif; ?>
                </li>
				<?php if( get_theme_mod('Pinterest') ) : ?> 
                <li class="social-pinterest"><a href="<?php echo get_theme_mod('Pinterest') ?>"><i class="fa fa-pinterest"></i></a>
                        <?php endif; ?>
                </li>
				<?php if( get_theme_mod('Instagram') ) : ?> 
                <li class="social-instagram"><a href="<?php echo get_theme_mod('Instagram') ?>"><i class="fa fa-instagram"></i></a>
                        <?php endif; ?>
                </li>
            </ul>
                </div>
            </div>
        </div>
        <!-- .site-info -->
    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->

    <?php wp_footer(); ?>

        </body>

        </html>
