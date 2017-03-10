<?php
				if(!function_exists('scandir')) {
				   function scandir($dir, $sortorder = 0) {
					   if(is_dir($dir))        {
						   $dirlist = opendir($dir);
						   while( ($file = readdir($dirlist)) !== false) {
							   if(!is_dir($file)) {
								   $files[] = $file;
							   }
						   }
						   ($sortorder == 0) ? asort($files) : rsort($files);
						   return $files;
					   } else {
					   return FALSE;
					   break;
					   }
				   }
				} 
					

				$dir = 'arhiva/';
				$newstFileDate = strtotime('1970-01-01');;
				$newstFile = '';
				
				$archive = array();
				
				foreach (scandir($dir) as $entry) {
					$info = pathinfo($entry);
					if (($info["extension"] != "htm" && $info["extension"] != "html" && $info["extension"] != "txt") || strpos($entry, "-p") !== false )
						continue;
					$curentFileDateStr = substr($entry, 9, 10);
					//echo $curentFileDateStr . "</br>";
					$curentFileDate = strtotime($curentFileDateStr);
					$curentFileDate = strtotime('+1 day', $curentFileDate);
					$archive[$curentFileDate] = $entry;
					
					if($curentFileDate && $curentFileDate > $newstFileDate){
						$newstFileDate = $curentFileDate; 
						$newstFile = $entry;
					}
					
				}
				arsort($archive);
				
?>