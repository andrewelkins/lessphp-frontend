<?php defined('LESSPHPFE') OR die('No direct access allowed.');
/**
 * @title lesscss frontend
 * @description Class for lesscssfe.
 * @link https://github.com/andrew13/lessphp-frontend
 * @author Andrew Elkins
 * @package lessphp-frontend
 * @license MIT
 * @version 1.0.0
 */
require "lessphp/lessc.inc.php";

class lesscssfe_handler
{
    /**
     * Holds the configuration values.
     * @var array
     */
    protected $config = array();
    protected $cssPath = array();

    public function __construct( lessphpfe_config $config )
    {
        $this->setConfig( $config->getConfig() );
        $this->setCssPath();
    }

    public function compile()
    {
        $less = new lessc();
        // Array of less css files.
        $lessFiles               = $this->getConfigItemOrError( 'lessFiles' );
        // Clean CSS options
        $useMasterCssFile       = $this->getConfigItemOrError( 'useMasterCssFiles' );
        $masterCssFileName      = $this->getConfigItemOrError( 'masterCssFileName' );
        $minifyOutput           = $this->getConfigItemOrError( 'minifyOutput' );

        $setPreserveComments = $this->getConfigItemOrError( 'setPreserveComments' );

        if( $minifyOutput )
        {
            $less->setFormatter( "compressed" );
        }
        $less->setPreserveComments( $setPreserveComments );

        foreach( $lessFiles as $lessFile => $cssFile )
        {
            // If css file is older than the less file compile.
            $less->checkedCompile( $this->cssPath . $lessFile, $this->cssPath . $cssFile );
        }
    }

    /**
     * Returns the configuration item or errors if it doesn't exist.
     * @param $item
     * @return mixed
     * @throws Exception
     */
    protected function getConfigItemOrError( $item )
    {
        if( $configItem = $this->getConfigItem( $item ) )
        {
            return $configItem;
        }
        else
        {
            throw new Exception('Configuration Error.');
        }
    }

    /**
     * Returns the configuration item.
     * @param $item
     * @return mixed
     */
    protected function getConfigItem( $item )
    {
        return $this->config[ $item ];
    }

    protected function setCssPath()
    {
        $this->cssPath = $this->getConfigItemOrError( 'pathToCssDirectory' );
    }

    /**
     * Sets the config array to the class variable.
     * @param array $config
     */
    protected function setConfig( $config )
    {
        if( is_array( $config ) )
        {
            $this->config = $config;
        }
    }

}