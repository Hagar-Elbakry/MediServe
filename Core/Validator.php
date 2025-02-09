<?php

namespace Core;
class Validator
{

    public static function isEmpty($value) {
        return empty($value);
    }

    public static function email($value) {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}