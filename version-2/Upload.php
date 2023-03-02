<?php

namespace Upload;

class Upload {
    public $upload;

    public function __construct(string $upload){
        $this->upload = $upload;

        if($upload){
            $uploadName = date("Ymdhi").".json";
            
            file_put_contents("uploads/".$uploadName, $upload);

            echo '<p>Felicitations ! Le fichier "'.$uploadName.'" à bien été enregistré dans le dossier Uploads.</p>';
        }
    }
}