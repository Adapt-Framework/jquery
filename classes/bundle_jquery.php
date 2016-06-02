<?php

namespace jquery{
    
    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class bundle_jquery extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('jquery', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                
                $this->dom->head->add(new html_script(array('type' => 'text/javascript', 'src' => "/adapt/jquery/jquery-{$this->version}/static/js/jquery.min.js")));
                return true;
            }
            
            return false;
        }
        
    }
    
    
}

?>