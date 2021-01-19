<?php

namespace PantheraStudio\PasswordGenerator;

class PasswordGenerator {
    public static function generate (int $limit = 16) : String {
        $charsList = str_split("ABCDEFGHIJKLMOPQRSTUVWXYZabcdefghijklmopqrstuvwxyz0123456789");
        $result = "";

        for ($i = 1; $i < $limit; $i++) {
            $result .= $charsList[rand(0, intval(sizeof($charsList)))];
        }

        return $result;
    }
}