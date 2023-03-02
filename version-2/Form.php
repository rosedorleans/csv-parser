<?php

namespace Form;

use File2\File2;
require "File2.php";

class Form {
    public $form;

    public function handlePostRequest(array $form, array $file=null){
        $this->form = $form;

        if ($file) {
            new File2($file);
        }
        
    }
}