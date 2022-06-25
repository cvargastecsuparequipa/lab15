<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //
    public function api($celular)
    {
        $data = [
            "app" => [
                "id" => "51961498695",
                "time" => "1656088139",
                "data" => [
                    "recipient" => [
                        "id" => "51".$celular,
                    ],
                    "message" => [
                        [
                            "time" => "1656088139",
                            "type" => "text",
                            "value" => "Hola que tal"
                        ]
                    ]
                ]
            ]
        ];
        $response = Http::post('https://whapi.io/api/send', $data)->json();
        return $response;
    }
    public function api2($celular)
    {
        $mensaje = "esto es una prueba desde laravel hacia el api de pytthon";
        $url ="http://127.0.0.1:3000/enviarmensajeAPI?celular=".$celular."&mensaje=".$mensaje;
        $response = Http::post($url);
        return $response;
    }
}
