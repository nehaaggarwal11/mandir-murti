<?php

if(!function_exists('addMedia')){
    function addMedia($file,$loc){
        $img_name = $file->getClientOriginalName();
        $filename = date('his') . '-' . $img_name;
<<<<<<< HEAD
        $img_name = $file->storePubliclyAs($loc, $filename,'public');
=======
        $img_name = $file->storePubliclyAs($loc, $filename);
>>>>>>> dc19b499241ed34ff14a09b60b904232f62d2995
        return $img_name;
    }
}