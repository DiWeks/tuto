<?php


namespace tutoAPI\Controllers;


class abstractController
{

    public static function jsonResponse($content, $code = 200)
    {
        http_response_code($code);

        header('Content-Type: application/json');

        $data = json_encode($content);

        // var_dump($data); die();

        echo $data;
    }

}