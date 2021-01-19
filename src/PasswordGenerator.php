<?php

namespace PantheraStudio\PasswordGenerator;

class PasswordGenerator {
    public static function generate(int $limit = 16) : String {
        $charsList = str_split("ABCDEFGHIJKLMOPQRSTUVWXYZabcdefghijklmopqrstuvwxyz0123456789");
        $result = "";

        $limit = $limit + 1;

        for ($i = 1; $i < $limit; $i++) {
            $result .= $charsList[rand(0, 59)];
        }

        return $result;
    }
}