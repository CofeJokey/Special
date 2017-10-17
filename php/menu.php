<?php
class Menu{
		
	public static $items = [   
		1=> array( 'title' => 'Главное меню'),
		2 => array( 'title' => 'Start'),
		3 => array( 'title' => 'About'),
		4 => array( 'title' => 'Top list')
   
   ]; 
   

	public static function GetMenu($selected_item) {
         $get_menu = '<ul class="header_menu">';  
         foreach (self::$items as $input => $value) {
            if($input == $selected_item) {
				$get_menu = $get_menu.'<li>
				<a id = "Active">
				'."{$value['title']}
				</a>
				</li>";
			}
             else {
                 $get_menu = $get_menu.'<li>
				 <a '."href=index.php?page=$input>
				 {$value['title']}
				 </a>
				 </li>";
             }
         }
         $get_menu = $get_menu.'</ul>';
         return $get_menu;
     }


}
?>