<?php
    class TitleCaseGenerator
    {
            function makeTitleCase($input_title)
            {

                $input_lowercase = strtolower($input_title);
                $input_array_of_words = explode(" ", $input_lowercase);

                $output_titlecased = array();

                foreach ($input_array_of_words as $key => $word) {

                    if (strlen($word) > 3 || $key == 0) {
                        array_push($output_titlecased, ucfirst($word));
                    }
                    else {
                        array_push($output_titlecased, $word);
                    }

                }

                return implode(" ", $output_titlecased);
            }

            //array( '0' => "the", '1' => "little", '2' => 'mermaid');

    }

?>
