<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_getCount_letter()
        {
            // Arrange
            $test_getCountLetter = new RepeatCounter;
            $input = "b";

            // Act
            $result = $test_getCountLetter->CountRepeats($input);

            // Assert
            $this->assertEquals(4, $result);
        }
    }
?>
