<?php
/**
 * Template part for displaying Sourcefuse page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

    //  Banner fields
    $sf_custom_fields = get_field('banner_block_fields'); 

    $banner_bg_img_id   = $sf_custom_fields['add_backgroud_image'];
    $banner_bg_img_array= wp_get_attachment_image_src($banner_bg_img_id, 'full');
    $banner_bg_img_alt  = sf_Get_Image_alt($banner_bg_img_id, 'List Block Image');
    $banner_bg_img_url  = sf_Get_image($banner_bg_img_array);

    $mob_banner_bg_img_id   = $sf_custom_fields['add_mobile_backgroud_image'];
    $mob_banner_bg_img_array= wp_get_attachment_image_src($mob_banner_bg_img_id, 'full');
    $mob_banner_bg_img_alt  = sf_Get_Image_alt($mob_banner_bg_img_id, 'List Block Image');
    $mob_banner_bg_img_url  = sf_Get_image($mob_banner_bg_img_array);

    $banner_small_title = $sf_custom_fields['small_title'];
    $banner_title   = $sf_custom_fields['add_banner_title'];
    $button_text    = $sf_custom_fields['add_button_title'];
    $button_url     = $sf_custom_fields['add_button_url'];

    $logo_img_id    = $sf_custom_fields['add_logo'];
    $logo_image_array = wp_get_attachment_image_src($logo_img_id, 'full');
    $logo_image_alt   = sf_Get_Image_alt($logo_img_id, 'List Block Image');
    $logo_img_url     = sf_Get_image($logo_image_array);


    // Second section fields

    $sf_second_section_fields = get_field('second_section_block_fields'); 

    $small_title    = $sf_second_section_fields['small_title'];
    $add_title      = $sf_second_section_fields['add_title'];
    $add_description    = $sf_second_section_fields['add_description'];
    $percent_value_one  = $sf_second_section_fields['percentage_value_one'];
    $percent_text_one   = $sf_second_section_fields['percentage_text_one'];
    $percent_value_two  = $sf_second_section_fields['percentage_value_two'];
    $percent_text_two   = $sf_second_section_fields['percentage_text_two'];
    $add_button_text    = $sf_second_section_fields['button_text'];
    $add_button_url     = $sf_second_section_fields['button_url'];
    
    $right_section_img      = $sf_second_section_fields['right_section_image'];
    $right_section_img_array= wp_get_attachment_image_src($right_section_img, 'full');
    $right_section_img_alt  = sf_Get_Image_alt($right_section_img, 'List Block Image');
    $right_section_img_url  = sf_Get_image($right_section_img_array);

    // Four col section

    $sf_four_col_fields = get_field('four_column_structure'); 
   
    $first_section_text     = $sf_four_col_fields['first_section_text'];
    $first_logo_image   = $sf_four_col_fields['first_logo_image'];
    $first_logo_img_array= wp_get_attachment_image_src($first_logo_image, 'full');
    $first_logo_img_alt  = sf_Get_Image_alt($first_logo_image, 'List Block Image');
    $first_logo_img_url  = sf_Get_image($first_logo_img_array);

    $second_section_text    = $sf_four_col_fields['second_section_text'];
    $second_logo_image   = $sf_four_col_fields['second_logo_image'];    
    $second_logo_img_array= wp_get_attachment_image_src($second_logo_image, 'full');
    $second_logo_img_alt  = sf_Get_Image_alt($second_logo_image, 'List Block Image');
    $second_logo_img_url  = sf_Get_image($second_logo_img_array);
    
    $third_section_text     = $sf_four_col_fields['third_section_text'];
    $third_logo_image   = $sf_four_col_fields['third_logo_image'];
    $third_logo_img_array= wp_get_attachment_image_src($third_logo_image, 'full');
    $third_logo_img_alt  = sf_Get_Image_alt($third_logo_image, 'List Block Image');
    $third_logo_img_url  = sf_Get_image($third_logo_img_array);

    $fourth_section_text    = $sf_four_col_fields['fourth_section_text'];
    $fourth_logo_image   = $sf_four_col_fields['fourth_logo_image'];
    $fourth_logo_img_array= wp_get_attachment_image_src($fourth_logo_image, 'full');
    $fourth_logo_img_alt  = sf_Get_Image_alt($fourth_logo_image, 'List Block Image');
    $fourth_logo_img_url  = sf_Get_image($fourth_logo_img_array);

    // Slider Section
    $slider_section_fields  = get_field('slider_section_fields');
    $slider_block_title     = $slider_section_fields['block_title'];
    $slider_block_desc      = $slider_section_fields['block_description'];
    
?>

<div class="banner-section container pt-3">
    <div class="row">
        <section class="home-banner">

            <div id="parallax1" class="parallaxParent">
                
                <script>
                    $( document ).ready(function() {
                    if (screen.width > 767) {
                            document.getElementById("bannerImage").style.backgroundImage = "url('<?php echo esc_url($banner_bg_img_url); ?>')";
                    } else{
                            document.getElementById("bannerImage").style.backgroundImage = "url('<?php echo esc_url($banner_bg_img_url); ?>')";
                    }
                    });
                </script>
                <div id = "bannerImage" class="banner-image" style="background-image: url('<?php echo esc_url($banner_bg_img_url)?>;')" >
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="content-wrapper">
                            <div class="top-block">
                                
                                <?php if($banner_small_title && !empty($banner_small_title)) :?>
                                    <div class="small-title">
                                        <?php echo wp_kses_post($banner_small_title);?>
                                    </div>
                                <?php endif;
                            
                                if($banner_title && !empty($banner_title)) : ?>
                                <h1><?php echo wp_kses_post(sf_Remove_ptag($banner_title));?></h1>
                                <?php endif;
                                
                                if($button_text && !empty($button_text)) : ?>
                                    <div class="btn-wrapper">
                                        <a class="learn-more-btn" href="<?php echo esc_url($button_url);?>"><?php echo wp_kses_post(sf_Remove_ptag($button_text));?></a>
                                    </div>
                                <?php endif; ?>
                            
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="image-block">
                            <img class="side-logo" src="<?php echo esc_url($logo_img_url); ?>" alt="<?php echo wp_kses_post($logo_image_alt);?>" height="" width="" />
                        </div>
                    </div>
                </div>
            
            </div>
        </section>

        <section class="home-second-section">
            <div class="container">
                <div class="row two-columned-text-block">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="description-wrapper left-in">
                
                            <?php if ($small_title && !empty($small_title)) : ?>
                                <h4 class="section-title left-in">
                                    <?php echo wp_kses_post($small_title); ?>
                                </h4>
                            <?php endif; ?>
                            <?php if ($add_title && !empty($add_title)) : ?>
                                <h2 class="section-title left-in">
                                    <?php echo wp_kses_post($add_title); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if ($add_description && !empty($add_description)) : ?>
                                <div class="description"><?php echo wp_kses_post($add_description); ?></div>
                            <?php endif; ?>
                            <div class="two-col-structure">   
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <h3><?php echo $percent_value_one;?></h3>
                                        <h6><?php echo $percent_text_one;?></h6>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <h3><?php echo $percent_value_two;?></h3>
                                        <h6><?php echo $percent_text_two;?></h6>
                                    </div>
                                </div>                 
                            </div>                 
                            <?php if($add_button_text && !empty($add_button_text)) : ?>
                                <div class="btn-wrapper">
                                    <a class="learn-more-btn" href="<?php echo esc_url($add_button_url);?>"><?php echo wp_kses_post(sf_Remove_ptag($add_button_text));?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                        </svg>
                                    </a>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="image-sec right-in">
                            <div class="desktop-block">
                                <img class="img-responsive pull-right" src="<?php echo esc_url($right_section_img_url); ?>" alt="<?php echo wp_kses_post($right_section_img_alt); ?>" height="" width="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="four-col-section">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="img-text-blk">
                                <img class="img-responsive pull-right" src="<?php echo esc_url($first_logo_img_url); ?>" alt="<?php echo wp_kses_post($first_logo_img_alt); ?>" height="" width="" />
                                <h6><?php echo $first_section_text;?></h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="img-text-blk">
                                <img class="img-responsive pull-right" src="<?php echo esc_url($second_logo_img_url); ?>" alt="<?php echo wp_kses_post($second_logo_img_alt); ?>" height="" width="" />
                                <h6><?php echo $second_section_text;?></h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="img-text-blk">
                                <img class="img-responsive pull-right" src="<?php echo esc_url($third_logo_img_url); ?>" alt="<?php echo wp_kses_post($third_logo_img_alt); ?>" height="" width="" />
                                <h6><?php echo $third_section_text;?></h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="img-text-blk">
                                <img class="img-responsive pull-right" src="<?php echo esc_url($fourth_logo_img_url); ?>" alt="<?php echo wp_kses_post($fourth_logo_img_alt); ?>" height="" width="" />
                                <h6><?php echo $fourth_section_text;?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<section class="slider-section featured-art">
    
    <div class="container">
        <h2 class="sec-tl"><?php echo $slider_block_title; ?></h2>
        <h6 class="sec-tl"><?php echo $slider_block_desc; ?></h6>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php 
                
                $case_study_listing = get_posts(array(
                    'posts_per_page' => -1,
                    'orderBy'       => 'Asc',
                    'post_type'     => 'project',
                    'post_staus'    => 'publish'
                ));
                foreach($case_study_listing as $case_study){
                    $project_post_id = $case_study->ID;
                    $project_meta   = get_post_meta( $case_study->ID );
                    $project_title  = $project_meta['case_study_title'][0];
                    $project_desc   = $project_meta['case_study_description'][0];

                    $project_img    = $project_meta['case_study_image'][0];
                    $project_img_array  = wp_get_attachment_image_src($project_img, 'full');
                    $project_img_alt    = sf_Get_Image_alt($project_img, 'List Block Image');
                    $project_img_url    = sf_Get_image($project_img_array); 
                    ?>
                    <div class="swiper-slide slide-img-blk">
                        <div class="slide-image-block">
                            <img src="<?php echo esc_url($project_img_url); ?>" alt="<?php echo wp_kses_post(get_post($project_post_id)->post_title); ?>" />
                            <div class="content-section">
                                <span class="content-main-wrapper">
                                    <span class="content-inner-wrapper">
                                        <h5><?php echo wp_kses_post($project_title); ?></h5>
                                        <p><?php echo wp_kses_post($project_desc); ?></p>
                                        <a href="<?php echo esc_url(get_permalink($project_post_id)); ?>">Read Case Study <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                        </svg>
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- <div class="swiper-scrollbar"></div>
            <div class="swiper-pagination"></div> -->
        </div>

        <div class="btn-wrapper read-more-btn text-center">
            <a class="learn-more-btn" href="http://localhost/wordpress">Read All Case Study <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></a>
        </div>
    </div>

</section>
