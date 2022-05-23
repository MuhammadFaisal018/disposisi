<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

<<<<<<< HEAD
=======
/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
| These are the classes located in system/libraries/ or your
| application/libraries/ directory, with the addition of the
| 'database' library, which is somewhat of a special case.
|
| Prototype:
|
|	$autoload['libraries'] = array('database', 'email', 'session');
|
| You can also supply an alternative library name to be assigned
| in the controller:
|
|	$autoload['libraries'] = array('user_agent' => 'ua');
*/
$autoload['libraries'] = array('database','session','form_validation');
>>>>>>> 56d9ce162c17e5cf49a23af4452de6859702d27f

$autoload['libraries'] = array('database','session','form_validation');


$autoload['drivers'] = array();

<<<<<<< HEAD
=======
/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['helper'] = array('url', 'file');
*/
$autoload['helper'] = array('url','pos');
>>>>>>> 56d9ce162c17e5cf49a23af4452de6859702d27f

$autoload['helper'] = array('url','pos');


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array();
