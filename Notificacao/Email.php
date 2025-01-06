<?php

class Email extends Notificacao {

    public function enviar() {
        echo "Enviando e-mail para {$this->getDestinatario()} com a mensagem: '{$this->getMensagem()}'";
        echo "<br>";
    }
}
?>
