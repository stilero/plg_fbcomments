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

class FBLikes extends FbSocialPlugin{
    
    protected $send;
    protected $showFaces;
    protected $layout;
    protected $font;
    protected $verb;
    public static $layoutBtnCount = 'button_count';
    public static $layoutBoxCount = 'box_count';
    public static $fontArial = 'arial';
    public static $fontLucidaGrande = 'lucida grande';
    public static $fontSegoeUi = 'segoe ui';
    public static $fontTahoma = 'tahoma';
    public static $fontTrebuchetMs = 'trebuchet ms';
    public static $fontVerdana = 'verdana';
    public static $verbLike = 'like';
    public static $verbRecommend = 'recommend';

    public function __construct($url, $width = '470', $showFaces = 'false', $font = 'arial') {
        parent::__construct($url, $width);
        $this->showFaces = $showFaces;
        $this->font = $font;
        $this->send = 'false';
    }
    
    private function layout(){
        $layout = '';
        if($this->layout != ''){
            $layout = ' data-layout="'.$this->layout.'"';
        }
        return $layout;
    }
    
    private function colorScheme(){
        $colorScheme = '';
        if($this->colorScheme != ''){
            $colorScheme = ' data-colorscheme="'.$this->colorScheme.'"';
        }
        return $colorScheme;
    }

    private function verb(){
        $verb = '';
        if($this->verb != ''){
            $verb = ' data-action="'.$this->verb.'"';
        }
        return $verb;
    }

    public function getHTML(){
        $html = '<div class="fb-like"'.
                ' data-href="'.$this->url.'"'.
                ' data-send="'.$this->send.'"'.
                $this->layout().
                ' data-width="'.$this->width.'"'.
                ' data-show-faces="'.$this->showFaces.'"'.
                ' data-font="'.$this->font.'"'.
                $this->colorScheme().
                $this->verb().
                '>'.
            '</div>';
        return $html;
    }
    
    public function setLayout($layout){
        $this->layout = $layout;
    }
    
    public function setVerb($verb){
        $this->verb = $verb;
    }
}
