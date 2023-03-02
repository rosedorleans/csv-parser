<?php

namespace File2;

use Upload\Upload;
require "Upload.php";

class File2 {

    public $file;

    public function __construct(array $file) {
        $this->file = $file;

        fopen($this->file['tmp_name'], "r");

        $this->toJson();

        fclose($this->file);
    }

    public function toJson() {
        var_dump($this->file);

        $csv_headers = fgetcsv($this->file, 4000, ',');
        $array = array();

        if($this->file['type'] == "text/csv"){
            while ($row = fgetcsv($this->file, 4000, ',')){
                $array[] = array_combine($csv_headers, $row);
            }
        } else if ($this->file['type'] == "text/xml"){

            // $array = simplexml_load_string();
        }

        $json = json_encode($array);

        new Upload($json);
    }
}