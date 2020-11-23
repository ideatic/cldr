<?php
declare(strict_types=1);

/**
 * Utilidad para convertir fechas en formato LDML (http://unicode.org/reports/tr35/#Date_Format_Patterns)
 * a un formato compatible con PHP
 */
class i18n_Builder_DateConverter
{

    public function convert($pattern)
    {
        $replaces = [
            "EEEE" => "l", //Día de la semana
            "EEE"  => "D", //Día abreviado de la semana
            "EE"   => "D", //Día abreviado de la semana
            "E"    => "D", //Día abreviado de la semana

            "d"    => "j", //Día del mes, sin ceros iniciales
            "dd"   => "d", //Día del mes, con ceros iniciales

            "MMMM" => "F", //Nombre completo del mes
            "MMM"  => "M", //Nombre abreviado del mes
            "MM"   => "m", //Número de mes
            "M"    => "n", //Número de mes, sin ceros iniciales

            "H"    => "G", //Hora 24h, sin relleno
            "HH"   => "H", //Hora 24h, con relleno
            "h"    => "g", //Hora 12h, sin relleno
            "hh"   => "h", //Hora 12h, con relleno

            "m"    => "i", //Minutos, sin relleno
            "mm"   => "i", //Minutos, con relleno

            "s"    => "s", //Segundos
            "ss"   => "s", //Segundos (con relleno de ceros)

            "yyyy" => "Y", //Año completo de 4 dígitos
            "yy"   => "y", //Año  con 2 dígitos
            "y"    => "Y", //Año

            "a"    => "A", //am/pm

            "z"    => "T", //Zona horaria
            "zzzz" => "T", //Zona horaria

            "G"    => "", //Era (no disponible en PHP)
        ];

        $tokens = $this->parseFormat($pattern);
        $php_pattern = [];
        foreach ($tokens as $token) {
            if (isset($replaces[$token])) {
                $php_pattern[] = $replaces[$token];
            } elseif (preg_match('/[a-zA-Z]/', $token)) { //Escapar todas las letras
                $php_pattern[] = $this->_escape_token($token);
            } else {
                $php_pattern[] = $token;
            }
        }
        return implode('', $php_pattern);
    }

    private function _escape_token($text)
    {
        $l = strlen($text);
        $result = [];
        for ($i = 0; $i < $l; $i++) {
            $result[] = '\\';
            $result[] = $text[$i];
        }
        return implode('', $result);
    }

    /**
     * Parses the datetime format pattern.
     *
     * @param string $pattern the pattern to be parsed
     *
     * @return array tokenized parsing result
     */
    protected function parseFormat($pattern)
    {
        static $formats = []; // cache
        if (isset($formats[$pattern])) {
            return $formats[$pattern];
        }
        $tokens = [];
        $n = strlen($pattern);
        $isLiteral = false;
        $literal = '';
        for ($i = 0; $i < $n; ++$i) {
            $c = $pattern[$i];
            if ($c === "'") {
                if ($i < $n - 1 && $pattern[$i + 1] === "'") {
                    $tokens[] = "'";
                    $i++;
                } else {
                    if ($isLiteral) {
                        $tokens[] = $literal;
                        $literal = '';
                        $isLiteral = false;
                    } else {
                        $isLiteral = true;
                        $literal = '';
                    }
                }
            } else {
                if ($isLiteral) {
                    $literal .= $c;
                } else {
                    for ($j = $i + 1; $j < $n; ++$j) {
                        if ($pattern[$j] !== $c) {
                            break;
                        }
                    }
                    $p = str_repeat($c, $j - $i);
                    $tokens[] = $p;
                    $i = $j - 1;
                }
            }
        }
        if ($literal !== '') {
            $tokens[] = $literal;
        }

        return $formats[$pattern] = $tokens;
    }

}