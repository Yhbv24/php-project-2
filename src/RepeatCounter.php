<?php
    class RepeatCounter
    {
        private $input_word;
        private $input_phrase;

        function setInputWord($new_input_word)
        {
            $this->input_word = $new_input_word;
        }

        function getInputWord()
        {
            return $this->input_word;
        }

        function setInputPhrase($new_input_phrase)
        {
            $this->input_phrase = $new_input_phrase;
        }

        function getInputPhrase()
        {
            return $this->input_phrase;
        }

        function CountRepeats($input_word, $input_phrase)
        {
            $input_word = str_split($input_word); // Breaks $input_word into an array of characters
            $input_phrase = str_split($input_phrase); // Breaks $input_phrase into an array of characters
            $matches = 0;

            foreach($input_phrase as $word_check) {
                foreach($input_word as $letter) {
                    if ($word_check == $letter) {
                        $matches += 1;
                    }
                }
            }

            return $matches;
        }
    }
?>
