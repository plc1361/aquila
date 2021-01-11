<?php


namespace AQUILA_THEME\Inc\Traits;

/**
 * 
 */
trait singleton
{
    public function __construct() {
       
    }

    public function __clone() {
        
    }

    final public static function det_instance() {
        static $instance = [];
        $called_class = get_called_class();
        if (!isset( $instance[$called_class])) {
            $instance[$called_class] = new $called_class();
            do_action(sprintf('aquila_theme_singleton_init%s', $called_class));
        }
        return $instance[$called_class];
    }
}
