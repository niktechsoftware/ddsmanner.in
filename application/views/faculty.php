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
            	<h2>Faculty</h2>
            </div>
            <div class="span6 trial">
				<style>
				.trial a:link {color:#fff;}
				.trial a:hover {color:#9EC64D;}
				</style>
            	<p><span style="color:#fff;"><a href='<?php echo base_url();?>index.php/welcome/index'>Home</a> / <a href='#'>About Us</a> / <a href='#'>Faculty</a>  </span></p>
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
.faculty p {
	text-align:center;
}
.faculty img {
	width:100%;
}
.img1{
    -webkit-box-shadow:0 0px 7px rgba(0,0,0,0.3);
    box-shadow:0 0 5px rgba(0,0,0,0.2);
    padding:10px;
    background:#053d82;
    border:1px solid #ccc;
    width:auto;
    height:auto; 
    }
</style>
			
<!--main content start //-->
<div class="main-content" style="background: #fff;min-height:400px;">
    <div class="container" style="margin-top:40px;margin-bottom:40px;">
        <div class="row faculty">
			<!-- Page Content start //-->
			<?php  $this->db->where("status","Active");
			$rt = $this->db->get("employee_info");
			if($rt->num_rows()>0){
			$t=1;
			foreach($rt->result() as $row):?>
			<div class="span3">
				<img src="<?php echo base_url();?>ddsmanner/assets/images/empImage/<?php echo $row->photo;?>" class="img1" alt="" style="width:200px;height:200px;" />
				<p><b><?php if($row->gender =="Male"){echo "Mr. ";}else {echo "Ms. "; }echo $row->first_name." ".$row->mid_name." ".$row->last_name;?><br><?php echo $row->job_title;?></b></p>
			</div><?php
			$t++;endforeach;}
			else{
			echo "NO employee Found in database";
			}?>
			
		</div>
    </div>    
</div>

<!--main content end //-->
<?php $this->load->view("footer");?>