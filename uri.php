<?php


	class URI {
	
		/**
		 * Return the current URI.
		 * @return string
		 */
		 public static function current()
		 {
		 	return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		 }
		
		
		
		/**
		 * Return a URI path segment.
		 * @param $segment integer
		 * @return string
		 */
		 public static function segment($segment=0)
		 {
			
			$uri	= parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$segs	= explode("/",$uri);
	
			if(isset($segs[$segment]))
			{ 
				return $segs[$segment];
				} else { 
					return NULL;
				}
				
		}
		
		
	}
