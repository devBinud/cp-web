<?php


namespace App\Utils;


class RegexUtil
{

    public static function isPersonName(string $string) {
        return preg_match_all('/^[a-zA-Z\s]{1,150}$/', $string);
    }

    public static function isTitle(string $string) {
        return preg_match_all('/^[0-9a-zA-Z\s,]{1,150}$/', $string);
    }

    public static function isPhoneNumber(string $string) {
        return preg_match_all('/^(\+)?([0-9]){10,12}$/', $string);
    }

    // public static function isEmail(string $string) {
    //     return preg_match_all('/^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/', $string);
    // }

    public static function isEmail(string $string) {
        return preg_match_all('/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/', $string);
    }

    public static function isNumeric(string $string) {
        return preg_match_all('/^[0-9]+$/', $string);
    }

    public static function isDecimalNumeric(string $string) {
        return preg_match_all('/([0-9]+)((\.?)([0-9]{1,2}))?/', $string);
    }

    public static function isAlphaNumeric(string $string) {
        return preg_match_all('/^[0-9a-zA-Z]{5,30}$/', $string);
    }

    public static function isNumBetween(int $num, int $min, int $max) {
        return $num > $min && $num < $max;
    }

    public static function isNumBetweenOrEqual(int $num, int $min, int $max) {
        return $num >= $min && $num <= $max;
    }

    public static function isLengthBetween(string $string, int $min, int $max) {
        return strlen($string) >= $min && strlen($string) <= $max;
    }

    public static function isMinLength(string $string, int $min) {
        return strlen($string) >= $min;
    }

    public static function isMaxLength($string, int $max) {
        return $max >= strlen($string);
    }

    public static function isDateYMD(string $date) {
        return preg_match_all('/^(((19|20)[0-9]{1,2})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]))$/', $date);
    }

    public static function hasScript($string) {
        return preg_match_all('/(<script>)+/', $string);
    }

    public static function isValidBarcode($barcode) {
        return preg_match_all('/^[0-9]{4}-[0-9]{4,}[a-zA-Z][0-9]{4}$/', $barcode);
    }

    public static function isThereAnyAlphabet(string $string) {
        return preg_match_all('/^.*[a-zA-Z]+.*$/', $string);
    }

    public static function isBagCodeValid(string $code) {
        return preg_match_all('/^[a-zA-Z0-9]{3,4}$/', $code);
    }

    public static function isValidDate(string $yyyy_mm_dd) {
        return preg_match_all('/^\d{4}(\-)(((0)[1-9])|((1)[0-2]))(\-)([0-2][0-9]|(3)[0-1])$/', $yyyy_mm_dd);
    }

    public static function isValidUrl($string) {
        return preg_match_all('/^((https?\:\/\/)(www\.)?([^\.\s]+)(\.[a-z0-9]+)(\?[^\.\?\s]+)?)$/', $string);
    }

    public static function isValidLatitude(string $string) {
        return preg_match_all("/^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}$/", $string);
    }

    public static function isValidLongitude(string $string) {
        return preg_match_all("/^-?([1]?[1-7][1-9]|[1]?[1-8][0]|[1-9]?[0-9])\.{1}\d{1,6}$/",$string);
    }
    public static function isAlphaOnly(string $string)
      {
          return preg_match_all('/^[a-zA-Z]{1,150}$/', $string);
      }
}
