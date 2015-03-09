<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_oneWord()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGnerator;
            $input = "beowulf";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("Beowulf", $result);
        }
    }


 ?>
