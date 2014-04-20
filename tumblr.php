<?php

/**
 * CodeIgniter Simple Tumblr Library by Andrew Condurache	http://andrewcondurache.com	andrew@ginklabs.com
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * @category   Tumblr
 * @package    CodeIgniter
 * @subpackage Client
 * @version    1.0
 * @license    http://www.gnu.org/licenses/     GNU General Public License
 */

 class Tumblr 
 {
	/*
	 * Variable to hold an instance of CodeIgniter
	 */
	 
	protected $ci_instance;
	 
    /*
     * Construct function
     * Sets the codeigniter instance variable and loads the lang file
     */
	 
    function __construct() 
	{
    	// Set the CodeIgniter instance variable
    	$this->ci_instance =& get_instance();
    } 	 
	
	public function tumblr_hostname($blog, $jsonp = FALSE, $callback = FALSE)
	{
		$url = 'http://api.tumblr.com/v2/blog/'.$blog.'/';
		if($jsonp != FALSE)
		{
			$url .= '&jsonp=true',
		}
		
		if($callback != FALSE)
		{
			$url .= '&callback='.$callback;
		}
		
		return $url;
	}
	 
 }



?>