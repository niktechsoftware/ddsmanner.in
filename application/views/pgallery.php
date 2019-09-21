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
            	<h2>Gallery</h2>
            </div>
            <div class="span6 trial">
				<style>
				.trial a:link {color:#fff;}
				.trial a:hover {color:#9EC64D;}
				</style>
            	<p><span style="color:#fff;"><a href='<?php echo base_url();?>index.php/welcome/index'>Home</a> / <a href='#'>Image Gallery</a> / <a href='#'>Gallery</a>  </span></p>
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
			<div class="image-row">
				<div class="image-row">
				<div class="image-set" >
				<?php $t =$this->db->get("gallery");
				if($t->num_rows() >0){
				   
				$i=1;
				foreach($t->result() as $ta):
				   //  print_r($ta);
				?>
				<a class="example-image-link" href="<?php echo base_url();?>admin/assets/images/<?php echo $ta->image;?>" data-lightbox="example-set" data-title="welcome."><img class="example-image" src="<?php echo base_url();?>admin/assets/images/<?php echo $ta->image;?>" alt="" style="width: 140px; height: 120px;padding: 10px;"/></a>
				<?php $i++;
				endforeach;
				}
				
				else{
				echo "No Photo Uploaded";}?>
					
							
				</div>
			</div>
			</div>
        </div>
    </div>    
</div>
<!--main content end //-->

<?php $this->load->view("footer");?>