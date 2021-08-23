<?php

//pangram also called holoalphabetic sentense is a sentence using every letter given alphabet at once.
// this function will be able to distinguish if the phrase or sentence you input is a pangram or not. 


function detect_pangram($string) { 
  #your code here
    $input = strtolower(trim($string));
    $characters = str_split("thequickbrownfoxjumpsoverthelazydog");
  
    foreach($characters as $character){
        if(!strstr($input, $character))
          return false;
    }
        return true;
  }