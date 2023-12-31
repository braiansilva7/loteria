<?php

namespace src\controllers;

class JogosSorteados{
    public static function lotofacil()
    {
        $numerosSorteados = [];

        for($i = 0; $i < 15; $i++){
            $numeroAleatorio = rand(1, 25);

            while(in_array($numeroAleatorio, $numerosSorteados)){
                $numeroAleatorio = rand(1, 25);
            }

            $numerosSorteados[$i] = $numeroAleatorio;
        }

        sort($numerosSorteados);

        return $numerosSorteados;
    }

    public static function megaSena()
    {
        $numerosSorteados = [];

        for($i = 0; $i < 6; $i++){
            $numeroAleatorio = rand(1, 60);

            while(in_array($numeroAleatorio, $numerosSorteados)){
                $numeroAleatorio = rand(1, 60);
            }

            $numerosSorteados[$i] = $numeroAleatorio;
        }

        sort($numerosSorteados);

        return $numerosSorteados;
    }

    public static function quina()
    {
        $numerosSorteados = [];

        for($i = 0; $i < 5; $i++){
            $numeroAleatorio = rand(1, 80);

            while(in_array($numeroAleatorio, $numerosSorteados)){
                $numeroAleatorio = rand(1, 80);
            }

            $numerosSorteados[$i] = $numeroAleatorio;
        }

        sort($numerosSorteados);

        return $numerosSorteados;
    }

    public static function lotomania()
    {
        $numerosSorteados = [];

        for($i = 0; $i < 50; $i++){
            $numeroAleatorio = rand(1, 100);

            while(in_array($numeroAleatorio, $numerosSorteados)){
                $numeroAleatorio = rand(1, 100);
            }

            $numerosSorteados[$i] = $numeroAleatorio;
        }

        sort($numerosSorteados);

        return $numerosSorteados;
    }
}