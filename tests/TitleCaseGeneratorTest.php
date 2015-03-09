<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        //Spec: Take a single word and capitalize the first letter
        function test_makeTitleCase_oneWord()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("Beowulf", $result);
        }

        //Spec: Take multiple words and capitalize the first letter of each word
        function test_makeTitleCase_multipleWords()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Little Mermaid", $result);

        }

        //Spec: Only the first letter of each word should be capitalized.
        function test_makeTitleCase_lowerCase()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "QuEEN vIcToria";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("Queen Victoria", $result);
        }

        //Spec: The first letter of each word should be capitalized, unless that
        //word is a small word
        function test_makeTitleCase_ignoreArticle()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "once upon a time";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("Once Upon a Time", $result);
        }

        //Spec: the first letter of the string has to be capitalized
        function test_makeTitleCase_capitalizeFirstWord()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("The Little Mermaid", $result);
        }

        //Spec: Only some small words shouldn’t be capitalized
        function test_makeTitleCase_capitalizeSmall()
        {
            //arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "golden ore";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("Golden Ore", $result);
        }
    }


 ?>
