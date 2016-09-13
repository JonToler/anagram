<?php
    require_once "src/anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_notAnagram()
        {
          $test_Anagram = new Anagram("add","bad");
          $result = $test_Anagram->checkMany();
          $this->assertEquals("", $result);
        }
        function test_isAnagram()
        {
          $test_Anagram = new Anagram("add","dad");
          $result = $test_Anagram->checkMany();
          $this->assertEquals("dad", $result);
        }
        function test_caseInsensitive()
        {
          $test_Anagram = new Anagram("add","DAD");
          $result = $test_Anagram->checkMany();
          $this->assertEquals("dad", $result);
        }
        function test_manyWords()
        {
          $test_Anagram = new Anagram("tool","loot loto");
          $result = $test_Anagram->checkMany();
          $this->assertEquals("loot loto", $result);
        }
    }
 ?>
