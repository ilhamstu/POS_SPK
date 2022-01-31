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
|	$route['default_controller'] = 'admin';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "admin" class
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
// route default dan C_Login
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
$route['auth'] = 'login/aksi_login';
$route['logout'] = 'login/logout';
$route['register'] = 'login/regist';
$route['submit-register'] = 'login/y_regist';


// route C_kasir
$route['data-barang'] = 'kasir/data_barang';
$route['proses-transaksi'] = 'kasir/proses_trsk';
$route['POS'] = 'kasir';
$route['catatan-transaksi'] = 'kasir/cat_tsk';


// route C_admin
$route['a'] = 'admin';
$route['a/data-barang'] = 'admin/data_barang';
$route['a/data-barang/(:any)'] = 'admin/data_barang/$1';
$route['a/simpan-barang'] = 'admin/tmbh_simpan';
$route['a/tambah-barang'] = 'admin/tambah_brg';
$route['a/hitung'] = 'admin/akumulasi_terjual';
$route['a/hitung-ulang'] = 'admin/akumulasi_ulang';
$route['a/data-barang-terlaris'] = 'admin/terlaris';
$route['a/edit/(:num)'] = 'admin/edit/$1';
$route['a/update-barang'] = 'admin/simpan_edit';
$route['a/hapus-barang/(:num)'] = 'admin/hapus_brg/$1';
$route['a/detail-transaksi'] = 'admin/detail_tsk';