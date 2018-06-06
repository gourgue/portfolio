<?php  

// functions not empty //
if (!function_exists('not_empty')) {
	function not_empty($fields=[])
	{
		if (count($fields) != 0) {
		   foreach ($fields as $field) {
		   	if(empty($_POST[$field]) || trim($_POST[$field]) == FALSE){
		   		return FALSE;
		   	}
		   }
		   return TRUE;
		}
	}
}
// fin functions not empty //


//function pour eviter les failles xxs  //
// if (!function_exists('failles_xxs')) {
// 		function failles_xxs($string)
// 		{
// 			if ($string) {
// 				return htmlspecialchars($string);			}
// 		}
// }
//fin function pour eviter les failles xxs  //

