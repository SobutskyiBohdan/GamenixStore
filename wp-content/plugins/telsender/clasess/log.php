<?php

namespace pechenki\Telsender\clasess;

if (!defined('ABSPATH')) {
    exit;
}

class log
{


    const path = ABSPATH . "wp-content/uploads/telsender/error.log";

    public function __construct()
    {
        $this->initLogFile();
    }

    /**
     * @param $text
     * @return void
     */
    public static function setLog($text)
    {
        if (!defined('LOG_TS')) return;

        if (is_array($text)) {
            $text = json_encode($text);
        }
        $file = fopen(self::path, "a+");
        echo fwrite($file, "\n" . date('Y-m-d h:i:s') . " :: " . $text);
        fclose($file);
    }

    /**
     * @return false|string
     */
    public static function getLog()
    {

        if (!file_exists(self::path)) {
            return 'error none';
        }
        return trim(file_get_contents(self::path));
    }


    public static function clearLog()
    {
        return update_option(self::$logNameOption, '');
    }

    /**
     * @return void
     */
    private function initLogFile()
    {
        if (file_exists(self::path)) return;

        $upload = wp_upload_dir();
        $upload_dir = $upload['basedir'];
        $upload_dir = $upload_dir . '/telsender';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755);
        }
        try {
            fopen(self::path, 'x');
            file_put_contents($upload_dir . '/.htaccess', 'deny from all');
        }catch (\Exception $e){

        }


    }
}