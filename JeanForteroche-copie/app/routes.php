<?php

// Page d'accueil
$app->get('/', function () use ($app) {
    $billets = $app['dao.billet']->readAll();
    return $app['twig']->render('index.html.twig', array('billets' => $billets));
})->bind('accueil');


//Single Billet
$app->get('/billet/{id}', function ($id) use ($app) {
	$billet = $app['dao.billet']->read($id);
	return $app['twig']->render('billet.html.twig', array('billet' => $billet));
})->bind('billet');




