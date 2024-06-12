<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package districtmoving
 */

?>

<?php get_header(); ?>
<style>
    .jobs-single-main-container {
        background-color: #ebebeb;
    }

    .jobs-single-container {
        max-width: 1000px;
        margin: auto;
        padding: 80px 0px;
    }

    .jobs-single-top-area {
        display: flex;
        background: white;
        padding: 40px 30px;
        border-radius: 5px;
        margin-top: -10px;
    }

    .jobs-single-form-area {
        background: #0b1d40;
        padding: 60px 30px;
        border-radius: 5px;
    }

    .jobs-single-discription-area {
        background: white;
        padding: 30px;
        padding-top: 0px;
        margin-top: -10px;
    }

    .jobs-single-title-area {
        width: 50%;
    }

    .jobs-single-image-area {
        width: 50%;
        text-align: end;
    }

    .jobs-single-image-area img {
        width: 190px;
        height: 62px;
        object-fit: scale-down;
    }

    .single-tabs-area {
        display: flex;
        background: #0b1d40;
        padding: 20px;
    }

    .single-tabs-location {
        display: flex;
        width: -webkit-fill-available;
    }

    .single-tabs-location h5 {
        margin-bottom: 0px !important;
    }

    .single-tabs-location-pay {
        width: -webkit-fill-available;
    }

    .single-tabs-location img {
        margin: 0px 15px;
        width: 22px;
        height: 22px;
    }

    .single-tabs-location h5 {
        font-size: 18px;
        font-style: italic;
    }

    .jobs-single-title-area h6 {
        font-style: italic;
        color: black;
        margin-top: 13px;
        font-weight: bold;
    }

    .jobs-single-discription-area h3 {
        font-style: italic;
        color: black;
        margin-bottom: 23px;
        font-weight: bold;
    }

    .jobs-single-remote-area {
        display: flex;
        background: white;
        align-items: center;
        padding: 30px;
        border-bottom: 1px solid #c1c1c1;
    }

    .jobs-single-remote-area h5 {
        color: black;
        margin: 0px 70px;
        margin-left: 0px;
        font-style: italic;
        color: black;
        font-weight: bold;
    }

    .jobs-single-remote-area h6 {
        color: black;
        margin-bottom: 0px;
        color: black;
        font-size: 18px;
    }

    .jobs-single-date-area {
        display: flex;
        background: white;
        align-items: center;
        padding: 30px;
    }

    .jobs-single-date-area h5 {
        color: black;
        margin: 0px 50px;
        margin-left: 0px;
        font-style: italic;
        color: black;
        font-weight: bold;
    }

    .jobs-single-date-area img {
        width: 20px;
        height: 20px;
        margin-right: 15px;
    }

    #gform_5 label {
        color: White;
        font-style: italic;
        margin: 0px;
    }

    .gform_required_legend {
        display: none !important;
    }

    #gform_5 #field_5_1 {
        display: flex;
        align-items: center;
    }

    #gform_5 #field_5_3 {
        display: flex;
        align-items: center;
    }

    #gform_5 #field_5_3 .ginput_container {
        width: 90%;
    }

    #gform_5 #field_5_1 .ginput_container {
        width: 90%;
    }

    #gform_5 #field_5_3 label {
        margin-right: 40px;
    }

    #gform_5 #field_5_1 label {
        margin-right: 7px;
    }

    #gform_5 #field_5_4 {
        margin-top: 20px;
    }

    #gform_5 #field_5_4 label {
        margin-bottom: 20px;
    }

    #gform_5 #field_5_5 {
        margin-top: 20px;
    }

    #gform_5 #field_5_5 label {
        margin-bottom: 20px;
    }

    #gform_5 #gform_submit_button_5 {
        background: #3070c7;
        border: none;
        padding: 15px 30px;
        color: white;
        font-size: 18px;
        border-radius: 30px;
    }

    #gform_5 .ginput_container_fileupload {
        background: #e7e9ec;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 38px 20px;
        border-radius: 5px;

    }

    #gform_5 #input_5_5 {
        width: 25% !important;
    }

    .job-single-buttons {
        background: #dd0606 !important;
        padding: 10px 25px !important;
    }

    .jobs-single-button {
        padding: 0px 30px;
    }

    .jobs-forms-button {
        margin-top: 40px;
        margin-bottom: -12px;
    }

  
    .applynow-btn:hover {
        background: black !important;
        color: white;
    }

   .jobs-single-button a:active, a:focus, a:hover {
    color: white !important;
}

    .bookmark-btn {
        background: white !important;
        color: black;
    }

    .bookmark-btn:hover {
        background: black !important;
        color: white;
    }

    .custom_ajax_pagination .current span {
        color: black !important;
    }

    .hidden_appllied_job {
        display: none;
    }

    .gform_confirmation_message_5 {
        color: white !important;
    }
    /*mobile*/
  
    @media only screen and (max-width: 768px) {
        .single-tabs-area{
        display: block;
    }
    .single-tabs-area .single-tabs-location{
        margin: 15px 0px;
    }
    #gform_5 #field_5_1 {
    display: block;
    } 
    #gform_5 #field_5_3 {
        display: block;
    }
    #gform_5 #field_5_1 .ginput_container {
    width: 100%;
    }
    #gform_5 #field_5_3 .ginput_container {
        width: 100%;
    }
    #gform_5 #field_5_3 label {
        margin:20px 0px;
    }
    #gform_5 #field_5_1 label {
        margin-bottom: 20px;
    }
    .jobs-single-container {
    padding: 20px 0px;
    }
    }
</style>
<?php
$company_name = get_field('company_name', get_the_id());
$is_this_job_remote = get_field('is_this_job_remote', get_the_id());


?>
<div class="jobs-single-main-container">
    <div class="jobs-single-container">
        <div class="jobs-single-button">
            <?php
            $baseurl = get_bloginfo('wpurl');
            ?>
            <a class="request-quote job-single-buttons job-back-btn" href="<?php echo $baseurl ?>/join-our-team"
                target="_self">
                < &nbsp; Back</a>
        </div>
        <div class="jobs-single-top-area">

            <div class="jobs-single-title-area">
                <H2><?php the_title(); ?></H2>
                <h6><?php echo $company_name; ?></h6>
            </div>
            <div class="jobs-single-image-area">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
        <div class="jobs-single-discription-area">
            <h3>Description</h3>
            <p><?php the_content(); ?></p>
        </div>

        <div class="single-tabs-area">
            <div class="single-tabs-location">
                <img class="tabs-location-icon"
                    src="https://www.districtmoving.com/wp-content/uploads/2022/12/Icon-Location-White.png" alt="">
                <?php $jobs_location = get_field('location', get_the_id()); ?>
                <h5><?php echo $jobs_location; ?></h5>
            </div>

           

            <div class="single-tabs-location">
                <img class="tabs-full-time-icon"
                    src="https://www.districtmoving.com/wp-content/uploads/2022/12/Icon-Time-White.png" alt="">
                <?php
                $terms = get_the_terms($post->ID, 'dmove-types');
                if ($terms) {
                    foreach ($terms as $term) {
                        $job_type = $term->name;
                    }
                }
                ?>
                <h5><?php echo $job_type; ?></h5>
            </div>

            <div class="single-tabs-location single-tabs-location-pay">
                <img class="tabs-pay-range-icon"
                    src="https://www.districtmoving.com/wp-content/uploads/2022/12/Icon-Salary-White.png" alt="">
                <?php $pay_range = get_field('pay_range', get_the_id()); ?>
                <h5><?php echo $pay_range; ?></h5>
            </div>
        </div>

        <div class="jobs-single-remote-area">
            <h5>Is this job remote?</h5>
            <h6><?php echo strtoupper($is_this_job_remote[0]); ?></h6>
        </div>
        <div class="jobs-single-date-area">
            <img class="" src="https://www.districtmoving.com/wp-content/uploads/2022/12/Icon-Date.png" alt="">
            <?php $post_date = get_the_date('Y-m-d'); ?>
            <?php $month = date('F', strtotime($post_date)); ?>
            <h5>Posted on <?php echo $month; ?>&nbsp;<?php echo get_the_date('d, Y'); ?></h5>
        </div>

        <!-- form area -->
        <div class="jobs-forms-button">

            <a class="request-quote job-single-buttons applynow-btn" href="https://www.districtmoving.com/employee-application">Apply Now</a>
        </div>
        
</script>

<?php get_footer(); ?>