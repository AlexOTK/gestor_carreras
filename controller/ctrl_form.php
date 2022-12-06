<?php

class CtrlForm
{
    public static function ctrRegistro()
    {
        if (isset($_POST["nombre"])) {
            return 'ok';
        }
    }
}