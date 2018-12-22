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
            	<h2>Higher Secondary Section</h2>
            </div>
            <div class="span6 trial">
				<style>
				.trial a:link {color:#fff;}
				.trial a:hover {color:#9EC64D;}
				</style>
            	<p><span style="color:#fff;"><a href='<?php echo base_url();?>index.php/welcome/index'>Home</a> / <a href='#'>Academics</a> / <a href='<?php echo base_url();?>index.php/welcome/ddshighersection'>Higher Secondary Section</a>  </span></p>
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
				 <p><img src="<?php echo base_url();?>assets/images/about.jpg" alt="" /></p>
<p style="text-align: justify;">The Higher Secondary Sections extends from class VI to XII. One of the important functions of this section is to develop and master their area of interest. Hence the students are taught how to harness their talents in a constructive fashion. The emphasis is given on logical and categorical thinking. Exploting the infrastructural advantages such as Library, Multimedia room set play a huge role in developing a sound mind of the children.
We ensure all that they require to complete in any learning process and students are provided the same thus enabling them to build and gather confidence in the work they do and deliver.
*The emphasis is on acquiring in depth conceptual knowledge.
*The course curriculum is based on research oriented and carried on by team work, group discussion, Knowledge exchange programme, projects Model preparation and exploration.
*Personality development, Value education manages up with peer pressure is stresses upon at   this age.
</p>
</p> 		
			</div>
        </div>
    </div>    
</div>
<!--main content end //-->
<?php $this->load->view("footer");?>