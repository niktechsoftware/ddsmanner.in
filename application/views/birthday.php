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


$v = $this->db->get("student_info");
$date = date('Y-m-d');
$stamp=strtotime($date);
$cd=date("d", $stamp);
$cm=date("m", $stamp);
if($v->num_rows()>0){
	$i = 1 ; foreach($v->result() as $r):
	$stamp1=strtotime($r->date_ob);
	$od=date("d", $stamp1);
	$om=date("m", $stamp1);
	if(($cm == $om) && ($cd == $od)){
	?>
	<font style="font-size: 20px;color:#333;">
						<?php echo $i.") ".$r->first_name." ".$r->midd_name." ".$r->last_name;?>
						</font>
						<font style="font-size: 20px;color: #95C23D;"><?php echo $r->class_id."-".$r->section;?>  </font>
						<br>
		
	<?php 
	$i++; }endforeach;
}

?>

