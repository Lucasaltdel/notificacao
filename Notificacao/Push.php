<?php
class Push extends Notificacao {

    public function enviar() {
        echo "Enviando push notification para {$this->getDestinatario()} com a mensagem: '{$this->getMensagem()}'";
        echo "<br>";
    }
}
?>
