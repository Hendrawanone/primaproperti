<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'Admin/index';
$route['admin/properti'] = 'Admin/properti';
$route['admin/agent'] = 'Admin/agent';
$route['admin/iklan'] = 'Admin/iklan';
$route['admin/tabel_iklan'] = 'Admin/tabel_iklan';
$route['admin/tabel_agent'] = 'Admin/tabel_agent';
$route['admin/tabel_properti'] = 'Admin/tabel_properti';
$route['default_controller'] = 'Welcome/index';
$route['detail'] = 'Welcome/detail';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
