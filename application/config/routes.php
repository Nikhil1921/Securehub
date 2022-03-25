<?php defined('BASEPATH') OR exit('No direct script access allowed');
$admin = 'adminPanel';

$route['default_controller'] = 'home';
$route['404_override'] = 'home/error_404';
$route['translate_uri_dashes'] = TRUE;

$rs = [
    ['from' => 'become-partner', 'to' => 'home/become_partner',],
    ['from' => 'motor/(:any)', 'to' => 'home/motor/$1', 'type' => 'get'],
    ['from' => 'motor/(:any)', 'to' => 'home/motor_post/$1', 'type' => 'post'],
    ['from' => 'life/(:any)', 'to' => 'home/life/$1', 'type' => 'get'],
    ['from' => 'life/(:any)', 'to' => 'home/life_post/$1', 'type' => 'post'],
    ['from' => 'other/(:any)', 'to' => 'home/other/$1', 'type' => 'get'],
    ['from' => 'other/(:any)', 'to' => 'home/other_post/$1', 'type' => 'post'],
];

foreach ($rs as $r => $f) 
    if(isset($f['type']))
        $route[$f['from']][$f['type']] = $f['to'];
    else
        $route[$f['from']] = $f['to'];

$route["$admin/forgot-password"] = "$admin/login/forgot_password";
$route["$admin/check-otp"] = "$admin/login/check_otp";
$route["$admin/change-password"] = "$admin/login/change_password";