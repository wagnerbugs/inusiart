<?php

namespace App\Helpers;

use Carbon\Carbon;

class Generic
{
    public static function formatDateForHumans($value)
    {
        // Utiliza a classe do Carbon para converter ao formato de data para humanos
        return Carbon::parse($value)->diffForHumans();
    }

    public static function brDate($value)
    {
        // Utiliza a classe do PHP para converter ao formato de data brasileiro
        return date_format($value, 'd/m/Y');
    }

    public static function numberBrl($value)
    {
        // Formata números para Real Brasil
        return number_format($value, '2', ',', '.');
    }

    public static function numberEng($value)
    {
        // Formata números padrão inglês
        return number_format($value, '0', '.', '.');
    }

    public static function imageDetails($value)
    {
        // Pegar os detalhes da imagem (width[0], height[1], tipo[2], )
        return getimagesize($value);
    }

    public static function textClean($value)
    {
        //Limpa as aspas
        $value = str_replace('"', '', $value);

        //Limpa tags html do texto
        return strip_tags($value);
    }
}
