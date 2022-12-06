<?php

class CtrlTemplate
{// Llamada a la plantilla
    public function ctrGetTemplate()
    {
        #include() Se utiliza para invocar el archivo que contiene código html-php.
        include "view/template.php";
    }
}