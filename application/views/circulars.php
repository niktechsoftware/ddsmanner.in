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



$v = $this->db->get("notice");
$i = 1 ;
if($v->num_rows()>0){
	 foreach($v->result() as $r):?>
	<font style="font-size: 15px;font-style: italic;color:#333;">
						<?php echo $i.") ".$r->message."<br>";?>
						</font>
						<font style="font-size: 15px;color: #95C23D;"><?php echo $r->subject."<br>";?>  </font>
		
	<?php 
	$i++; endforeach;
	?>
	<br>

	<?php 
	
}
?>
	<br>
	
	<font style="font-size: 15px;font-style: italic;color:#333;">
						<?php echo $i.") ".'<a href="http://ddsmanner.in/assets/TimeTableHalfYearlyExam2018-19.pdf">Download Time Table For Half Yearly Examination 2018-19</a>'; $i++;?>
						</font></br>
						<font style="font-size: 15px;color: #95C23D;">  
						        	<?php echo $i.") ".'<a href="http://ddsmanner.in/index.php/welcome/syllabus" >Blue Print (syllabus & pattern ) of Half yearly Exam </a>';?>
						</font>
		
	
	
	 
	<?php 

?>

