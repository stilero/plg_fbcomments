<?php
/**
 * Plugin_FB_Commments
 *
 * @version  1.0
 * @package Stilero
 * @subpackage Plugin_FB_Commments
 * @author Daniel Eliasson - joomla at stilero.com
 * @copyright  (C) 2012-dec-29 Stilero Webdesign http://www.stilero.com
 * @license	GNU General Public License version 2 or later.
 * @link http://www.stilero.com
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

class FbSocialPlugin{
    
    protected $url;
    protected $width;
    protected $colorScheme;
    protected $FbAppID;
    public static $colorLight = 'light';
    public static $colorDark = 'dark';
    
    public function __construct($url, $width='470') {
        $this->url = $url;
        $this->width = $width;
    }
    
    public function setColorScheme($colorScheme){
        $this->colorScheme = $colorScheme;
    }

    public function setFBAppID($fbAppId){
        $this->FbAppID = $fbAppId;
    }

    public function insertFBAppID($fbAppId=''){
        if($fbAppId !== ''){
            $this->FbAppID = $fbAppId;
        }
        $document = JFactory::getDocument();
        $doctype = $document->getType();
        if ( $doctype !== 'html') {
            return;
        }
        $meta = '<meta property="fb:app_id" content="'.$this->FbAppID.'" />';
        $document->addCustomTag($meta);
    }
}
