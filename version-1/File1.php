<?php

namespace File1;

class File1 {

    function parse() {

        if (isset($_POST['submit'])) {
            $file = fopen($_FILES['filename']['tmp_name'], "r");

            $csv_headers = fgetcsv($file, 4000, ',');
            $csv_json = array();
        
            while ($row = fgetcsv($file, 4000, ',')){
                $csv_json[] = array_combine($csv_headers, $row);
            }
        
            fclose($file);
            $json = json_encode($csv_json);

            file_put_contents("uploads/".date("Ymdhi").".json", $json);
        }
    }
}