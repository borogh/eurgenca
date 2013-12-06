<?php

class CSS_Helper{

    

    public static function hexToColor($hex) {
        if(0x0 > $hex || $hex > 0xFFFFFF) return false;
        if($hex > 0xFFF) $format = "%06X";
        else if($hex < 0xFFF) $format = "%03X";
        return sprintf("#$format", $hex);
    }

    public static function getImageUrl($img_file_name) {
        return "url(".Index::$imagesURL.$img_file_name.");";
    }
}

class CSS extends CSS_Helper {

    const PAGE_WIDTH = 980;
    const COLOR_MAIN = 0xf2f3ec;
    const COLOR_MAIN_LIGHT = 0xdbddc9;
    const COLOR_MAIN_DARK = 0x333232;
    const COLOR_SLAVE = 0xdbddc9;
    const COLOR_SLAVE_LIGHT = 0xdbddc9;
    const COLOR_SLAVE_DARK = 0x444343;
    const COLOR_BORDER = 0x999;
    const COLOR_BORDER_LIGHT = 0x999;
    const COLOR_BORDER_DARK = 0x999;

    public static function getColor($hex) {
		$color = self::hexToColor($hex);        
        return ($color ? $color : ";");
    }

}




?>
