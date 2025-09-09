<?php
declare(strict_types=1);

function render_template(string $template, array $data): string {

    extract($data);
    ob_start();
    require $template;
    return ob_get_clean();
}

function get_data() {
    $result = file_get_contents(API_URL);
    $data = json_decode($result, true); //decodificamos el JSON a un array asociativo
    return $data;
}


function get_until_message(int $days): string 
{
    //match expression
    return match(true) {
        $days > 30 => "Falta más de un mes para el estreno.",
        $days > 14 => "Falta menos de un mes para el estreno.",
        $days > 7 => "Falta menos de dos semanas para el estreno.",
        $days > 1 => "Falta menos de una semana para el estreno.",
        $days === 1 => "Falta un día para el estreno.",
        $days === 0 => "¡Estreno hoy!",
        $days < 0 => "¡La película ya se estrenó!",
        default => "Error desconocido."
    };
}

?>