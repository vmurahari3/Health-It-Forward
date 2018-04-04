<?php
/**
 * Slider hook
 *
 * @package galore
 */

if ( ! function_exists( 'galore_add_slider_section' ) ) :
    /**
    * Add slider section
    *
    *@since Galore 1.0.0
    */
    function galore_add_slider_section() {

        // Check if slider is enabled on frontpage
        $slider_enable = apply_filters( 'galore_section_status', 'enable_slider', 'slider_entire_site' );

        if ( ! $slider_enable )
            return false;

        // Get slider section details
        $section_details = array();
        $section_details = apply_filters( 'galore_filter_slider_section_details', $section_details );

        if ( empty( $section_details ) ) 
            return;

        // Render slider section now.
        galore_render_slider_section( $section_details );
    }
endif;
add_action( 'galore_primary_content_action', 'galore_add_slider_section', 10 );


if ( ! function_exists( 'galore_get_slider_section_details' ) ) :
    /**
    * slider section details.
    *
    * @since Galore 1.0.0
    * @param array $input slider section details.
    */
    function galore_get_slider_section_details( $input ) {

        $content = array();
        $page_ids = array();

        for ( $i = 1; $i <= 5; $i++ )  :
            $page_ids[] = galore_theme_option( 'slider_content_page_' . $i );;
        endfor;
        
        $args = array(
            'post_type'         => 'page',
            'post__in'          =>  ( array ) $page_ids,
            'posts_per_page'    => 5,
            'orderby'           => 'post__in',
            );                    

        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = galore_trim_content( 15 );
                $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : '';

                // Push to the main array.
                array_push( $content, $page_post );
            endwhile;
        endif;
        wp_reset_postdata();
            
        if ( ! empty( $content ) )
            $input = $content;
       
        return $input;
    }
endif;
// slider section content details.
add_filter( 'galore_filter_slider_section_details', 'galore_get_slider_section_details' );


if ( ! function_exists( 'galore_render_slider_section' ) ) :
  /**
   * Start slider section
   *
   * @return string slider content
   * @since Galore 1.0.0
   *
   */
   function galore_render_slider_section( $content_details = array() ) {
        if ( empty( $content_details ) )
            return;

        $slider_control = galore_theme_option( 'slider_arrow' );
        ?>
    	<div id="custom-header">
            <div class="wrapper">
                <div class="section-content banner-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 1200, "dots": false, "arrows":<?php echo $slider_control ? 'true' : 'false'; ?>, "autoplay": true, "fade": true, "draggable": true }'>
                    <?php foreach ( $content_details as $content ) : ?>
                        <div class="custom-header-content-wrapper slide-item">
                            <?php if ( ! empty( $content['image'] ) ) : ?>
                                <img src="<?php echo esc_url( $content['image'] ); ?>" alt="<?php echo esc_attr( $content['title'] ); ?>">
                            <?php endif; ?>
                            <div class="custom-header-content">
                                <?php if ( ! empty( $content['title'] ) ) : ?>
                                    <h2><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                <?php endif; 

                                if ( ! empty( $content['excerpt'] ) ) : ?>
                                    <p><?php echo wp_kses_post( $content['excerpt'] ); ?></p>
                                <?php endif; ?>
                                <div class="separator"></div>
                            </div><!-- .custom-header-content -->
                        </div><!-- .custom-header-content-wrapper -->
                    <?php endforeach; ?>
                </div><!-- .wrapper -->
            </div><!-- .banner-slider -->
        </div><!-- #custom-header -->
    <?php 
    }
endif;