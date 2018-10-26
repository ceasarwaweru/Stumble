<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['post/login_view'] = 'post/login_view';
$route['post/index_user'] = 'post/index_user';
$route['post/register_user'] = 'post/register_user';
$route['post/login_user'] = 'post/login_user';
$route['posts'] = 'posts/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
