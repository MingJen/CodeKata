<?php

class FizzBuzz
{
    public function parseFizzBuzz($number)
    {
    	if($number % (3*5)==0){
            return 'FizzBuzz';
        }elseif($number%3==0){
    		return 'Fizz';
    	}elseif($number % 5 == 0){
            return 'Buzz';
        }else{
    		return $number;
    	}
    }

}
