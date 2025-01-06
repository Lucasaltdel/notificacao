<?php
include('Notificacao.php');
include('Email.php');
include('Sms.php');
include('Push.php');


$n1 = new Email("xaolinmatadordeporco@gmail.com", "ce ta devendo dinheiroo");
$n2 = new Sms("149912345678", "pague o que me deve caloreiro");
$n3 = new Push("Lusca", "ce tem até 12/12/2004");

$notificacoes = [$n1, $n2, $n3];

foreach ($notificacoes as $notificacao) {
    $notificacao->enviar();
}
?>
