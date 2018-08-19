<?php

class Prompt
{
    static function question($question = null)
    {
        echo $question;
        return rtrim(fgets(STDIN));
    }
}