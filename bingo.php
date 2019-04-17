<?php

namespace MyApp;

class Bingo{
    public function create(){
        $nums = [];

        // for ( $i = 0 ; $i < 6 ; $i ++ ){
        //     // $col = range(1,44);
        //     // shuffle($col);
        //     // $nums[i] = shuffle($col);
        //     // $nums[$i] = array_slice($col, 0 , 6);

            
        // }
        for ($j = 0 ; $j < 6 ; $j++){
            $nums[$j] = mt_rand(1, 44);
        }
        shuffle($nums);
        for ( $j = 0 ; $j < 6 ; $j ++ ){
            for ( $i = $j + 1 ; $i < 6 ; $i ++ ){
                if ($nums[$i] < $nums[$j]){
                    $hoge = $nums[$i];
                    $nums[$i] = $nums[$j];
                    $nums[$j] = $hoge;
                }
            }
        }
        return $nums;
    }
}