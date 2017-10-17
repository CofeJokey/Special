<?php



class Content{
    
	
		public static $items = [   
		1 => array( 'link' => '../assets/index.html'),
		2 => array( 'link' => '../assets/start.html'),
		3 => array( 'link' => '../assets/about.html'),
		4 => array( 'link' => '../assets/top_list.html')
		];  

		public static function GetContent($selected_item) {
			$file = self::$items[$selected_item]['link'];
			
			if ((array_key_exists($selected_item, self::$items)) 
				&& (file_exists($file))) 
				{
				return file_get_contents($file);
				}
			else return file_get_contents('../assets/index.html');
    }
    
}
?>