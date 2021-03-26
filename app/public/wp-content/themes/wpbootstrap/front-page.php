<?php get_header(); ?>
<div class="container">
    
<section class="showcase">
    <div class="container">
        <h1>Custom Bootstrap Wordpress Theme</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Quia ea similique hic voluptatum corrupti ab cum, quam pariatur 
            porro cupiditate fugiat ducimus exercitationem, iusto, dicta ratione! 
            Quod natus quibusdam dolores!
        </p>
        <a class="btn btn-primary btn-lg">Read More</a>
    </div>
</section>

<section class="boxes">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <?php if(is_active_sidebar('box1')) : ?>
                    <? dynamic_sidebar('box1')?>
                    <?php endif; ?>
            </div>

            <div class="col-md-4">
                    <?php if(is_active_sidebar('box2')) : ?>
                        <? dynamic_sidebar('box2')?>
                    <?php endif; ?>
            </div>

            <div class="col-md-4">
                    <?php if(is_active_sidebar('box3')) : ?>
                        <? dynamic_sidebar('box3')?>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</section>
</div>


<?php get_footer(); ?>