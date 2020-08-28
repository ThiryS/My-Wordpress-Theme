<?php 
/*
Template Name: sigle-resto
*/
?>
<?php get_header(); ?>

<?php $infos = get_field('infos');?>

<div class="section section-header">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image: url(<?php echo $infos['img']['url'];?>);">
            </div>
            <div class="container">
                <div class="content pull-left" style="margin-left: 10em;">
					<h5><?php echo $header['littletitle'];?></h5>
                    <h1><?php echo $header['bigtitle'];?></h1>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>