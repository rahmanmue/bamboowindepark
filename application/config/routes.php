<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['auth/login'] = 'backend/auth/login';
$route['auth/register'] = 'backend/auth/register';
$route['auth/logout'] = 'backend/auth/logout';

$route['myprofil'] = 'backend/profil/index';

$route['list-admin'] = 'backend/admin/index';
$route['list-admin/edit'] = 'backend/admin/edit';
$route['list-admin/hapus'] = 'backend/admin/hapus';

$route['kategori-berita'] = 'backend/k_berita/index';
$route['kategori-berita/tambah'] = 'backend/k_berita/tambah';
$route['kategori-berita/edit'] = 'backend/k_berita/edit';
$route['kategori-berita/hapus'] = 'backend/k_berita/hapus';

$route['list-berita'] = 'backend/berita/index';
$route['list-berita/tambah'] = 'backend/berita/tambah';
$route['list-berita/edit'] = 'backend/berita/edit';
$route['list-berita/hapus'] = 'backend/berita/hapus';

$route['dashboard-web'] = 'backend/dashboard/index';
$route['konfigurasi-web'] = 'backend/konfigurasi/index';

$route['list-katalog'] = 'backend/katalog/index';
$route['list-katalog/tambah'] = 'backend/katalog/tambah';
$route['list-katalog/edit'] = 'backend/katalog/edit';
$route['list-katalog/hapus'] = 'backend/katalog/hapus';





