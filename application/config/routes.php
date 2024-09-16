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
$route['default_controller'] = 'Login';
$route['dashboard1'] ='Admin_controller/dashboard';



//Change Password..........................................................................................
$route['changepswd'] ='Login/changepswd';
$route['editPswd'] ='Login/editPswd';

//Profile.......................................................................................

$route['myprof']='Admin_controller/myprof';
$route['myprofileedit/(:any)']='Admin_controller/myprofileedit/$1';
$route['myprofileupdate/(:any)']='Admin_controller/myprofileupdate/$1';

//locations with restaurants...........................................................................
$route['loc']='Admin_controller/loc';
$route['addlocation']='Admin_controller/addlocation';
$route['insertlocation']='Admin_controller/insertlocation';
$route['editlocation/(:any)']='Admin_controller/editlocation/$1';
$route['updatelocation/(:any)']='Admin_controller/updatelocation/$1';
$route['deletelocation/(:any)']='Admin_controller/deletelocation/$1';




//Locations.................................................................................................
$route['locList']='Admin_controller/locList';
$route['addLoc']='Admin_controller/addLoc';
$route['insertLoc']='Admin_controller/insertLoc';
$route['editLoc/(:any)'] ='Admin_controller/editLoc/$1';
$route['deleteLoc/(:any)'] ='Admin_controller/deleteLoc/$1';
$route['updateLoc/(:any)'] ='Admin_controller/updateLoc/$1';


//Resturants Address ............................................................			
$route['addresslist']='Admin_controller/addresslist';
$route['add_address']='Admin_controller/add_address';


//Resturants...........................................................................................
$route['restaurantlist']='Admin_controller/restaurantlist';
$route['addingrestaurant']='Admin_controller/addingrestaurant';
$route['insertrestaurant']='Admin_controller/insertrestaurant';
$route['deleterest/(:any)']='Admin_controller/deleterest/$1';
$route['editrestaurants/(:any)']='Admin_controller/editrestaurants/$1';
$route['updaterestaurants/(:any)']='Admin_controller/updateRes/$1';
//TRAIL FOR ADDING LOCATIONS...........................................................................
$route['restloc/(:any)']='Admin_controller/restloc/$1';
$route['addresloc/(:any)']='Admin_controller/addresloc/$1';
$route['insertresloc/(:any)']='Admin_controller/insertresloc/$1';
$route['editresloc/(:any)/(:any)']='Admin_controller/editresloc/$1/$2';
$route['updateresloc/(:any)/(:any)']='Admin_controller/updateresloc/$1/$2';
$route['deleteresloc/(:any)/(:any)']='Admin_controller/deleteresloc/$1/$2';



//Category type.......................................................................................

$route['typelist']='Admin_controller/typelist';
$route['addtype']='Admin_controller/addtype';
$route['inserttype']='Admin_controller/inserttype';
$route['deletetype/(:any)']='Admin_controller/deletetype/$1';
$route['edittype/(:any)']='Admin_controller/edittype/$1';
$route['updatetype/(:any)']='Admin_controller/updatetype/$1';


//Category.............................................................................................
$route['categorylist']='Admin_controller/categorylist';
$route['addcate']='Admin_controller/addcate';
$route['insertcate']='Admin_controller/insertcate';
$route['deletecategory/(:any)']='Admin_controller/deletecategory/$1';
$route['editcategory/(:any)']='Admin_controller/editcategory/$1';
$route['updatecate/(:any)']='Admin_controller/updatecate/$1';

//items................................................................................................
$route['itemslist']='Admin_controller/itemslist';
$route['additem']='Admin_controller/additem';
$route['insertitem']='Admin_controller/insertitem';
$route['deleteitem/(:any)']='Admin_controller/deleteitem/$1';
$route['edititem/(:any)/(:any)']='Admin_controller/edititem/$1/$2';
$route['updateitem/(:any)']='Admin_controller/updateitem/$1';

//offers........................................................................................
$route['offer']='Admin_controller/offer';
$route['addoffer']='Admin_controller/addoffer';
$route['insertoffer']='Admin_controller/insertoffer';
$route['deleteoffer/(:any)']='Admin_controller/deleteoffer/$1';
$route['editoffer/(:any)/(:any)']='Admin_controller/editoffer/$1/$2';
$route['updateoffer/(:any)']='Admin_controller/updateoffer/$1';

//stalls...............................................................................................
$route['stall']='Admin_controller/stall';
$route['addstall']='Admin_controller/addstall';
$route['insertstall']='Admin_controller/insertstall';
$route['deletestall/(:any)/(:any)']='Admin_controller/deletestall/$1/$1';
$route['editstall/(:any)']='Admin_controller/editstall/$1';
$route['updatestall/(:any)']='Admin_controller/updatestall/$1';

//offeritems named as      ADDON...........................................................................
$route['addon']='Admin_controller/addon';
$route['add_addon']='Admin_controller/add_addon';
$route['insertaddon']='Admin_controller/insertaddon';
$route['edit_addon/(:any)/(:any)']='Admin_controller/edit_addon/$1/$2';
$route['updateaddon/(:any)']='Admin_controller/updateaddon/$1';
$route['delete_addon/(:any)']='Admin_controller/delete_addon/$1';




//offeritems based on date
$route['roffer']='Admin_controller/roffer';
$route['add_eoffer']='Admin_controller/add_eoffer';





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
