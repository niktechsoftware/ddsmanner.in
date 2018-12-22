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
            	<h2>Admission Procedure</h2>
            </div>
            <div class="span6 trial">
				<style>
				.trial a:link {color:#fff;}
				.trial a:hover {color:#9EC64D;}
				</style>
            	<p><span style="color:#fff;"><a href='<?php echo base_url();?>index.php/welcome/index'>Home</a> / <a href='#'>Admissions</a> / <a href='#'>Admission Procedure</a>  </span></p>
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
}

</style>
			
<!--main content start //-->
<div class="main-content" style="background: #fff;min-height:400px;">
    <div class="container" style="margin-top:40px;margin-bottom:40px;">
        <div class="row">
			<!-- Page Content start //-->
			<div class="span9">  
				<p class="title" style="text-align: justify;">1-The minimum age for admission in PLAY GROUP is 2 years 6 months and above on 1st April of the years. For Nursery class it 3 years 6 months and above.</p>
				<p style="text-align: justify;"><br></p>
				
				<p class="title" style="text-align: justify;">2-There will be no admission test for the students seeking admission to P.G. and Nursery</p>
				<p style="text-align: justify;">
					<br>
				</p>
				
				<p class="title" style="text-align: justify;">3-The admission for other than playgroup and nursery class is based on the performance in admission test. Subjects for the test are English, Math and Science.</p>
				<p style="text-align: justify;">
					<br>

				</p>
				
				<p class="title" style="text-align: justify;">4-Shortlisted candidate will have to appear for the interview with the principal accompanied by their parents on the specified date.</p>
				
				<p style="text-align: justify;">
					<br>

				</p>
				
				
				<p class="title" style="text-align: justify;">5-In the case of admission in the class PLAY GROUP to class I required to attested copy of birth certificate of the candidate must be attached to the application form.</p>
				<p style="text-align: justify;">
					<br>
				</p>
				<p class="title" style="text-align: justify;">6-In case of admission by transfer from any other school the name and other particulars of the student should conform strictly to the entries in the transfer certificate, which is should be submitted latest by 20 July.</p>
				<p style="text-align: justify;">
					<br>
				</p>	
	        </div>
        
			<div class="span3">
				<div class="main-content-block magnis-brochure" style="background: #95c23d;">
                	<header style="background: #759a2d;color:#fff;">Download Form</header>
                    <section style="padding-top:20px;">
                    	<p style="color:#fff;"y>ddsManner.pdf (1.51 MB)</p>
                    	<p><a href="<?php echo base_url();?>assets/downloads/ddsadmissionform.pdf" class="button hvr-sweep-to-right"><i class="icon-download-alt"></i> download</a></p>
                    </section>
                </div>
            </div>
			
        </div>
    </div>    
</div>
<!--main content end //-->
<?php $this->load->view("footer");?>