<?php

/**
 * Barcode Master plugin main class
 */
class BarcodeMaster {
   
    //Singleton instance of the class
    protected static BarcodeMaster|NULL $instance = NULL;

    //Protected constructor
    protected function __construct() {}

    /**
     * Returns instance of the class and makes sure that only one instance is created
     * 
     * @return BarcodeMaster Instance of the class
     */
    public static function instance(): BarcodeMaster {

        if(self::$instance === NULL) {
            self::$instance = new BarcodeMaster();
        }

        return self::$instance;
    }
}


add_action('plugin_loaded', ['BarcodeMaster', 'instance'], 30, 1);
