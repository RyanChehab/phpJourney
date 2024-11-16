<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $array = $_POST['array'];

    if(!is_array($array)){
        echo json_encode([
            'status' => 'error',
            'message' => "invalid input!"
        ]);
        exit;
    }
    function merge_sort($array){
        // base case
        if(count($array) <=1){
            return $array;
        }

        // dividing the array
        $mid = intdiv(count($array),2);
        $left = array_slice($array,0,$mid);
        $right = array_slice($array,$mid);

        // sorting both halves
        $sortedLeft = merge_sort($left);
        $sortedRight = merge_sort($right);

        return merge($sortedLeft,$sortedRight);
    }

    function merge($left,$right){
        $result= [];
        $i = 0;
        $j=0;
        // comparing the number in left array to that of the right array
        while($i <count($left) && $j < count($right)){
            if($left[$i] <= $right[$j]){
                $result[] = $left[$i];
                $i++;
            }else{
                $result[]= $right[$i];
                $j++;
            }
        }

        while($i <count($left)){
        $result[] = $left[$i];
        $i++;
        }

        while($j <count($right)){
            $result[] = $right[$j];
           $j++;
        }
        return $result;
    }

    $sortedArray = merge_sort($array);

    echo json_encode([
        'status' => 'success',
        'sortedArray' => $sortedArray
    ]);
}