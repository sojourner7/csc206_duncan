<?php
/* Class to handle the rendering of various HTML chunks */
class layout {
    
    /**
    * static variable holder 
    *  @var string
    */

    public static $content = '';
    
    /**
     * Generate all reusable HTML areas
     * @return string
     */
	public static function render()
	{
		echo static::$content;
	}
}
