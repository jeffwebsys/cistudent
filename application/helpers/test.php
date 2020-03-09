<?php
function student_number($stud_no){

	return 'STUDENT'.str_pad($stud_no, 5, 0, STR_PAD_LEFT);
}

?>