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
            $input_phrase_words = explode(" ", $input_phrase); // Turns inputed phrase into array of seperate strings

            foreach ($input_phrase_words as $word_matches) {
                $word_matches = trim($word_matches, "-@,.?!\"$#%/\^&*():;{}[]"); // Removes any characters from each string before testing

                if (strtoupper($input_word) === strtoupper($word_matches)) { // If word matches a word in the phrase, add one to the counter
                    $matches += 1;
                }
            }

            return $matches;
        }
    }
?>
