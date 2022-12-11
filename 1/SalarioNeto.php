<?php

class SalarioNeto {
    private $horas_t;
    private $pago_ph;
    
    function calcularSalarioNeto($horas_t, $pago_ph) {
        $this->horas_t = $horas_t;
        $this->pago_ph = $pago_ph;
        $salario_b = $this->horas_t * $this->pago_ph;

        $dscunto = 0.2 * $salario_b;
        $salario_n = $salario_b - $dscunto; 
        return $salario_n;
    }
}
?>