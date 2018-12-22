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
            	<h2>Online Job Application</h2>
            </div>
            <div class="span6 trial">
				<style>
				.trial a:link {color:#fff;}
				.trial a:hover {color:#9EC64D;}
				</style>
            	<p><span style="color:#fff;"><a href='<?php echo base_url();?>index.php/welcome/index'>Home</a> / <a href='#'>Careers</a> / <a href='#'>Online Job Application</a>  </span></p>
            </div>
        </div>
    </div>
</div>
<!-- header end //-->
<!--main content start //-->
<div class="main-content" style="background: #fff;min-height:400px;">
    <div class="container" style="margin-top:40px;margin-bottom:40px;">
        <div class="row">
			<!-- Page Content start //-->
			<div class="span12">
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
			
			button {
				background:#95c23d;
				padding: 10px 25px;
				border: 0px;
				color: #fff;
				cursor:pointer;
				width:100%;
			}
			input {
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				line-height: 40px;
				height: 40px;
				padding: 0px 15px;
				border: 1px solid #ddd;
				float: left;
				width:100%;
				margin-bottom:10px;
			}
			textarea {
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				line-height: 40px;
				height: 80px;
				padding: 0px 15px;
				border: 1px solid #ddd;
				float: left;
				width:100%;
				margin-bottom:10px;
			}
			select {
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				line-height: 40px;
				height: 40px;
				padding: 0px 15px;
				border: 1px solid #ddd;
				float: left;
				width:100%;
				margin-bottom:10px;
			}
			.star{
				color:#dd0000;
			}
			</style>
			</div>
			
			<form name='admission'  action="<?php echo base_url();?>index.php/welcome/saveJobApp" method="post" id="myform" enctype="multipart/form-data">
				
				<div class="span12 hvr-shutter-out-horizontal" style="margin-bottom: 10px; padding: 10px 0px; text-align: center; font-size:20px; color:white;"><?php if($this->uri->segment(3)){echo "Successfully submit we will Contact you Soon.";}?></div>			
				<div class="span3">Job Application Date <span class="star">*</span></div>
				<div class="span3"><input type="date" title="subdate" id="subdate" name="subdate" value='' class="textbox mandatoryvalue" required /></div>
				
				<div class="span3">Applied For <span class="star">*</span></div>
				<div class="span3">
					<select name="classt" title="Classt" id="classt" class='dropdown' required>
						<option value="">--Select Class--</option>
						<option value="PRT">PRT </option>
						<option value="TGT">TGT </option>
						<option value="PGT">PGT </option>
						
					</select>
				</div>
				
				<div class="span3">Your Name<span class="star">*</span></div>
				<div class="span3"><input type="text" title="First Name" id="firstname" name="firstname" value='' class="textbox mandatoryvalue" required /></div>
				<div class="span3">Contact Number <span class="star">*</span></div>
				<div class="span3"><input type="text" title="Last Name" id="mnumber" name="mnumber" value='' class="textbox mandatoryvalue" required /></div>
				
				
				<div class="span3">Gender</div>
				<div class="span3">
					<select name="genderid" id="genderid" class="dropdown mandatoryvalue" >
						<option value=-1>--Select Gender--</option>
						<option value="1">Male</option>
						<option value="2">Female</option>
					</select>
				</div>
				<div class="span3">Address</div>
				<div class="span3"><input type="text" title="Address" id="address0" name="address" value='' class="textbox" /></div>
				
				<div class="span3">City</div>
				<div class="span3"><input type="text" title="City" id="city" name="city" value='' class="textbox" /></div>
				<div class="span3">State</div>
				<div class="span3"><input type="text" title="State" id="state" name="state" value='' class="textbox" /></div>
				
				<div class="span3">Upload Resume With Photo (Only PDF or DOC format)<span class="star">*</span></div>
				<div class="span3"><input type="file" title="Resume" id="resume" name="resume" required="required" ></div>
				<div class="span3"></div>
				<div class="span3"><button class="hvr-sweep-to-right" type="submit" id="savebtn"><i class="fa fa-pencil" aria-hidden="true"></i> Submit</button></div>
			</form>
			
			
			
        </div>
    </div>    
</div>
<!--main content end //-->
<?php $this->load->view("footer");?>