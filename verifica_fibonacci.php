<?php
    function pertence_fibonacci($numero) {
        $primeiro_fibonacci = 0;
        $ultimo_fibonacci   = 1;

        if ($numero === $primeiro_fibonacci || $numero === $ultimo_fibonacci) {
            return true;
        }

        while ($ultimo_fibonacci < $numero) {
            $proximo_fibonacci  = $ultimo_fibonacci;
            $ultimo_fibonacci   = $primeiro_fibonacci + $ultimo_fibonacci;
            $primeiro_fibonacci = $proximo_fibonacci;
        }

        return $ultimo_fibonacci === $numero;
    }
    