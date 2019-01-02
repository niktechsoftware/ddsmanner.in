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




$this->load->view("header");?>
<div class="gray-line"></div>

<div class="page-header pattern-bg">
	<div class="container">
    	<div class="row">
        	<div class="span6">
            	<h2>Director Message</h2>
            </div>
            <div class="span6 trial">
				<style>
				.trial a:link {color:#fff;}
				.trial a:hover {color:#9EC64D;}
				</style>
            	<p><span style="color:#fff;"><a href='<?php echo base_url();?>index.php/welcome/index'>Home</a> / <a href='#'>About Us</a> / <a href='<?php echo base_url();?>index.php/welcome/aboutschool'>About School</a>  </span></p>
            </div>
        </div>
    </div>
</div>
<!-- header end //-->

<style>
.main-content-block{
	margin-top:0px;
}
</style>
<style>
.data-table table tr:nth-child(odd) {background-color:#eeeeee;}
.data-table table tr:nth-child(even) {background-color:#e4e4e4;}
.data-table table td {padding-left:10px;}

.data-table ul li {
	list-style-image: url('images/check.png');
	margin-left:30px;
	line-height:20px;
	margin-bottom:10px;
	margin-right: 35px;
}

.button-new {
	background-color: #95c23d;
	color:#fff;
	line-height: 24px;
	padding:10px 20px;
	margin: 1px;
	margin-left: 20px;
	overflow: hidden;
	display: block;
</style>
			
<!--main content start //-->
<div class="main-content" style="background: #fff;min-height:400px;">
    <div class="container" style="margin-top:40px;margin-bottom:40px;">
        <div class="row">
			<!-- Page Content start //-->
			<div class="span12">			
				
				<p align="justify"><img src="<?php echo base_url();?>assets/images/pages/dmessage.jpg" alt="" width="11%" height="11%" style="float: left; padding-right: 30px;" />
				<p> <font color="#005CB9" face="courier" size="4">The Manner School was established in the year 1997. Since than it has been functioning under the most intelligent, mature, experience and able guidance of the school management team. It is one of the oldest and prestigious educational institution of the locality. Our school always try to give and bring brightnes for every student's life. In this competitive era, it is imperative that the children have a well rounded personality and are able to face the world self-assuredly, That's why it's whole motive is to make the students able to get success in all parts of life and be a good human-being. </font></p>
				
				</p>
				<br><br>
				<h1 style="float: right;">Dr Anand Narayan Singh</h1><br><br>
					<h2 style="float: right;">(Director, D.D.S Manner Higher Secondary School)</h2>	
				</div>
        </div>
    </div>    
</div>
<!--main content end //-->
<?php $this->load->view("footer");?>


