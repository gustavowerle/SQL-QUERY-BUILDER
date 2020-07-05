<?php

require __DIR__.'/../bootstrap.php';

$users = (new App\Model\Users)->getAll();
$banks = (new App\Model\Bank)->getAll();

echo '<h4>Lista de Usuários</h4>';
echo '<ul>';
foreach($users as $user) {
    echo '<li>' . $user['nome'] . '</li>';
}
echo '</ul>';

echo '<h4>Lista de Bancos</h4>';
echo '<ul>';
foreach($banks as $bank) {
    echo '<li>' . $bank['nome'] . '</li>';
}
echo '</ul>';
