<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['tasks'] = 'tasks/index';
$route['lists'] = 'lists/index';
$route['lists/view'] = 'lists/view';
$route['lists/edit'] = 'lists/edit';
$route['lists/create'] = 'lists/create';
$route['default_controller'] = 'lists/index';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
