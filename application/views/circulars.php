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
?>
<!--<marquee behavior="scroll" direction="up" 
           onmouseup="this.setAttribute('scrollamount', 5, 0);">-->
<?php

$v = $this->db->get("notice");
$i = 1 ;
if($v->num_rows()>0){
	 foreach($v->result() as $r):?>
	  
	 	<p class="text-center" style="font-size: 15px;color: #95C23D; text-align: center;"><?php echo $r->subject."<br>";?>  </p>
	<font style="font-size: 12px;font-style: italic;color:#333;">
						<?php echo $i.") ".$r->message."<br>";?>
						</font>
					
		 
	<?php 
	$i++; endforeach;
	?> 
	<!--</marquee>-->
	<br>

	<?php 
	
}
?>
	<br>
	
	<font style="font-size: 15px;font-style: italic;color:#333;">
						<a href="http://ddsmanner.in/assets/TimeTableHalfYearlyExam2018-19.pdf">Download Time Table For Half Yearly Examination 2018-19</a>
						</font></br>
						<font style="font-size: 15px;color: #95C23D;">  
						        	<a href="http://ddsmanner.in/index.php/welcome/syllabus" >Blue Print (syllabus & pattern ) of Half yearly Exam </a>
						</font>
		
	
	
	 
	<?php 

?>

