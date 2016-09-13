<?php
  class Anagram
  {
    private $word;
    private $words;

    function __construct($word, $words)
    {
      $this->word = $word;
      $this->words = $words;
    }

    function isAnagram($index)
    {
      $wordArray = str_split(strtolower($this->word));
      $wordsArray = str_split(strtolower($this->words[$index]));
      sort($wordArray);
      sort($wordsArray);
      if ($wordArray == $wordsArray){
        return true;
      }
      else {
      return false;
    }
    }

    function checkMany()
    {
      $outputArray = [];
      $arrayOfWords = explode(" ",$this->words);
      for ($i = count($arrayOfWords);$i >= 0; $i--){
        if (!$this->isAnagram($i)){
          array_push($outputArray, $arrayOfWords[$i]);
        }
      }
      $arrayOfWords = implode($arrayOfWords);
      return $outputArray;
    }

  }
 ?>
