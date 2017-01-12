<?php
// twig intro here: http://twig.sensiolabs.org/doc/2.x/api.html

// import autoloader
require_once '../../../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('/Users/marcus.chiu/ComputerScience/PHP/PHPStorm/PHPStormProjects/Example/BasicPHP/src/third_party/twig/templates');
$twig = new Twig_Environment($loader, array(
	'cache' => '/Users/marcus.chiu/ComputerScience/PHP/PHPStorm/PHPStormProjects/Example/BasicPHP/src/third_party/twig/cache'
));

$template = $twig->load('index.html');
echo $template->render(array('the' => 'variables', 'go' => 'here'));

//echo $twig->render('index.html', array('the' => 'variables', 'go' => 'here'));
//echo $template->renderBlock('block_name', array('the' => 'variables', 'go' => 'here'));
