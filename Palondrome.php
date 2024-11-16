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
        // calculating the length
        $length = 0;
        while(isset($processed[$length])){
            $length++;
        }
        // reversing the word
        $reversed="";
        for ($i = 0; $i<$length; $i++){
            if($processed[$i] !== $reversed[$i]){
                $response=[];
                $response['status'] = 'Failed';
                $response['massege'] = 'not a palondrome';
                echo json_encode($response);
            }
        }

    }
}