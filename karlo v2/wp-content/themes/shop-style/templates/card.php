<div class="products container overflow-hidden px-sm-0 pb-2 ">
<?php $categories = get_categories(); ?>
<div class="row product-slider all filterDiv"><?php
$loop = new WP_Query( array( 'post_type' => 'proizvodi', 'posts_per_page' => -1) ); 
$post_count = $loop->found_posts;
for($i = 0; $i < ($post_count/12); ++$i) {
    $new_loop = new WP_Query( array( 'post_type' => 'proizvodi', 'posts_per_page' => 12, 'offset'=> ($i*12) ) );
    ?><div class="row card-row m-auto d-flex "><?php
while ( $new_loop->have_posts() ) : $new_loop->the_post();
$categories = get_the_category($post->ID);
?>


    <!-------------------------------------------------------->
    <div class="card col-6 col-md-4 col-lg-3 h-100 ;
    } ?>">

        <a href="<?php the_permalink() ?>" title="" rel="bookmark">

                    <?php
                $images = acf_photo_gallery('slike_proizvoda', $post->ID);
                    ?><img class="card-img-top mt-2" src="<?php
                        if( count($images) ):
                    //Cool, we got some data so now let's loop over it
                    
                    $image = $images[0];
                        $id = $image['id']; // The attachment id of the media
                        $title = $image['title']; //The title
                        $caption= $image['caption']; //The caption
                        $full_image_url= $image['full_image_url']; //Full size image url
                        $full_image_url = acf_photo_gallery_resize_image($full_image_url, 255, 190); //Resized size to 262px width by 160px height image url
                        $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                        $url= $image['url']; //Goto any link when clicked
                        $target= $image['target']; //Open normal or new tab
                        $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                        $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
            ?>
                        <?php echo $full_image_url; ?>
                        <?php  endif; ?>
                        " alt="Card image cap">
                        <div class="card-hover d-flex justify-content-center align-items-center">

                            <a class="" href="<?php the_permalink() ?>"><button class="button w-50 w-auto"><p class="fdb spec">Otvori</p></button></a>

                        </div>



    
                


            <div class="card-body py-1">
            <div>
                <h4 class="card-title mb-0"> <?php echo the_title(); ?></h4>
                <h4 class="card-text fdb"><?php echo get_field( "boldano_ime" ); ?></h3>
            </div>
            <div>
                <h4 class="spec-font"> <?php echo get_field( "cijena_komad" ); ?>kn</h3>
            </div>
            </div>
    </a>
    </div>
    <!-------------------------------------------------------->
    <?php
    


endwhile; 
?></div><?php
}
?></div><?php

$categories = get_categories();
foreach($categories as $category){?>
<div class="row product-slider <?php echo $category->name ?> filterDiv"><?php
$loop = new WP_Query( array( 'post_type' => 'proizvodi', 'posts_per_page' => -1, 'category_name' => $category->name) ); 
$post_count = $loop->found_posts;
for($i = 0; $i < ($post_count/12); ++$i) {
    $new_loop = new WP_Query( array( 'post_type' => 'proizvodi', 'posts_per_page' => 12, 'offset'=> ($i*12), 'category_name' => $category->name ) );
    ?><div class="row card-row m-auto d-flex"><?php
while ( $new_loop->have_posts() ) : $new_loop->the_post();
$categories = get_the_category($post->ID);
?>


    <!-------------------------------------------------------->
    <div class="card col-6 col-md-4 col-lg-3 h-100;
    } ?>">
        <a href="<?php the_permalink() ?>" title="" rel="bookmark">
            



    <?php
        $images = acf_photo_gallery('slike_proizvoda', $post->ID);
        
                if( count($images) ):
            //Cool, we got some data so now let's loop over it
            
            $image = $images[0];
                $id = $image['id']; // The attachment id of the media
                $title = $image['title']; //The title
                $caption= $image['caption']; //The caption
                $full_image_url= $image['full_image_url']; //Full size image url
                $full_image_url = acf_photo_gallery_resize_image($full_image_url, 255, 190); //Resized size to 262px width by 160px height image url
                $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                $url= $image['url']; //Goto any link when clicked
                $target= $image['target']; //Open normal or new tab
                $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
    ?>
                <img class="card-img-top mt-2" src="<?php echo $full_image_url; ?>" alt="Card image cap">
                <?php  endif; ?>
                <div class="card-hover d-flex justify-content-center align-items-center">

                <a class="" href="<?php the_permalink() ?>"><button class="button w-50 w-auto"><p class="fdb spec">Otvori</p></button></a>

                </div>
                


            <div class="card-body py-1">
                <div>
                    <h4 class="card-title mb-0"> <?php echo the_title(); ?></h4>
                    <h4 class="card-text fdb"><?php echo get_field( "boldano_ime" ); ?></h3>
                </div>
                <div>
                    <h4 class="spec-font"> <?php echo get_field( "cijena_komad" ); ?>kn</h3>
                </div>
            </div>
    </a>
    </div>
    <!-------------------------------------------------------->
    <?php
    


endwhile; 
?></div><?php
}
?></div><?php
}
?>
</div>