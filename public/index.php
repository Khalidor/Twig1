<?php
require"../vendor/autoload.php"; // suite à la création des fichiers, il faut d'abord charger "l'autoload"
// ici nous venons charger le $loader qui permet d'aller chercher les templates
$loader = new \Twig\Loader\FilesystemLoader('../src/view');
$twig = new \Twig\Environment($loader, [
        'cache' => false,
    ]
);

$products= ['product1', 'product2', 'product3', 'product4', 'product5'];


echo $twig->render('index.html.twig', ['products'=>$products]);


