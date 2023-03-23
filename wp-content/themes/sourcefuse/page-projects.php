<?php
/**
 * Template Name: Projects Template
 * php version 7.4

 * @category Sourcefuse
 * @package  Sourcefuse
 * @author   Sourcefuse <hello@Sourcefuse.com>
 * @link     Sourcefuse
 */

// Silent is Gold
get_header();?>
    
    <div class="banner-section container pt-3">
        <div class="row">
            <?php get_template_part( 'template-parts/content/content-project' ); ?>
        </div>
    </div>

<?php get_footer();
