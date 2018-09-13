<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['about'] = 'about/index';

$route['training'] = 'training/index';
$route['training/single'] = 'training/single';

$route['cowork'] = 'cowork/index';
$route['cowork/single'] = 'cowork/single';

$route['incubation'] = 'incubation/index';
$route['lounge'] = 'lounge/index';

// Form Fill
$route['signup'] = 'user/index';
$route['login'] = 'user/login';



$route['default_controller'] = 'pages';
$route['404_override'] = 'my404';
$route['translate_uri_dashes'] = FALSE;
