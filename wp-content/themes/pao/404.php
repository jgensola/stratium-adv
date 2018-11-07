<?php
/**
 * 404 Page
 *
 * @package pao
 * @since 1.0
 *
 */

$btntext = cs_get_option( 'error_btn_text' ) ? cs_get_option( 'error_btn_text' ) : esc_html__('Go home', 'pao');
$title =  cs_get_option( 'error_title' );
$subtitle =  cs_get_option( 'error_subtitle' );
$btn_style =  cs_get_option( 'btn_style' ) ? cs_get_option( 'btn_style' ) : 'a-btn-2';

get_header();
?>
	<div class="container-fluid no-padd error-height">
		<div class="hero-inner bg-cover full-height">

			<?php if ( cs_get_option( 'image_404' ) ):
				echo pao_the_lazy_load_flter( cs_get_option( 'image_404' ), array(
				  'class' => 's-img-switch',
				  'alt'   => esc_attr__( '404 image', 'pao' )
				) );
            endif; ?>
			<div class="fullheight text-center">
				<div class="vertical-align">
					<h1 class="bigtext"><?php esc_html_e( '404', 'pao' ); ?></h1>
                    <?php if(!empty($title)){ ?>
                        <h3 class="title bold font-1"><?php echo esc_html($title ); ?></h3>
                    <?php } ?>
                    <?php if(!empty($subtitle)){ ?>
                        <h6 class="subtitle"><?php echo esc_html($subtitle); ?></h6>
                    <?php } ?>
                  <div class="search">
                      <div class="form-container">
                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <form role="search" method="get" class="search-form-404" action="<?php echo esc_url(home_url( '/' )); ?>">
                                          <div class="input-group">
                                              <input type="search" value="<?php echo get_search_query() ?>" name="s"
                                                     class="search-field"
                                                     placeholder="<?php esc_attr_e( 'enter keyword', 'pao' ); ?>"
                                                     required>
                                              <input type="submit" id="searchsubmit" value="<?php echo esc_attr('search', 'pao'); ?>">
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class=" <?php echo esc_attr($btn_style); ?> "><?php echo esc_html( $btntext ); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();
