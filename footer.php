<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Wisten
 * @since Wisten 1.0
 */
 global $smof_data;
?>


	<!-- Footer Section -->
	<section id="footer">
	
		<div class="inner footer">
<?php if(isset($smof_data['footer_override']) && $smof_data['footer_override'] == '1' && !empty($smof_data['footer_page'])){
	$footer_ct = get_page_by_path($smof_data['footer_page']);

	echo apply_filters('the_content', $footer_ct->post_content);
}else {
?>		


			<!-- Socials and Mail -->
			<div class="container align-center animated footer-box" data-animation="flipInY" data-animation-delay="0">
				<?php echo FastWP_UI::get_social_icons('footer_social_', 'footer-links'); ?>


				<!-- Mail -->
				<p class="footer-text">
					<span>Mail</span>:<span><a target="_blank" href="mailto:<?php echo (isset($smof_data['footer_email']))?$smof_data['footer_email']:''; ?>"><?php echo (isset($smof_data['footer_email']))?$smof_data['footer_email']:''; ?></a></span>
				</p> 
				
				<!-- Copyright -->
				<p class="footer-text copyright">
					<?php echo (isset($smof_data['footer_copy']))?$smof_data['footer_copy']:'&copy;2014 FastWP. ALL RIGHTS RESERVED.'; ?>
				</p>
			</div>
			
			
<?php } ?>			
			<div class="clear"></div>
		</div> <!-- End Footer inner -->
		
	</section><!-- End Footer Section -->
	<section id="back-top" style="display: block;">
		<a href="#home" class="scroll"><i class="fa fa-chevron-up"></i></a>
	</section>
<?php 
$script 		= '<script>%s</script>';
echo (isset($smof_data['custom_js']) && !empty($smof_data['custom_js']))? sprintf($script, $smof_data['custom_js']):'';
wp_footer(); ?>
</body>
</html>