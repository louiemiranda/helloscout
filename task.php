<?php
/**
 * Please write a production-ready PHP function that determines if a string starts with an upper-case letter A-Z✱
 * 
 * @created February 27, 2019
 * @author  Louie Miranda (lmiranda@gmail.com)
 */

 // Input from "Bahay Kubo (Folk Song)"
 $variables = [
    'BAHAY kubo, kahit munti',
    'Ang halaman doon ay sari-sari.',
    'SINGKAMAS at talong, sigarilyas at mani',
    'Sitaw, bataw, patani.',
    'Kundol, patola, upo’t kalabasa',
    'At saka mayroon pang labanos, mustasa,',
    'SIBUYAS, kamatis, bawang at luya',
    'sa paligid-ligid ay puro linga.'
 ];

 // Loader
 $toolkit = new ToolKit;

 // Execute
 $run = $toolkit->caseCheck($variables);

 // Library
 class ToolKit
 {
     
    /**
     * Method to run case check and run validations
     * 
     * @method caseCheck
     * @return string
     */
     public function caseCheck($data = [])
     {
        if (!is_array($data))
            die("Data you submitted is not using the correct type. Please check and try again.");

        if (empty($data))
            die("You have submitted an empty data, please check your submission and try again.");

        echo "Q: Please write a production-ready PHP function that determines if a string starts with an upper-case letter A-Z✱".PHP_EOL;

        return $this->runData($data);
     }

     /**
      * Method used to run data or loop it over
      *
      * @method runData
      */
     private function runData($data = [])
     {
        foreach ($data as $key => $value) {

            $upCase = $this->isUpper($value);

            echo "Id: {$key} with String: '{$value}' with first letter upper-case result of : {$upCase}".PHP_EOL;
        }
     }

     /**
      * Method to handle first upper-case letter search
      * - Using word count, explode and ctype_upper
      * - Has notes on determining first letter upper-case as well
      *
      * @method isUpper
      * @return string
      */
     private function isUpper($string = false)
     {
        $countWords = str_word_count($string);

        if ($countWords > 1) {
            $words = explode(" ", $string);

            // Use if you wanted to check first letter to be upper-case
            // $first = str_split($words[0]);
        }
        else {
            die("Some data inconsistencies has been detected. Please check your data entry and try again.");
        }

        $case = ctype_upper($words[0]); // or strtolower != strtolower
        return ($case == true) ? 'true' : 'false';
     }
     
 }
 