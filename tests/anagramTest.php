<?php
    require_once "src/anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_singleWord()
        {
          $test_anagram = new Anagram;
          $input1 = "beard";
          $input2 = "debra";
          $result = $test_anagram->singleWord($input1, $input2);
          $this->assertEquals(true, $result);
        }

        function test_multiWord()
        {
          $test_anagram = new Anagram;
          $input1 = "dad";
          $input2 = ["add", "dda", "bob", "chicken"];
          $result = $test_anagram->multiWord($input1, $input2);
          $this->assertEquals(["add", "dda"], $result);
        }

        function test_nestedWord()
        {
          $test_anagram = new Anagram;
          $input1 = "dad";
          $input2 = "badder";
          $result = $test_anagram->nestedWord($input1, $input2);
          $this->assertEquals(true, $result);
        }

        function test_multiWordWithNest()
        {
          $test_anagram = new Anagram;
          $input1 = "dad";
          $input2 = ["add", "dda", "bob", "chicken", "badder"];
          $result = $test_anagram->multiWord($input1, $input2);
          $this->assertEquals(["add", "dda", "badder"], $result);
        }


        // function test_notAnagram()
        // {
        //   $test_Anagram = new Anagram("add","bad");
        //   // $result = $test_Anagram->checkMany();
        //   $this->assertEquals([""], $result);
        // }
        // function test_isAnagram()
        // {
        //   $test_Anagram = new Anagram("add","dad");
        //   // $result = $test_Anagram->checkMany();
        //   $this->assertEquals(["dad"], [$result]);
        // }
      }

 ?>
