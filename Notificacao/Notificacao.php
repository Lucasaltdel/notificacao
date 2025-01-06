<?php

class Notificacao {

    private $destinatario;
    private $mensagem;

    public function __construct($destinatario, $mensagem) {
        $this->setDestinatario($destinatario);
        $this->setMensagem($mensagem);
    }

    public function getDestinatario() {
        return $this->destinatario;
    }
    public function setDestinatario($destinatario) {
        $this->destinatario= $destinatario;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    public function enviar() {
        echo "Enviando notificação para {$this->getDestinatario()} com a mensagem: '{$this->getMensagem()}'";
    }
}
?>
