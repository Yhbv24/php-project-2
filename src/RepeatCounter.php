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
            $matches = 0;
            $input_phrase_words = explode(" ", $input_phrase);

            foreach ($input_phrase_words as $word_matches) {
                if ($input_word === $word_matches) {
                    $matches +=1 ;
                }
            }

            return $matches;
        }
    }
?>
