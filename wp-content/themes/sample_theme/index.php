<!DOCTYPE html>
<html lang="en">
    <?php
    require_once( 'utils.php' );
    get_template_part( 'head' );
    ?>
    <body>
        <div class="container">
            <?php
            get_header();
            ?>

            <!-- Sample -->
            <div class="sample">
                <a href="http://theguild.jp" target="_blank">
                    <div class="logo">THE GUILD</div>
                </a>

                <div class="page-header">
                    <h1>h1</h1>
                </div>

                <div class="page-header">
                    <h2>h2</h2>
                </div>

                <div class="page-header">
                    <h3>h3</h3>
                </div>

                <div class="page-header">
                    <h4>h4</h4>
                </div>

                <div class="page-header">
                    <h5>h5</h5>
                </div>

                <div class="page-header">
                    <h6>h6</h6>
                </div>

                <p>
                    Hello World. <br>
                    <a href="http://theguild.jp" target="_blank">THE GUILD</a>
                </p>
            </div>
            <!-- /Sample -->

            <?php
            // if (have_posts()) :
            //     while (have_posts()) : the_post();
            //         get_template_part('loop');
            //     endwhile;
            // endif;

            get_footer();
            wp_footer();
            ?>
        </div>
    </body>
</html>