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

<div class="page-header pattern-bg">
	<div class="container">
    	<div class="row">
        	<div class="span6">
            	<h2>PLAY GROUP & KINDER GARDEN </h2>
            </div>
            <div class="span6 trial">
				<style>
				.trial a:link {color:#fff;}
				.trial a:hover {color:#9EC64D;}
				</style>
            	<p><span style="color:#fff;"><a href='<?php echo base_url();?>index.php/welcome/index'>Home</a> / <a href='#'>Academics</a> / <a href='#'>Date Sheet</a>  </span></p>
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
			<p align="justify"><img src="<?php echo base_url();?>assets/images/kinder.jpg" alt="" height="20" width="450" style="float: left; padding-right: 30px;" /><br><br>
			Creativities in food and drink to a child and appropriate material for this kind of play group.  Allow the natural impulse of creative imagination to flourish in one of the greatest gift we can give to little children. Creative play brings out the inner light in a child.
			
			<br>ACTIVITIES FOR KINDERGARTEN CHILDREN <br>
1. Clay Modelling.<br>
2. Art & Craft.<br>
3.Icecream- Party.<br>
4. Mango Party.<br>
5. Soft drink Party.<br>
6. College work.<br>
7. Toy day.<br>
8. Orange & Grapes Party.<br>

		</p>	
			</div>
        </div>
    </div>    
</div>
<!--main content end //-->

<?php $this->load->view("footer");?>