<?php
/**
 * XHTML renderer which produces lists without div\'s in.
 *
 * @author Martyn Eggleton for Access Space <martyn@access-space.org>
 */

if(!defined('DOKU_INC')) die();
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');

require_once DOKU_INC . 'inc/parser/xhtml.php';

/**
 * The Renderer
 */
class renderer_plugin_plainlists extends Doku_Renderer_xhtml {

    function getInfo(){
      return array(
        'author' => 'Martyn Eggleton',
        'email'  => 'martyn.eggleton@gmail.com',
        'date'   => '2008-11-20',
        'name'   => 'Plain List Renderer',
        'desc'   => 'XHTML renderer which produces lists without div\'s in.',
        'url'    => 'http://www.dokuwiki.org/plugin:plainlists',
      );
    }

    function canRender($format) {
      return ($format=='xhtml');
    }

    function listcontent_open() {
       
    }

    function listcontent_close() {
	$this->doc .= DOKU_LF;
    }
    
    function reset() {
       $this->doc = '';
       $this->footnotes = array();
       $this->lastsec = 0;
       $this->store = '';
       $this->_counter = array();
    }
}

