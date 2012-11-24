 <?php 
App::uses('AppHelper', 'View/Helper');

class CustomHelper extends AppHelper {

	var $helpers = array('Js', 'Html', 'Form');

	function generateUserLevel($level){
		switch($level){
			case 1:
              $stat = "Reporter";
			break;
			case 2:
              $stat = "Redaksi"; 
			break;
			case 3:
              $stat = "Admin"; 
			break;
		}

		return $stat;
	}

	function displayMenu($level){
		switch ($level) {
			case 1:
				# code...
				break;
			case 2:
				break;
			case 3:
				break;
			default:
				# code...
				break;
		}
	}

	function menuAdmin(){

	}

	function menuReporterRedaksi(){
		
	}
}