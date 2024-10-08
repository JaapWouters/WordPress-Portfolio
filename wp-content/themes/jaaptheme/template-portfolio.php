<?php

/*
Template Name: Portfolio overzicht
*/
?>

<?php get_header();?>

<section class="page-wrap">
<div class="container">


    <h1><?php the_title();?></h1>
    
        <div class="row">
            <div class="col">
                <p>
                Alle projecten waaraan ik heb bijgedragen en heb ontworpen
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-4 project-card">
                <img class="card-image" src="https://picsum.photos/2000/3000" alt="">
                <div class="card-button">
                    <a href=""><button class="btn btn-primary">Bekijk project<i class="bi bi-arrow-right"></i></button></a>
                </div>
            </div>
        </div>

    <?php get_template_part('includes/section', 'content');?>


</div>
</section>


<?php get_footer();?>