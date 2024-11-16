<?php

if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $word = $_POST['word'];

    function checker($word){
        $processed = '';

        for ($i = 0;isset($word[$i]); $i++){
            $char = $word[$i];
            // lowercase any capital letter
            if($char >= 'A' && $char <= 'Z'){
                $processed.= $char +32;
            }else{
                $processed.=$char;
            }
        }

        $length = 0;
        while(isset($processed.$length)){
            $length++;
        }

    }
}