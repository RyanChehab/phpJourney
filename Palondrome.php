<?php

if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $word = $_POST['word'];

    function checker($word){
        $processed = '';

        for ($i = 0;isset($word[$i]); $i++){
            $char = $word[$i];
            // lowercase any capital letter
            if($char >= 'A' && $char <= 'Z'){
                $processed.= chr(ord($char) +32);
            }else{
                $processed.=$char;
            }
        }
        
        // calculating the length
        $length = 0;
        while(isset($processed[$length])){
            $length++;
        }

        // reversing
        $reversed = '';
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed .= $processed[$i];
        }
        
        for ($i = 0; $i<$length; $i++){
            if($processed[$i] !== $reversed[$i]){
                $response=[];
                $response['status'] = 'Failed';
                $response['message'] = 'not a palondrome';
                return false;
            }
        }
        return true;
    }
    if (checker($word)) {
        echo json_encode(["status" => "success", "message" => "It is a palindrome"]);
    } else {
        echo json_encode(["status" => "failed", "message" => "Not a palindrome"]);
    }
}