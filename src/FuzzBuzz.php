<?php

class FuzzBuzz
{
    public function parseFuzzBuzz($number)
    {
    	if($number%3==0){
    		return 'Fuzz';
    	}else{
    		return $number;
    	}
    }
        
}
