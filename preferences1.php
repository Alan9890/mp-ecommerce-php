<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('PP_USR-8299436681826487-073017-9384acc9459b0c1404d77d6360b7342e-293829152');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'GALAXY S9';
$item->quantity = 10;
$item->unit_price = 15;
$preference->items = array($item);
$item = new MercadoPago\Item();
$item->title = 'LG CG';
$item->quantity = 10;
$item->unit_price = 10;
$preference->items = array($item);

$preference->save();
?>
