<?php

namespace jquery{
    
    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class bundle_jquery extends \adapt\bundle{
        
        public function __construct(){
            print "Contructing jquery";
            parent::__construct('jquery');
        }
        
        public function boot($boot_dependencies = true){
            if (!$this->has_booted){
                parent::boot($boot_dependencies);
                
                $this->dom->head->add(new html_script(array('type' => 'text/javascript', 'src' => "/adapt/jquery/jquery-{$this->version}/static/js/jquery.min.js")));
            }
        }
        
    }
    
    
}

?>