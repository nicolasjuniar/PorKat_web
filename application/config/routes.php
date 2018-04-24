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
$route['default_controller'] = 'LoginWebController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//////////////////////////////////////////////////////MOBILE/////////////////////////////////////////////////
////pengguna
$route['pengguna/login']['POST']='LoginMobileController/Login_mobile';

///pelanggan
$route['pelanggan/register']['POST']='RegisterController/RegisterPelanggan';
$route['pelanggan/update/password']['PUT']='SettingController/UbahKatasandiPelanggan';
$route['pelanggan/update/profile']['PUT']='SettingController/UbahProfilPelanggan';
$route['pelanggan/ulasan/list']['GET']='KelolaUlasanController/GetUlasan';
$route['pelanggan/ulasan/update']['PUT']='KelolaUlasanController/UpdateUlasan';
$route['pelanggan/ulasan/insert']['POST']='KelolaUlasanController/Ulas';
$route['pelanggan/ulasan/cek']['GET']='KelolaUlasanController/IsUlas';
$route['pelanggan/ulasan/delete/(:num)']['DELETE']='KelolaUlasanController/DeleteUlasan/$1';
$route['pelanggan/pesan/insert']['POST']='TransaksiController/InsertPesan';
$route['pelanggan/pesan/update']['POST']='TransaksiController/UpdatePesan';
$route['pelanggan/pesan/list']['GET']='TransaksiController/GetListPesanPelanggan';
$route['pelanggan/pesan/menu']['GET']='TransaksiController/getListMenuPesanan';

///katering
$route['katering/register']['POST']='RegisterController/RegisterKatering';
$route['katering/list/rating']['GET']='GetListKateringController/GetListKateringByRating';
$route['katering/list/distance']['GET']='GetListKateringController/GetListKateringByDistance';
$route['katering/update/password']['PUT']='SettingController/UbahKatasandiKatering';
$route['katering/update/profile']['PUT']='SettingController/UbahProfilKatering';
$route['menu/list']['GET']='GetListKateringController/getListMenu';
$route['transaksi/pengantaran/list']['GET']='TransaksiController/GetListPengantaran';
$route['transaksi/makanan/list']['GET']='TransaksiController/GetListMakanan';
$route['menu/get']['GET']='KelolaMenuController/GetListMenu';
$route['menu/insert']['POST']='KelolaMenuController/InsertMenu';
$route['menu/update']['PUT']='KelolaMenuController/UpdateMenu';
$route['menu/delete']['PUT']='KelolaMenuController/UpdateStatusMenu';
$route['katering/update/photo']['PUT']='KateringController/updatePhotoKatering';
$route['katering/pesan/list']['GET']='TransaksiController/GetListPesanKatering';

///////////////////////////////////////////////////WEB///////////////////////////////////////////////////////////
$route['login']='LoginWebController';
$route['admin/login']['POST']='LoginWebController/Login_web';
$route['dashboard']='DashboardWebController';
$route['logout']='DashboardWebController/logoutWeb';
$route['katering']='KateringWebController/setKateringView';
$route['katering/search']['POST']='KateringWebController/setSearchKateringView';
// $route['katering/(:any)']='KateringWebController/setKateringView/$1';
$route['katering/delete/(:num)']['GET']='KateringWebController/deleteKatering/$1';
$route['katering/detail/(:num)']='KateringWebController/getDetailKatering/$1';
$route['katering/edit/(:num)']='KateringWebController/setEditKatering/$1';
$route['katering/edit/profile']['POST']='KateringWebController/updateKateringWeb';
$route['katering/add/no_verifikasi']['POST']='KateringWebController/addkatering';
$route['pelanggan']='PelangganWebController/setPelangganView';
$route['pelanggan/search']='PelangganWebController/setSearchPelangganView';
$route['pelanggan/(:any)']='PelangganWebController/setPelangganView/$1';
$route['pelanggan/delete/(:num)']['GET']='PelangganWebController/deletePelanggan/$1';
$route['pelanggan/detail/(:num)']='PelangganWebController/getDetailPelanggan/$1';
$route['pelanggan/edit/(:num)']='PelangganWebController/setEditPelanggan/$1';
$route['pelanggan/edit/profile']['POST']='PelangganWebController/updatePelangganWeb';
