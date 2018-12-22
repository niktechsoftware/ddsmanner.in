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
            	<h2>Principal's Desk</h2>
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
				<p align="justify"><img src="<?php echo base_url();?>assets/images/pages/dprincipal1.jpg" alt="" width="14%" height="14%" style="float: left; padding-right: 30px;" /><br>
				<font color="#005CB9" face="courier" size="4">D.D.S. Manner Higher Secondary School recognizes the potential in every student and enables the possibility of his/her unique abilities to shine bright</font> 
				
				</p>
				<p align="justify"><font color="#005CB9" face="courier" size="4">
				As an education institution D.D.S. Manner is committed to providing empowerment, leadership skills, a fun learning environment, positive values, social competencies, sporting skill, opportunities to master evolving technology and personal identity to all students enrolled with us.
				</font></p>
				<p align="justify"><font color="#005CB9" face="courier" size="4">
				Our expertises in education in supported by prominent figures of society and parents of the students. Willingness of parents to walk extra mile to bring the best to our students.
				</font></p>
				<p align="justify"><font color="#005CB9" face="courier" size="4">
				Every thing we do at D.D.S Manner to make our children feel valued and make them valuable.</font>
				</p>
				<br>
				<h1 style="float: right;"></h1><br><br>
					<h2 style="float: right;">(Principal, D.D.S. Manner Higher Secondary School)</h2>	
				</div>
        </div>
    </div>    
</div>
<!--main content end //-->
<?php $this->load->view("footer");?>