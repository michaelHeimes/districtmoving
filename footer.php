<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package districtmoving
 */

?>

	</div><!-- #content -->
<?php 
$cta_visible = get_field('cta_visiable','option');
$message_text = get_field('message_text','option');
$cta_link = get_field('cta_link','option');
$bar_color = get_field('background_color','option');
?>
<?php if(!empty($message_text) || !empty($bar_color) || !empty($cta_visible)) { ?>
  <?php if($cta_visible==1) { ?>
    <div class="dist-footer-bar" <?php if(!empty($bar_color)) { ?> style="background-color:<?php echo $bar_color;?>" <?php } ?> >
      <div class="container">
        <?php if(!empty($message_text)) { ?>
          <?php echo $message_text;?>
        <?php } ?>
        </div>
    </div>
  <?php } }?>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3116.6778306407327!2d-76.89679068457953!3d38.633291979612366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7a117f981093b%3A0x542018b8877285a9!2sDistrict%20Moving%20Companies%2C%20Inc!5e0!3m2!1sen!2s!4v1679607889203!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <!--Footer CTA Code Start-->
	<footer id="colophon" class="footer">
		<div class="footer-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6">
						<?php dynamic_sidebar('footer-area-1'); ?>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<?php dynamic_sidebar('footer-area-2'); ?>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<?php dynamic_sidebar('footer-area-3'); ?>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<?php dynamic_sidebar('footer-area-4'); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-info">
			<div class="container">
				©<?php echo date("Y"); ?> District Moving Companies, Inc. and its licensors. All rights reserved.
			</div>
		</div><!-- .footer-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js?ver=2022"></script>

<div id="mni-membership-637655569955885788"></div>
<script src="https://charlescountychamber.chambermaster.com/Content/Script/Member.js" type="text/javascript"></script>
<script type="text/javascript">
new MNI.Widgets.Member("mni-membership-637655569955885788",{member:9562,styleTemplate:"#@id{text-align:center;position:relative}#@id .mn-widget-member-name{font-weight:700}#@id .mn-widget-member-logo{max-width:100%}"}).create();
</script>
</body>
</html>
