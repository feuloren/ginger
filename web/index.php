<?php
// Include all dependencies
require_once '../vendor/autoload.php';

// Include doctrine config
require_once '../bootstrap.php';

require_once '../config.php';

$app = new \Slim\Slim(array(
    'debug' => false,
    'templates.path' => '../templates'
));
$app->contentType('application/json; charset=utf-8');

require_once '../class/ginger.class.php';
$Ginger = NULL;

/***********************************************************************
 *                Check la presence de l'api key
 ***********************************************************************/
$app->hook('slim.before.dispatch', function () use ($app) {
	globql $Ginger;
	if(empty($_GET['key']) and empty($_POST['key']))
		throw new ApiException(401);
	$Ginger = new Ginger(Config::accounts_url, $_POST['key']);
});


/***********************************************************************
 *                        Error handler
 ***********************************************************************/
$app->error(function (\Exception $e) use ($app) {
	if (!($e instanceof ApiException)) {
		$code = 500;
	}
	else {
		$code = $e->getCode();
	}
	$message = $e->getMessage();
	$app->render('error.json.php', array('code'=>$code, 'message'=>$message), $code);
});

/***********************************************************************
 *                            404 hander
 ***********************************************************************/
$app->notFound(function () use ($app) {
	$app->render('error.json.php', array('code'=>404, 'message'=>ApiException::$http[404]), 404);
});


/***********************************************************************
 *                             Routes
 ***********************************************************************/
// récupération d'un utilisateur
$app->get('/v1/:login', function ($login) use ($app, $Ginger) {
	$r = $Ginger->getPersonneDetails($login);
	$app->render('success.json.php', array('result'=>$r));
});

// récupération des cotisations
$app->get('/v1/:login/cotisations', function ($login) use ($app, $Ginger) {
	$r = $Ginger->getPersonneCotisations($login);
	$app->render('success.json.php', array('result'=>$r));
});

// recherche d'une personne
$app->get('/v1/find/:loginpart', function ($loginpart) use ($app, $Ginger) {
	$r = $Ginger->findPersonne($loginpart);
	$app->render('success.json.php', array('result'=>$r));
});

// ajout d'une cotisation
$app->post('/v1/:login/cotisations', function ($login) use ($app, $Ginger) {
	if (empty($_POST['debut']) or empty($_POST['fin']) or empty($_POST['montant']))
		throw new ApiException(400);
	$r = $Ginger->addCotisation($login, strtotime($_POST['debut']), strtotime($_POST['fin']), $_POST['montant']);
	$app->render('success.json.php', array('result'=>$r));
});

/***********************************************************************
 *                             Launch
 ***********************************************************************/
$app->run();

?>
