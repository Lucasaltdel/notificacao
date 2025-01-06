<?php

class Sms extends Notificacao {

    public function enviar() {
        echo "Enviando SMS para {$this->getDestinatario()} com a mensagem: '{$this->getMensagem()}'";
        echo "<br>";
    }
}
?>
