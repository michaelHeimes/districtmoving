<?php

add_shortcode('dmove_jobs', 'dmove_jobs_cb');

function dmove_jobs_cb()
{

  ob_start();
?> <style>
  .jobs-main-container {
    max-width: 1200px;
    margin: auto;
    padding: 50px 0px;
  }

  .jobs-container {
    width: 100%;
  }

  .jobs-search form {
    display: flex;
    max-width: 900px;
    margin: auto;
  }

  .jobs-search-main {
    width: 70%;
    margin-right: 15px;
    padding: 13px 15px !important;
    border-radius: 25px !important;
    background-image: url(https://www.districtmoving.com/wp-content/uploads/2022/12/Icon-Search.png);
    background-repeat: no-repeat;
    background-size: contain;
    background-repeat: no-repeat;
    outline: 0;
    background-position: 98%;
    background-size: 16px;
    border-color: #8a8f94 !important;
  }

  .jobs-search-category {
    width: 30%;
    border-color: #8a8f94;
    padding: 13px 15px !important;
    border-radius: 3px !important;
  }
/* Ali jobs css */
  .jobs-title-content {
    display: flex;
    padding: 13px !important;
    max-width: 900px;
    margin: auto;
    border: 1px solid #d1d1d1;
    border-bottom-right-radius:5px;
    border-bottom-left-radius:5px;
    background: white;
  }
  .jobs-title-content table#jobsTable thead tr th {
    background-color: #041e42 !important;
    color: #FFF;
    font-weight: bold;
    padding: 6px 8px;
    }
    .jobs-title-content table#jobsTable tbody tr td {
    padding: 6px 8px;
    text-align: left;
    background-color: #fff;
    vertical-align: middle;
    border-top: 1px solid #e3e3e3;
    font-size: 1rem;
    }
    .jobs-title-content table#jobsTable tbody tr td a.job_title {
    color: #0072ce;
    
    }
    .jobs-title-content table#jobsTable tbody tr td a.job_title:hover {
    
    color: #041e42;
    }
    
    
    /*ALI JOBS CSS END HERE*/
    

  .jobs-image-area {
    width: 60%;
    display: flex;
    align-items: center;
  }

  .jobs-image-area img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-right: 20px;
    object-fit: cover;
  }

  .jobs-location-area {
    width: 20%;
    margin-top: 20px;
  }

  .jobs-date-area {
    width: 20%;
    display: flex;
    margin-top: 20px;
  }

  .jobs-location-area div {
    display: flex;
  }

  .jobs-list {
    background: #ebebeb;
    margin: 0px;
    padding: 0px;
  }

  .jobs-title-cards {
    margin-top: 55px;
  }

  .jobs-icons {
    width: 22px;
    height: 22px;
    margin-right: 15px;
  }

  .loaction-second {
    margin-top: 15px;
  }

  .jobs-search-category {
    -moz-appearance: none !important;
    -webkit-appearance: none !important;
    appearance: none !important;
    background: url(https://www.districtmoving.com/wp-content/uploads/2022/12/Icon-Category-Blue-1.png) no-repeat right #ddd;
    background-position-x: 235px;
    background-color: white;
  }

  .jobs-title-content h5 {
    font-style: italic;
    font-size: 16px;
  }

  .loaction-second h5 {
    font-size: 14px;
  }

  .jobs-main-container h4 a {
    color: black !important;
  }

  .jobs-main-container h5 {
    color: black !important;
  }

  .find-a-job {
    max-width: 900px;
    margin: auto;
    margin-bottom: 35px;
  }

  .jobs-cards-button {
    max-width: 900px;
    margin: auto;
    background: white;
    padding: 20px;
    border:1px solid #d1d1d1;
    border-top-left-radius:5px;
    border-top-right-radius:5px;
  }

  .jobs-cards-buttons {
    margin-top: -35px;
  }

  .job-button {
    margin: 0px 10px;
    padding: 9px 30px !important;
    font-size: 18px !important;
    background-color: #a5c1e7 !important;
  }

  .job_type_active {
    background-color: #dd0606 !important;
  }
  .loader {
    border: 5px solid #f3f3f3;
    border-radius: 50%;
    border-top: 5px solid #3070c7;
    width: 45px;
    height: 45px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.loader_main {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}
.custom_ajax_pagination{
  justify-content: center;
    margin: 20px;

}
.page-numbers{
  color: #3070c7;
    margin: 0px 8px;
}
.custom_ajax_pagination .next{
  color: #3070c7;
  margin: 0px 8px;
}
.custom_ajax_pagination .prev{
  color: #3070c7;
  margin: 0px 8px;
}
/*mobile*/
@media only screen and (max-width: 768px) {
  .jobs-search form {
    display: block;
}
.jobs-search-main {
    width: 85%;
    margin-right: 0px;
    margin-left: 30PX;
    background-position: 96%;
}
.dont-see-main{
  padding: 0px 20px;
}
.jobs-search-category {
    width: 85%;
    margin: 10px 0PX;
    margin-left: 30PX;
    background-position-x: 322px;
}
.job-button {
    padding: 8px 15px !important;
}
.jobs-title-content{
  display: block;
}
.jobs-image-area {
    width: 100%;
}
.jobs-date-area {
    width: 50%;
}
}
/*.jobs-container a:active, a:focus, a:hover {*/
/*    color: white !important;*/
/*}*/
.dont-see-main{
    max-width: 900px;
    margin: auto;
    margin-top: 15px;
    margin-bottom: 15px;
    background-color: #1772ca;
    padding: 30px;
}
.dont-see{
    text-decoration: none;
    color: #fff !important;
    font-weight: bold;
    font-size: 18px;
    
}
.dont-see:hover{
  color: #191970!important;
    text-decoration: none;
}
</style> <?php ?>
<?php
  $job_cats = get_terms([
    'taxonomy' => 'dmove-categories',
    'hide_empty' => false,
  ]);
?>
<div id="slide-position"class="jobs-list">
  <div class="jobs-main-container">
    <div class="jobs-container">
      <div class="jobs-search">
        <h2 class="find-a-job">Find a Job</h2>
        <form>
          <input type="text" class="jobs-search-main" placeholder="Search with keyword, location, company">
          <select class="jobs-search-category" placeholder="All Categories" name="jobs-search-category"
            id="jobs-search-category">
            <option value="">All Categories</option>
            <?php
  foreach ($job_cats as $cat) {
            ?>
            <option value="<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></option>
            <?php
  }
            ?>
          </select>
        </form>
      </div>
      <div class="jobs-title-cards">
        <div class="jobs-title-card">
          <div class="jobs-cards-button">
            <div class="jobs-cards-buttons">
              <a class="request-quote job-button job-view-all job_type_active" href="javascript:void(0)" data-type=""
                target="_self">View All</a>
              <a class="request-quote job-button job-full-time" href="javascript:void(0)" data-type="29"
                target="_self">Full-Time</a>
              <a class="request-quote job-button job-part-time" href="javascript:void(0)" data-type="28"
                target="_self">Part-Time</a>
            </div>
          </div>
          <div class="jobs_listings">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function custom_ajax_pagination_function() {
    let tg = jQuery('.custom_ajax_pagination').find('.page-numbers');
    tg.each(function () {
      jQuery(this).attr('href', 'javascript:void(0)');
    });
  }
  var page_number = 1;
  var job_type = '';
  function get_the_job_listings() {
    jQuery('.jobs_listings').html(`<div class="loader_main">
               <div class="loader"></div>
            </div>`);
    let category = jQuery('.jobs-search-category').val();
    let search = jQuery('.jobs-search-main').val();
    jQuery.ajax({
      url: '<?php echo admin_url('admin-ajax.php') ?>',
      type: 'post',
      data: {
        'action': 'get_all_job_based_posts',
        page_number, job_type, search, category
      },
      success: function (res) {
        jQuery('.jobs_listings').html(res);
        custom_ajax_pagination_function();
      }
    });
  }
  jQuery(function () {
    get_the_job_listings();

    jQuery(document).on('click', '.page-numbers', function () {
      if (jQuery(this).hasClass('current')) {

      } else {
        let h = jQuery(this).text();
        h = h.trim();
        if (h == '<<') {
          page_number = page_number - 1;
        } else if (h == '>>') {
          page_number = page_number + 1;
        } else {
          page_number = h;
        }
        get_the_job_listings();
      }
    });

    jQuery('.jobs-search-category').change(function () {
      page_number = 1;
      get_the_job_listings();
    });

    jQuery('.job-button').click(function () {
      page_number = 1;
      if (jQuery(this).hasClass('job_type_active')) {

      } else {
        jQuery('.job-button').removeClass('job_type_active');
        jQuery(this).addClass('job_type_active');
        job_type = jQuery(this).attr('data-type');
        get_the_job_listings();
      }
    });

    jQuery('.jobs-search-main').keyup(function () {
      page_number = 1;
      var s = jQuery(this).val();
      s = s.trim();
      if (s.length >= 2) {
        get_the_job_listings();
      }
      if (s.length == 0) {
        get_the_job_listings();
      }
    });

  });
</script>
<?php
  return ob_get_clean();
}

add_action('wp_ajax_get_all_job_based_posts', 'get_all_job_based_posts');
add_action('wp_ajax_nopriv_get_all_job_based_posts', 'get_all_job_based_posts');
function get_all_job_based_posts()
{
  $paged = $_POST['page_number'];
  $job_type = $_POST['job_type'];
  $s = trim($_POST['search']);
  $category = $_POST['category'];
  // echo $category;
  $tax_query = array();

  $meta_query = array();

  if (!empty($job_type) || !empty($category)) {
    if (!empty($job_type) && !empty($category)) {
      $tax_query = array(
        'relation' => 'AND',
        array(
          'taxonomy' => 'dmove-categories',
          'field' => 'term_id',
          'terms' => $category,
        ),
        array(
          'taxonomy' => 'dmove-types',
          'field' => 'term_id',
          'terms' => $job_type
        )
      );
    } else if (!empty($category)) {
      $tax_query = array(
        array(
          'taxonomy' => 'dmove-categories',
          'field' => 'term_id',
          'terms' => $category,
        )
      );
    } else if (!empty($job_type)) {
      $tax_query = array(
        array(
          'taxonomy' => 'dmove-types',
          'field' => 'term_id',
          'terms' => $job_type
        )
      );
    }
  }

  if (!empty($category) && $category > 0) {
    $tax_query = array(
      array(
        'taxonomy' => 'dmove-categories',
        'field' => 'term_id',
        'terms' => $category,
      )
    );
  }

  $query = new WP_Query(
    array(
      'post_type' => 'job',
      'post_status' => 'publish',
      'posts_per_page' => 10,
      'paged' => $paged,
      's' => $s,
      'tax_query' => $tax_query,
    )
  );
  $count = $query->found_posts;
  if ($count == 0){
    
    $query = new WP_Query(
      array(
        'post_type' => 'job',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'paged' => $paged,
        'meta_query' => array(
          'relation' => 'OR',
          array(
            'key' => 'company_name',
            'value' => $s,
            'compare' => 'LIKE',
          ),
          array(
            'key' => 'location',
            'value' => $s,
            'compare' => 'LIKE',
          ),
        ),
        'tax_query' => $tax_query,
      )
    );
  }

?>

<?php if ($query->have_posts()): ?>

<!-- begin loop -->
<?php while ($query->have_posts()):
      $query->the_post();
      $jobs_location = get_field('location', get_the_id());
?>
<div class="jobs-title-content">
  <div class="jobs-image-area"> <?php the_post_thumbnail(); ?> <h4>
      <a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a>
    </h4>
  </div>
  <div class="jobs-location-area">
    <div>
      <img class="jobs-icons" src="https://www.districtmoving.com/wp-content/uploads/2022/12/Icon-Location.png" alt="">
      <h5> <?php echo $jobs_location; ?> </h5>
    </div> <?php
      $terms = get_the_terms(get_the_id(), 'dmove-types');
      if ($terms) {
        foreach ($terms as $term) {
          $job_type = $term->name;
        }
      }
    ?> <div class="loaction-second">
      <img class="jobs-icons" src="https://www.districtmoving.com/wp-content/uploads/2022/12/Icon-Job-Type.png" alt="">
      <h5> <?php echo $job_type; ?> </h5>
    </div>
  </div>
  <div class="jobs-date-area">
    <img class="jobs-icons" src="https://www.districtmoving.com/wp-content/uploads/2022/12/Icon-Date.png" alt="">
    <h5> <?php echo get_the_date('Y-m-d'); ?> </h5>
  </div>
</div>
<?php endwhile; ?>

</div>
<div class="dont-see-main"><a class="dont-see" href="https://www.districtmoving.com/employee-application">Don't see a job post for you? There are always new opportunities. Apply now!</a></div>
<div class="jobs-forms-button" style="max-width: 900px; margin: 25px auto 0;">

            <a class="request-quote job-single-buttons applynow-btn" href="https://www.districtmoving.com/employee-application">Apply Now</a>
        </div>
<div class="pagination custom_ajax_pagination">
  <?php
    echo paginate_links(
      array(
        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'total' => $query->max_num_pages,
        'current' => max(1, $paged),
        'format' => '?paged=%#%',
        'show_all' => false,
        'type' => 'plain',
        'end_size' => 2,
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => sprintf('<i></i> %1$s', __('<<', 'text-domain')),
        'next_text' => sprintf('%1$s <i></i>', __('>>', 'text-domain')),
        'add_args' => false,
        'add_fragment' => '',
      )
    );
  ?>
</div>
<!-- end loop -->


<!-- WHAT GOES HERE?????? -->


<?php wp_reset_postdata(); ?>

<?php else: ?>
<p style="text-align: center;" class="no_post"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;

  die();
}