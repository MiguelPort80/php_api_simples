<?php

class Response {
    public static function json($status=200,$message='success',$data=null){
        //Esse header informa que haverá um retorno de um json
        header('Content-type: application/json');
        if (!API_IS_ACTIVE) {
        return json_encode([
            'status' => '400',
            'messsage' => 'API is not running',
            'api_version' => API_VERSION,
            'time' => time(),
            'datetime' => date('Y-m-d H:i:s'),
            'data' => null
        ], JSON_PRETTY_PRINT);
        }
        return json_encode([
            'status' => $status,
            'messsage' => $message,
            'api_version' => API_VERSION,
            'time' => time(),
            'datetime' => date('Y-m-d H:i:s'),
            'data' => $data
        ], JSON_PRETTY_PRINT);
    }
}