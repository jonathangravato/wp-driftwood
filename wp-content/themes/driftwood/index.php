<?php

// Render Wordpress Header
get_header();

// Render Front Page Hero and Content
if ( is_front_page() ) {

    $fields = get_fields($post->ID);

    if ( $fields ) {

        if ( get_field('enable_hero') ) {

        // Hero

            // Init Slide Count
            $slide_count = 0;

            // Init Slides Array
            $slides = [];

            while( have_rows('hero') ): the_row();

            $slides[$slide_count] = [
                'image'   => get_sub_field('background_image'),
                'content' => get_sub_field('hero_content_left'),
                'media'   => get_sub_field('hero_content_right'),
                'link'    => get_sub_field('link'),
            ];

            $slide_count += 1;

            endwhile;

            //Build hero slides
            ?>

            <div id="home-hero" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">

                <?php foreach ( $slides as $key => $value ) { ?> 
                    
                    <li data-target="#home-hero" data-slide-to=" <?php echo $key; ?>" <?php if ( $key == 0 ) { echo 'class="active"'; } ?>></li>

                <?php } ?>

                </ol>
                <div class="carousel-inner">

                <?php 
                
                foreach( $slides as $key => $value ) {
                
                    $media   = $value['media'];
                    $image   = $value['image'];
                    $content = $value['content'];
                    
                ?>

                    <div class="carousel-item <?php if ( $key == 0 ) { echo 'active'; }?>" style=" background: url(<?php echo $image; ?>); background-position: center top; background-size: cover; ">

                        <div class="container">
                            <div class="row">
                                <div style="color:#fff;" class="hero-left col-sm d-flex justify-content-start align-items-center">
                                
                                    <?php
                                    
                                    foreach( $content as $key => $value ) {
                                        
                                        switch ($key) {
                                            case 'first_line' :
                                                $first_line = $value;
                                                break;
                                            case 'heading' :
                                                $heading = $value;
                                                break;
                                            case 'sub_heading' :
                                                $sub_heading = $value;
                                                break;
                                            case 'last_line' :
                                                $last_line = $value;
                                                break;
                                            default :
                                                return;
                                        }
                                    }

                                    echo '<div>';
                                    echo '<p>' . $first_line . '</p>';
                                    echo  '<h2>' . $heading . '<br><span>' . $sub_heading . '</span></h2>';
                                    echo  '<p>' . $last_line . '</p>';
                                    echo '<p><a href="#" class="btn btn-primary">Find Your Home</a></p>';
                                    echo '</div>';

                                    ?>
                                </div>
                                
                                <div style="color:#fff;" class="hero-right col-sm d-flex justify-content-end align-items-center">
                                    <div><img src="<?php echo $media; ?>" alt="Video clip..." /></div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div>

                <?php } ?>

                </div>
            </div>

        <?php

        }

    }

    // Loop through and render Featured Image, Title and Content.
    if ( have_posts() ): while(have_posts()) : the_post();

    ?>

    <section id="home-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm px-0 content-left">

                    <?php the_post_thumbnail( array( 1000, 567 ), [ 'class' => 'img-fluid' ] ); ?>

                </div>
                <div class="col-sm px-0 content-right d-flex justify-content-left align-items-center py-5">
                    <div>
                        <?php the_title('<h2>','</h2>'); the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

    endwhile; endif;

} // end is_front_page

// Render Wordpress Footer
get_footer();
