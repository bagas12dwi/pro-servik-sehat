<?php

namespace App\Helpers;

class UrlHelper
{
    public static function getUrl()
    {
        // return 'http://simora.tugas-akhir-mi.my.id/public';
        return 'https://pro-servik-sehat.test/public';
    }

    public static function sendWA($phone, $message)
    {
        $encodedMessage = urlencode($message);

        return "https://wa.me/{$phone}?text={$encodedMessage}";
    }
}
