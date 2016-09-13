<?php
  class Anagram
  {

    function singleWord($input1, $input2)
    {
        $inputArray1 = str_split($input1);
        $inputArray2 = str_split($input2);
        sort($inputArray1);
        sort($inputArray2);
        if ($inputArray1 == $inputArray2) {
          return true;
        } else {
          return false;
        }
    }

    function nestedWord($input1, $input2)
    {
      $inputArray1 = str_split($input1);
      $inputArray2 = str_split($input2);
      sort($inputArray1);
      sort($inputArray2);
      $result = array_intersect($inputArray1, $inputArray2);
      if ($result == $inputArray1) {
        return true;
      } else {
        return false;
      }

    }

    function multiWord($input1, $input2)
    {
        $return_array = array();
        foreach ($input2 as $word) {
          if ($this->singleWord($input1, $word)) {
            array_push($return_array, $word);
          } elseif ($this->nestedWord($input1, $word)) {
            array_push($return_array, $word);
          }
        }
        return $return_array;
    }

  }
?>
