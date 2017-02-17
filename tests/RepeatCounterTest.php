<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_getCount_letter()
        {
            // Arrange
            $test_getCountLetter = new RepeatCounter;
            $input_word = "hey";
            $input_phrase = "hey hey hey hey";

            // Act
            $result = $test_getCountLetter->CountRepeats($input_word, $input_phrase);

            // Assert
            $this->assertEquals(4, $result);
        }
    }
?>
