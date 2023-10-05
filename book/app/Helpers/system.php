<?php 
    function uploadFile($name_folder,$file){
        $file_name = time().''.$file->getClientOriginalName();
        return $file->storeAS($name_folder,$file_name,'public');
    }