<?php
 
   $e = new Event();
 if (isset($_POST['event'])) {

        $param = false;
        if (isset($_POST['param'])) {
            $param = $_POST['param'];
        }
        foreach ($_POST['context'] as $c) {

            $c = str_replace(['..', '/'], '', $c); //evita a manipulacao de diretorio

            $file = 'app/event/' . $c . '.php';
            if (file_exists($file)) {
                require_once $file; //inclui o arquivo de contexto
            }
        }
        $e->trigger($_POST['event'], $param); //aciona o evento solicitado
    }
