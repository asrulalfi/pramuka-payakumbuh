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
			case 3:
				$this->menuAdmin();
				break;
			default:
				$this->menuReporterRedaksi();
				break;
		}
	}

	function filterContent($content, $level){
		if($level != 3){
			return "";
		}

		return $content;
	}

	function menuAdmin(){
 		echo "<ul>
                <li>".$this->Html->link(__('Dashboard'), array('controller' => 'posts', 'action' => 'pending_posts'), 
                      array('class' => 'dashboard'))."
                </li>
                <li>".$this->Html->link(__('Berita'), array('controller' => 'posts', 'action' => 'list_posts'),
                	  array('class' => 'judul'))."
                
                </li>
                <li>".$this->Html->link(__('Galery'), array('controller' => 'Galleries', 'action' => 'index'),
                    array('class' => 'judul'))."
         		    </li>
          		  <li><a href='?pil=pages' class='judul'>Pages</a></li>
          		  <li>".$this->Html->link(__('Komentar'), array('controller' => 'comments', 'action' => 'index'),
                    array('class' => 'judul'))."</li>
          		  <li>".$this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index'), 
                		array('class' => 'user'))."
          		  </li>
          	 	  <li>".$this->Html->link(__('logout'), array('controller' => 'users', 'action' => 'logout'),
                	  array('class' => 'logout'))."
          		  </li>
        	</ul>";
	}

	function menuReporterRedaksi(){
		echo "<ul>
                <li>".$this->Html->link(__('Dashboard'), array('controller' => 'posts', 'action' => 'pending_posts'), 
                      array('class' => 'dashboard'))."
                </li>
                <li>".$this->Html->link(__('Berita'), array('controller' => 'posts', 'action' => 'list_posts'),
                	  array('class' => 'judul'))."
                
                </li>
                <li>".$this->Html->link(__('Galery'), array('controller' => 'Galleries', 'action' => 'index'),
                    array('class' => 'judul'))."
         		    </li>
          		  <li><a href='?pil=pages' class='judul'>Pages</a></li>
          		  <li><li>".$this->Html->link(__('Komentar'), array('controller' => 'comments', 'action' => 'index'),
                    array('class' => 'judul'))."</li></li>
          		  <li>".$this->Html->link(__('logout'), array('controller' => 'users', 'action' => 'logout'),
                	  array('class' => 'logout'))."
          	  	</li>
        	</ul>";
	}
}