<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_getCount_letter()
        {
            // Arrange
            $test_getCountLetter = new RepeatCounter;
            $input_word_test = "hey";
            $input_phrase_test = "hey hey hey";

            // Act
            $result = $test_getCountLetter->CountRepeats($input_word_test, $input_phrase_test);

            // Assert
            $this->assertEquals(3, $result);
        }
    }
?>
