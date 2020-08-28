<?php get_header(); ?>

<?php $header = get_field('header');?>
<?php $qualities = get_field('qualities');?>
<?php $our_story = get_field('our_story');?>
<?php $resto = get_field('resto');?>

	<div class="section section-header">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image: url(/wp-content/themes/montheme/assets/images/banner-top.jpg);">
            </div>
            <div class="container">
                <div class="content pull-left" style="margin-left: 10em;">
					<h5><?php echo $header['desc'];?></h5>
                    <h1><?php echo $header['title'];?></h1>
                </div>
            </div>
        </div>
        <a href="" data-scroll="true" data-id="#firstSection" class="scroll-arrow hidden-xs hidden-sm">
            <i class="fa fa-angle-down"></i>
        </a>
    </div>
	<div class="section">
        <div class="container ">
            <div class="row">
                <div class="card col-md-3" style="margin-left: 8em;">
                    <div class="info-icon">
                        <div class="icon text-danger">
						<img src="/wp-content/themes/montheme/assets/svg/quality-food.svg" alt="quality-food">
                        </div>
                        <h3><?php echo $qualities['firsttitle'];?></h3>
                        <p class="description"><?php echo $qualities['firsttexte'];?></p>
                    </div>
                </div>
                <div class="card col-md-3" style="margin-left: 1em;">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <img src="/wp-content/themes/montheme/assets/svg/fastest-delivery.svg" alt="fastest-delivery">
                        </div>
                        <h3><?php echo $qualities['secondtitle'];?></h3>
                        <p class="description"><?php echo $qualities['secondtexte'];?></p>
                    </div>
                </div>
                <div class="card col-md-3" style="margin-left: 1em;">
                    <div class="info-icon">
                        <div class="icon text-danger">
						<img src="/wp-content/themes/montheme/assets/svg/original-recipes.svg" alt="original-recipes">
                        </div>
                        <h3><?php echo $qualities['thirdtitle'];?></h3>
                        <p class="description"><?php echo $qualities['thirdtexte'];?></p>
                    </div>
				</div>
			</div>
        </div>
    </div>


    <div class="row">
        <div class="section" id="firstSection">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <img src="<?php echo $our_story['photo']['url'];?>" alt="" style="width: 500px;"> 
            </div>
            <div class="card col-md-4" style="margin-top:8em;">
                <span>Discover</span>
                <h2>Our story</h2>
                <p><?php echo $our_story['story'];?></p>
            </div>
            
        </div>
    </div>

    <div class="row" style="background-image: url(/wp-content/themes/montheme/assets/images/burger-party.png); background-color: #c1c1c152;">
        <div class="row">
            <div class="section" style="text-align: center;">
                <p >
                    <h4><?php echo $resto['littletitle'];?></h4>
                    <h2><?php echo $resto['bigtitle'];?></h2>
                </p>

                <div class="col-md-1">
                </div>
                <div class="card col-md-4" style="margin-top:8em;">
                    <span><?php echo $resto['resto1littletitle'];?></span>
                    <h2><?php echo $resto['resto1bigtitle'];?></h2>
                    <p><?php echo $resto['resto1desc'];?></p>
                    <a href="http://the-jumping-rabbit.herokuapp.com/restaurant/the-chefs-cafeteria/" class="btn btn-fill btn-black">More Infos</a>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $resto['resto1img']['url'];?>" alt="" style="width: 700px;"> 
                </div>
                
                
            </div>
        </div>
        <div class="row">
            <div class="section" style="text-align: center;">
                <div class="col-md-1">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $resto['resto2img']['url'];?>" alt="" style="width: 700px;"> 
                </div>
                <div class="card col-md-4" style="margin-left:10em; margin-top:8em;">
                    <span><?php echo $resto['resto2littletitle'];?></span>
                    <h2><?php echo $resto['resto2littletitle'];?></h2>
                    <p><?php echo $resto['resto2desc'];?></p>
                    <a href="http://the-jumping-rabbit.herokuapp.com/restaurant/the-becentral-resto/"class="btn btn-fill btn-black">More Infos</a>
                </div>
                
                
                
            </div>
        </div>
        <div class="row">
            <div class="section" style="text-align: center;">
                <div class="col-md-1">
                </div>
                <div class="card col-md-4" style="margin-top:8em;">
                    <span><?php echo $resto['resto3littletitle'];?></span>
                    <h2><?php echo $resto['resto3bigtitle'];?></h2>
                    <p><?php echo $resto['resto3desc'];?></p>
                    <a href="http://the-jumping-rabbit.herokuapp.com/restaurant/the-honkytong/" class="btn btn-fill btn-black">More Infos</a>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $resto['resto3img']['url'];?>" alt="" style="width: 700px;"> 
                </div>
                
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="section" style="text-align: center; padding-top: 5em;">
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
            <img src="/wp-content/themes/montheme/assets/images/yes.png" style="margin-bottom: 3em;">
            </div>
            <div class="col-md-5">
                <p>
                    <span>lets discover food</span>
                    <h2>Discover our menu</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus excepturi ea neque corporis perspiciatis dolor nihil? Deleniti aspernatur recusandae temporibus praesentium ad similique, debitis a, quasi tenetur ut, architecto saepe.</p>
                    <a href="http://the-jumping-rabbit.herokuapp.com/menu" class="btn btn-fill btn-black">View the full menu</a>
                </p>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>

   

    <div class="section section-get-started">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image: url(/wp-content/themes/montheme/assets/images/florencia-viadana-__YQG5mINWA-unsplash.jpg)">
            </div>
            <div class="container">
            <div class="text-area">
                <div class="title">
                    <h2>Subscribe to Newsletter</h2>
                </div>

            <div class="contact-form">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4 col-md-push-4">
                            <div class="form-group">
                                <input type="text" name="email" value="" placeholder="michael.j@gmail.com" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-fill btn-black">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>