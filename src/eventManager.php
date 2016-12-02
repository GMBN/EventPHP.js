<?php
 
   $e = new Event();
    if (isset($_POST['event'])) {

        $param = false;
        if (isset($_POST['param'])) {
            $param = $_POST['param'];
        }
        if (isset($_POST['param'])) {
            foreach ($_POST['context'] as $c) {
                $file = 'app/event/' . $c . '.php';
                if (file_exists($file)) {
                    require $file;//inclui o arquivo de contexto
                }
            }
        }
        $e->trigger($_POST['event'], $param);//aciona o evento solicitado
    }
}
