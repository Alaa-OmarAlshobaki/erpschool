<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('Home');

Route::get('/test',function(){

return view('Contac')
});




#show function in onepage
Route::get('/','Auth\OnePageController@OurActivity')->name('Home');





Auth::routes();

#show login and register
Route::get('/login/admin', 'Auth\loginAdminController@showAdminLoginForm')->name('loginadmin');
Route::get('/login/employee', 'Auth\loginEmployeeController@showLoginEmployee')->name('loginemployee');
Route::get('/login/student', 'Auth\loginStudentController@showLoginStudent')->name('loginstudent');
Route::get('/login/guardian', 'Auth\LoginGuardianController@showLoginGuardian')->name('loginguardian');
// Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
// Route::get('/register/teacher', 'Auth\RegisterController@showTeacherRegisterForm');

#login and registerion function 
Route::post('/login/admin', 'Auth\loginAdminController@adminLogin')->name('login/admin');
Route::post('/login/employee', 'Auth\loginEmployeeController@employeeLogin');
Route::post('/login/student', 'Auth\loginStudentController@studentLogin');
Route::post('/login/guardian', 'Auth\LoginGuardianController@guardianLogin');
// Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
// Route::post('/register/teacher', 'Auth\RegisterController@createTeacher');


#route in auth page after check
Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin.admin')->middleware('auth:admin');
Route::view('/employee', 'employee')->middleware('auth:employee');
Route::view('/student', 'student')->middleware('auth:student');
Route::view('/guardian', 'guardian')->middleware('auth:guardian');



# route for admin dashboard
#route for institon
Route::get('/InstitutionDetailsEdit/{id}','Auth\loginAdminController@InstitutionDetails')->name('Institution.Details')->middleware('auth:admin');
Route::post('/InstitutionDetailsUpdate/{id}','Auth\loginAdminController@update')->name('update.Institution');


#route for acadimic
Route::get('/AcademicDetails','Auth\loginAdminController@indexAcademic')->name('Academic.Details')->middleware('auth:admin');
Route::get('/datatable','Auth\loginAdminController@datatable')->name('dashboard.Academic.datatable')->middleware('auth:admin');
Route::get('/editAcademic/{id}','Auth\loginAdminController@EditAcademic')->name('editAcademic')->middleware('auth:admin');
Route::post('/AcademicDetailsUpdate/{id}','Auth\loginAdminController@updateAcademic')->name('update.Academic')->middleware('auth:admin');
Route::get('/createAcademic','Auth\loginAdminController@CreateAcademic')->name('createAcademic')->middleware('auth:admin');
Route::post('/AcademicDetailsStore','Auth\loginAdminController@StoreAcademic')->name('store.Academic')->middleware('auth:admin');

#rote for import student
route::get('/StudentImport','Auth\loginAdminController@IndexImportStu')->middleware('auth:admin')->name('Student.Import');
Route::get('/datatablestudent','Auth\loginAdminController@DatableImportStu')->name('dashboard.importstudent.datatable')->middleware('auth:admin');
Route::get('/editImportStud/{id}','Auth\loginAdminController@editImportStudent')->name('editImportStudent')->middleware('auth:admin');
Route::post('/updateImportStu/{id}','Auth\loginAdminController@UpdateImportStudent')->name('updateImportStu');
Route::get('/createstudent','Auth\loginAdminController@CreateStu')->name('createStudent')->middleware('auth:admin');
Route::post('/importstudent','Auth\loginAdminController@storeStudent')->name('import.student')->middleware('auth:admin');
route::view('/ُEmployeeImport','admin.EmployeeImport')->middleware('auth:admin')->name('Employee.Import');












#logout for admin and teacher
Route::post('/logoutadmin',function(){
    Auth::guard('admin')->logout();
    return redirect()->route('loginadmin');
})->name('logout.admin');

Route::post('/logoutemployee',function(){
    Auth::guard('employee')->logout();
    return redirect()->route('loginemployee');
})->name('logout.employee');


Route::post('/logoutstudent',function(){
    Auth::guard('student')->logout();
    return redirect()->route('loginstudent');
})->name('logout.student');

Route::post('/logouguardian',function(){
    Auth::guard('guardian')->logout();
    return redirect()->route('loginguardian');
})->name('logout.guardian');

#lang multi lang
Route::get('changelang/{lang}', function ($lang){
    Session::put('lang', $lang);
    return redirect()->back();
})->name('lang');


Route::get('/home', 'HomeController@index')->name('home');
