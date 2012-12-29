<?php
/**
 * FB Send Class
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

class FBSend extends FBLikes{
    
    public function __construct($url, $width = '470', $font = 'arial') {
        parent::__construct($url, $width, FALSE, $font);
    }
    
    public function getHTML(){
        $html = '<div class="fb-send"'.
                ' data-href="'.$this->url.'"'.
                ' data-font="'.$this->font.'"'.
                '>'.
            '</div>';
        return $html;
    }
}