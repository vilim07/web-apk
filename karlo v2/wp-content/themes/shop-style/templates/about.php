<?php 
/*
Template Name: About
*/

get_header();?>
<div class="container">
    <div class="row pt-4">
        <div class="col-12 pb-2">
        <a href="<?php echo home_url()?>" class="font-weight-bolder d-flex align-items-center fc"><svg class="mr-fix" xmlns="http://www.w3.org/2000/svg" width="6.914" height="11.828" viewBox="0 0 6.914 11.828"><path id="Path_35" data-name="Path 35" d="M11,3.5,6.5,8,11,12.5" transform="translate(-5.5 -2.2)" fill="none" stroke="#3c3b4b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></svg>  Back</a>
        </div>
    </div>
</div>
<?php include 'textbox_right.php' ?>
<?php include 'textbox.php' ?>
<?php include 'textbox_left.php' ?>
<?php get_footer();?>