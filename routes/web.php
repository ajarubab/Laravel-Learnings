<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IpTrackerController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show',[UserController::class,'showUser']);
Route::get('/user',[UserController::class,'usersDetails']);
// Route::get('/stdDet',[StudentController::class,'getStudentDetails']);

Route::get('/userDet',[IpTrackerController::class,'getUserData']);
Route::get('/ipDet',[IpTrackerController::class,'getRandomIpDetails']);

Route::get('/userDetails',[UserController::class,'getUserTableDetails']);
Route::get('/firstUser',[UserController::class,'getFisrtUserDetails']);
Route::get('/lastUser',[UserController::class,'getLastUserDetails']);
Route::get('/userid/{id}',[UserController::class,'getSpecificUserIdDetail']);
Route::get('/getMyUser',[UserController::class,'getSpecificUserDetails']);
Route::get('/insertUser',[UserController::class,'insertSingleUniqueUserDetails']);
Route::get('/updateUser',[UserController::class,'updateUserDetails']);
Route::get('/deleteUser',[UserController::class,'deleteUserDetails']);
Route::get('/deleteTop',[UserController::class,'deleteTopUser']);
Route::get('/deleteLast',[UserController::class,'deleteLastUser']);

Route::get('/stdForm',[StudentController::class,'addStudentForm']);
// Route::post('/stdDet',[StudentController::class,'registerStudent']);

Route::get('/showdata',[StudentController::class,'showStudentData']);
Route::get('/edit/{id?}',[StudentController::class,'editStudentData'])->name('stdEdt');

// Route::post('/update/{id?}',[StudentController::class,'updateStudentData'])->name('stdUpd');
Route::post('/add/{id?}',[StudentController::class,'storeStudentData'])->name('stdStore');
Route::get('/addNew', [StudentController::class, 'addStudentForm'])->name('addStudent');
Route::get('/delete/{id?}',[StudentController::class,'deleteStudentData'])->name('stdDlt');
Route::get('/deleteAllData',[StudentController::class,'eraseAllData'])->name('EraseAll');

Route::get('/showNameAsc',[StudentController::class,'ShowNamesInAscendingOrder'])->name('showNamesAsc');
Route::get('/showNameDesc',[StudentController::class,'ShowNamesInDescendingOrder'])->name('showNamesDesc');
Route::get('/showClassAsc',[StudentController::class,'ShowClassInAscendingOrder'])->name('showClassAsc');
Route::get('/showClassDesc',[StudentController::class,'ShowClassInDescendingOrder'])->name('showClassDesc');
Route::get('/showlastFiveDataOnly',[StudentController::class,'ShowLastFiveStudentRecords'])->name('showLast5');

Route::get('/total10thStudents', [StudentController::class, 'showTotalCountOf10thClass']);
Route::get('/maxRollNoOf11th',[StudentController::class,'showMaxRollNoOf11thClass']);
Route::get('/minRollNoOf12th',[StudentController::class,'showMinRollNoOf12thClass']);
Route::get('/sumOfRollNoOf09th',[StudentController::class,'showSumOfRollNoOf09thClass']);
Route::get('/avgOfRollNos',[StudentController::class,'showAvgOfRollNo']);
Route::get('/4RecPerPage',[StudentController::class,'FourRecordsChunksLoad']);

Route::get('/emp',[EmployeeController::class,'showEmpDetails'])->name('employeePage');
Route::get('/delete/employee/{id?}',[EmployeeController::class,'removeEmployee'])->name('delEmp');
// Route::get('/empReg',[EmployeeController::class,'openEmpRegForm'])->name('AddEmp');
// Route::post('/empDetails',[EmployeeController::class,'addEmployee']);

Route::post('/delete-multiple', [EmployeeController::class, 'deleteMultipleEmployees'])
->name('deleteMultipleEmployees');

// Route::get('/editEmp/{id?}',[EmployeeController::class,'editEmployeeDetails'])->name('editEmp');
// Route::post('/updateEmp/{id?}',[EmployeeController::class,'updateEmployeeDetails'])->name('updateEmp');

Route::get('employee/addOrUpdate/{id?}',[EmployeeController::class,'add'])->name('emp.add');
Route::post('employee/addOrUpdate/{id?}',[EmployeeController::class,'store'])->name('emp.store');

Route::get('/addCustomer',[CustomerController::class,'fillDataIntoTable']);
Route::get('/updateCustomer',[CustomerController::class,'updateDataOfTable']);

Route::get('/plantData',[PlantController::class,'getPlantDetails']);
Route::post('/plantData',[PlantController::class,'postPlantDetails']);
Route::put('/plantData',[PlantController::class,'putPlantDetails']);
Route::patch('/plantData',[PlantController::class,'patchPlantDetails']);
Route::delete('/plantData',[PlantController::class,'deletePlantDetails']);
Route::match(['get','post'],'/searchPlant',[PlantController::class,'matchPlantDetails']);
Route::view('/wc','welcome');