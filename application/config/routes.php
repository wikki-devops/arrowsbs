<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['products/greytHR'] = 'redirects/greytHR';

$route['default_controller'] = 'welcome';
$route['(:any)'] = 'welcome/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
