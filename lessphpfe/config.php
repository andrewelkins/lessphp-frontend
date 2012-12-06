<?php defined('LESSPHPFE') OR die('No direct access allowed.');
/**
 * @title Config file for lesscss frontend
 * @description Configuration options for lesscssfe.
 * @link https://github.com/andrew13/lessphp-frontend
 * @author Andrew Elkins
 * @package lessphp-frontend
 * @license MIT
 * @version 1.0.0
 */

class lessphpfe_config
{
    protected $config = array(

        // Path to CSS directory relative. Typically ../
        'pathToCssDirectory' => '../',
        // Names of the less files to be turned in to css files.
        'lessFiles' => array(
            'source/main.less' => 'generated/main.css',
            'source/extra.less' => 'generated/extra.css',
        ),

        // Use master CSS file. true | false
        'useMasterCssFile' => true,
        // Name of the master css file to compile into or write includes into.
        'masterCssFileName' => 'master.css',

        // Minify the output css files. true | false
        'minifyOutput' => false,
        'setPreserveComments' => true,

    );

    public function __construct()
    {
        $this->renderConfig();
    }

    public function renderConfig()
    {
        //
    }

    public function getConfig()
    {
        return $this->config;
    }
}