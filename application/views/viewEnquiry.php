<?php $this->load->view("header");
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

<div class="gray-line"></div>

<div class="page-header pattern-bg">
	<div class="container">
    	<div class="row">
        	<div class="span6">
            	<h2>View Enquiry</h2>
            </div>
            <div class="span6 trial">
				<style>
				.trial a:link {color:#fff;}
				.trial a:hover {color:#9EC64D;}
				</style>
            	<p><span style="color:#fff;"><a href='<?php echo base_url();?>index.php/welcome/viewEnquiry'>Home</a> / <a href='#'>Careers</a> / <a href='#'>View Enquiry</a>  </span></p>
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
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
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
			<?php $rt = $this->db->get("enquery");
				if($rt->num_rows()>0){
				?>		
				<table>
					<thead>
						<tr>	
							<td>Sno.</td>
							<td>Name</td>
							<td>Fname</td>
							<td>class for enquiry</td>
							<td>dob</td>
							<td>email</td>
							<td>Mobile</td>
							<td>Gender</td>
							<td>Address</td>
							<td>Enquiry Date</td>
							<td>Status</td>
						</tr>
					</thead>	
					<tbody>
					<?php $i=1; foreach($rt->result() as $tr):?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $tr->stu_first_name." ".$tr->stu_last_name; ?></td>
							<td><?php echo $tr->f_name; ?></td>
							<td><?php echo $tr->class; ?></td>
							<td><?php echo $tr->dob; ?></td>
							<td><?php echo $tr->email; ?></td>
							<td><?php echo $tr->mobile; ?></td>
							<td><?php echo $tr->gender; ?></td>
							<td><?php echo $tr->address; ?></td>
							<td><?php echo $tr->submit_date; ?></td>
							<td><?php echo $tr->status; ?></td>
						</tr>
						<?php $i++; endforeach; ?>
					</tbody>
				</table>
				<?php } ?>				
			</div>
        </div>
    </div>    
</div>
<!--main content end //-->

<?php $this->load->view("footer");?>