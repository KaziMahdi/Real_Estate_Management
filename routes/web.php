<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeDesignationController;
use App\Http\Controllers\ExpenseController;

use App\Http\Controllers\MaterialController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PayrolController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectPlanController;
use App\Http\Controllers\ProjectTaskController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;


use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\UomController;
use App\Http\Controllers\WarehouseController;
use App\Models\Payrol;
use App\Models\RequisitionDetaile;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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
// });

Route::get('/', function () {
    return view('index');
})->name("login");

Route::resource('/employees',EmployeeController::class);

Route::get("getemployee",[EmployeeController::class,'get_employee_json']);


Route::resource('/customers',CustomerController::class);

Route::resource('/dashboard',DashboardController::class);

Route::resource('/designation',EmployeeDesignationController::class);

Route::resource('/reports',ReportController::class);

Route::resource('/projects',ProjectController::class);
Route::get("getproject",[ProjectController::class,'get_project_json']);

Route::resource('/projecttasks',ProjectTaskController::class);

Route::resource('/tasks',TaskController::class);

Route::resource('/clients',ClientController::class);

Route::resource('/timesheets',TimesheetController::class);

Route::resource('/owners',OwnerController::class);

Route::resource('/materials',MaterialController::class);
Route::get("getmaterial",[MaterialController::class,'get_material_json']);

Route::resource('/categorys',CategoryController::class);

Route::resource('/uoms',UomController::class);

Route::resource('/departments',DepartmentController::class);

Route::resource('/warehouses',WarehouseController::class);
Route::get("getwarehouse",[WarehouseController::class,'get_warehouse_json']);

Route::resource('/requisitions',RequisitionController::class);

Route::resource('/purchases',PurchaseController::class);

Route::resource('/suppliers',SupplierController::class);
Route::get("getsupplier",[SupplierController::class,'get_supplier_json']);

Route::resource('/projectplans',ProjectPlanController::class);


Route::resource('/expenses',ExpenseController::class);

Route::resource('/stocks',StockController::class);

Route::resource('/orders',OrderController::class);

Route::resource('/orderdetails',OrderDetailsController::class);

Route::resource('/payrols',PayrolController::class);

Route::post("auth",[AuthController::class,'auth'])->name('auth');
Route::get("home",[HomeController::class,'index'])->name('home');
Route::get("logout",[AuthController::class,'logout'])->name('logout');
Route::get('report',[StockController::class,'report'])->name('report');