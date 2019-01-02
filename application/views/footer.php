
<?php 
/**
 *
 * DDS MANNER Higher Secondary School
 * @link http://ddsmanner.in/
 * Built By: www.ddsmanner.in
 * Project Manager: Best School In Chiraiyakot, Mau
 * 
 *
 */
?>
<footer class="site-footer" style="background-color: #022042;"> </footer>
				<!-- bottom line start //-->
				<div class="bottom-line" style="border-top: 3px solid #95C23D;">
					<div class="container">
						<div class="row">
							<div class="span6">
								
									<i><font face="times, serif" size="4" color="white">D.D.S. Manner Higher Secondary School, Chiraiyakot Mau India. <br>P:
									0547-2335008 | M: +91-9415280237,9450601811 
									<br>Email:
									info@ddsmanner.in,themannerschool@gmail.com<a
										href="<?php echo base_url();?>assets/welcome/index"></a><br>
									
									<!-- hitwebcounter Code START -->
									Total Visitors: 
									
									</font>
									<?php

									/* counter */

									//opens countlog.txt to read the number of hits
									$datei = fopen("./counter.txt","r");
									$count = fgets($datei,50000);
									fclose($datei);
									$count=$count + 1 ;
									?><font size="5" color="lightgreen"><?php
									echo "$count" ;

									?></font></i><?php


									// opens countlog.txt to change new hit number
									$datei = fopen("./counter.txt","w");
									fwrite($datei, $count);
									fclose($datei);

									?>
									
									
									
									
									
									
                            
								</p>
							</div>
							<div class="span6 footerlink">
								<style>
.footerlink a:link {
	color: #fff;
}

.footerlink a:hover {
	color: #9EC64D;
}
</style>
								<p class="bottom-menu footerlink"> 
									<a href="<?php echo base_url();?>index.php/welcome/reachus"><i><font face="times, serif" size="4" color="FFFFCC">Sitemap</font></i></a> / <a
										href="<?php echo base_url();?>index.php/welcome/reachus"><font face="times, serif" size="4" color="FFFFCC">Contact Us</font></a> <br> Powered by
									: <a href="https://www.gfinch.in"><span style="color: #fff;">Niktech Software Solutions</span></a><br>
									<a href="#"><span style="color: #fff;">Disclaimer
											Policy</span></a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- bottom line end //-->

				<div class="container site-mobile-menu">
					<div class="row">
						<div class="span12" style="text-align: center;">
							<a target="_blank" href="https://www.facebook.com/ddsmanner"
								class="hvr-pop" style="padding: 5px 0px;"><img
								src="<?php echo base_url();?>assets/images/facebook-icon.png"></a>
							<a target="_blank"
								href="https://www.youtube.com/channel/UC1WfU9NANrgWcsax3c00tgg"
								class="hvr-pop"><img
								src="<?php echo base_url();?>assets/images/youtube-icon.png"></a>
							<a target="_blank" href="https://www.linkedin.com/in/ddsmanner"
								class="hvr-pop"><img
								src="<?php echo base_url();?>assets/images/linkedin-icon.png"></a>
							<a target="_blank" href="https://twitter.com/ddsmanner"
								class="hvr-pop"><img
								src="<?php echo base_url();?>assets/images/twitter-icon.png"></a>
							<a href="#" data-reveal-id="myModal" class="hvr-pop"><img
								src="<?php echo base_url();?>assets/images/whatsapp-icon.png"></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- to the top start //-->
	<div id="to-the-top">
		<i class="icon-angle-up"></i>
	</div>
	<!-- to the top end //-->

	<!-- scripts start //-->
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="../code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/modernizr.js"></script>
	<script
		src="<?php echo base_url();?>assets/js/layerslider.kreaturamedia.jquery.js"></script>
	<script
		src="<?php echo base_url();?>assets/js/layerslider.transitions.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-easing-1.3.js"
		type="text/javascript"></script>
	<script
		src="<?php echo base_url();?>assets/js/jquery-transit-modified.js"
		type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url();?>assets/assets-newsletters/scripts/quick_newsletter.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.colorbox.js"></script>
	<script src="<?php echo base_url();?>assets/js/custom.js"></script>


	<!-- page load auto popup script-->
	<script type="text/javascript"
		src="<?php echo base_url();?>assets/js/jquery.reveal.js"></script>
	<script type="text/javascript">		
	jQuery(document).ready(function($) {    
	/* Pop-up    ================================================= */    
	$(function() {        
		function showpanel() {        
			$('.reveal-modal').reveal({            
			animation: 'fadeAndPop',            
			animationspeed: 800        
			});        
		}        
	setTimeout(showpanel, 0000)    }); });
</script>
	<script>
	jQuery(document).ready(function() {
	});
</script>
	<!-- scripts end //-->
	<script>
jQuery(document).ready(function() {
	$('#portfolio-list').magnisSort({
		'showAll' : 1
	});
});
</script>

</body>
</html>