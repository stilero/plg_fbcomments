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

class FBComments extends FbSocialPlugin{
    
    protected $numPosts;

    public function __construct($url, $width = '470', $numPosts='5', $colorScheme='light') {
        parent::__construct($url, $width);
        $this->numPosts = $numPosts;
        $this->colorScheme = $colorScheme;
    }
    
    public function getHTML($url=''){
        if($url !== ''){
            $this->url = $url;
        }
        $html = '<div class="fb-comments"'.
                    ' data-href="'.$this->url.'"'.
                    ' data-width="'.$this->width.'"'.
                    ' data-num-posts="'.$this->numPosts.'"'.
                    ' data-colorscheme="'.$this->colorScheme.'">'.
                '</div>';
        return $html;
    }    
}