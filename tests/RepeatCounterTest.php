<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_getCount_one_word() // Test for direct word match
        {
            // Arrange
            $test_getCountLetter = new RepeatCounter;
            $input_word = "hey";
            $input_phrase = "hey hey hey";

            // Act
            $result = $test_getCountLetter->CountRepeats($input_word, $input_phrase);

            // Assert
            $this->assertEquals(3, $result);
        }

        function test_getCount_cap_words() // Test to make sure capitalization does not affect matches
        {
            // Arrange
            $test_getCountLetter = new RepeatCounter;
            $input_word = "hey";
            $input_phrase = "hEy HeY HEy hey HEY";

            // Act
            $result = $test_getCountLetter->CountRepeats($input_word, $input_phrase);

            // Assert
            $this->assertEquals(5, $result);
        }

        function test_getCount_punctuation() // Test to make sure punctuation does not affect matches
        {
            // Arrange
            $test_getCountLetter = new RepeatCounter;
            $input_word = "hey";
            $input_phrase = "hEy. HeY! HEy? hey./ &HEY HEY!";

            // Act
            $result = $test_getCountLetter->CountRepeats($input_word, $input_phrase);

            // Assert
            $this->assertEquals(6, $result);
        }
    }
?>
