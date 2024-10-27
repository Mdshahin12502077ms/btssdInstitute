<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Backend\adminController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\schoolSubcription;
use  App\Http\Controllers\Backend\settingController;
use  App\Http\Controllers\Backend\StudentController;
use  App\Http\Controllers\Backend\SessionController;
use  App\Http\Controllers\Backend\AuthController;
use  App\Http\Controllers\BranchController;
use  App\Http\Controllers\Backend\BranchSubsController;
use  App\Http\Controllers\Backend\RegistrationController;

use  App\Http\Controllers\Backend\StudentRgisterFundController;
use App\Http\Controllers\SMTPController;
use  App\Http\Middleware\superAdmin;
use App\Http\Controllers\Backend\BkashPaymentController;

use  App\Http\Controllers\frontend\InstituteController;
use  App\Http\Controllers\Backend\NoticeController;
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
//   $branch=BranchController::where('status','Active')->get();
//   dd($branch);
//     return view('welcome',compact('branch'));
// });

Route::get('/',[InstituteController::class,'welcome']);

//middleware for institute route


  Route::get('/bkash/payment', [App\Http\Controllers\BkashTokenizePaymentController::class,'index']);
  Route::get('/bkash/create-payment', [App\Http\Controllers\BkashTokenizePaymentController::class,'createPayment'])->name('bkash-create-payment');
  Route::get('/bkash/callback', [App\Http\Controllers\BkashTokenizePaymentController::class,'callBack'])->name('bkash-callBack');


// Routes for institute
Route::group(['middleware' => ['institute']], function () {
  Route::get('/institute/dashboard', [InstituteController::class, 'dashboard']);
});



//for both midleware access route


Route::prefix('Student/')->group(function(){
  Route::get('all',[StudentController::class,'allStudent']);
  Route::get('get/all',[StudentController::class,'getAllStudent'])->name('gate.all.student');
  Route::get('get/sessions',[StudentController::class,'get_sessions'])->name('get.sessions');
  Route::get('addmission/form',[StudentController::class,'addmissionForm']);
  Route::post('insert',[StudentController::class,'insertStudent']);
  Route::get('edit/{id}',[StudentController::class,'editStudent']);
  Route::post('update/{id}',[StudentController::class,'updateStudent']);
  Route::get('delete/{id}',[StudentController::class,'deleteStudent']);
  Route::get('info/{id}',[StudentController::class,'studentInfo']);
  //reggistration
  Route::get('addmission/registration/page',[StudentController::class,'Addmission_Registration']);
  Route::get('new/register',[StudentController::class,'newRegistration']);
  Route::get('get/new/register',[StudentController::class,'getNewRegStudent'])->name('gate.all.reg.student');
  Route::post('registration/insert',[StudentController::class,'newRegistrationInsert']);
  Route::get('register/cancel/{id}',[StudentController::class,'CancelRegister']);

   //ajax get session
   Route::get('get/session',[StudentController::class,'get_session']);
   Route::get('get/Search',[StudentController::class,'search_student']);
   Route::get('get/Searches',[StudentController::class,'search'])->name('searches');

      //print

  Route::get('Print/Student',[StudentController::class,'print_student']);
  Route::get('search', [StudentController::class, 'searchByInstituteId']);


})->middleware(['superAdmin', 'institute']);



Route::prefix('Registration/')->group(function(){

    //add Registration Fund
    Route::get('add/fund',[StudentRgisterFundController::class,'add_fund']);
    Route::get('student/all/fund/view',[StudentRgisterFundController::class,'allFund']);
    Route::post('Fund/Insert',[StudentRgisterFundController::class,'fundInsert']);
    Route::get('Fund/delete/{id}',[StudentRgisterFundController::class,'fund_delete'])->name('fund_delete');
    //get fund result
    Route::get('reg/fund',[StudentRgisterFundController::class,'getFund']);
    Route::get('get/reg/fund',[StudentRgisterFundController::class,'getFunds'])->name('get.st.reg');
    Route::get('get/session',[StudentRgisterFundController::class,'get_course_session'])->name('get_course_session');
    Route::get('get/session-course',[StudentRgisterFundController::class,'session'])->name('get_session_with_course');
    Route::get('fund/voucher/Pdf/{id}',[StudentRgisterFundController::class,'fundVoucherPdf']);
})->middleware(['superAdmin', 'institute']);



Route::prefix('Notices/')->group(function(){
  Route::get('detail/{id}',[NoticeController::class,'noticeDetails']);
})->middleware(['superAdmin', 'institute']);





// ->middleware('superAdmin');

  Route::middleware(['superAdmin'])->group(function () {
    Route::get('admin/dashboard',[adminController::class,'dashboard']);
    Route::get('admin/latest-admission/get',[adminController::class,'latest_addmision'])->name('latest.addmision');
    // Institute Dashboard
    Route::prefix('Registrations/')->group(function(){
      Route::get('session/time',[RegistrationController::class,'Session_time']);

      Route::post('insert',[RegistrationController::class,'register_time_insert']);
      Route::get('edit/{id}',[RegistrationController::class,'register_time_edit']);
      Route::post('Update/{id}',[RegistrationController::class,'update']);
      Route::post('delete/{id}',[RegistrationController::class,'delete']);
    });

    Route::prefix('Account/')->group(function(){
      Route::get('Deposit/index',[RegistrationController::class,'Session_time']);

      Route::post('insert',[RegistrationController::class,'register_time_insert']);
      Route::get('edit/{id}',[RegistrationController::class,'register_time_edit']);
      Route::post('Update/{id}',[RegistrationController::class,'update']);
      Route::post('delete/{id}',[RegistrationController::class,'delete']);
    });



  //branch all url

  Route::get('branch/all',[BranchController::class,'all']);
  Route::get('add_branch',[BranchController::class,'Branch_add']);
  Route::post('branch/insert',[BranchController::class,'insert']);
  Route::get('Branch/edit/{id}',[BranchController::class,'edit']);
  Route::post('Branch/upate/{id}',[BranchController::class,'update']);
  Route::post('Branch/delete/{id}',[BranchController::class,'delete']);
  Route::get('Branch/info/{id}',[BranchController::class,'BranchInfo']);
  Route::POST('Generate/Password',[BranchController::class,'genPass']);
  Route::GET('query/pdf',[BranchController::class,'querypdf']);
  Route::GET('Send/mail/{id}',[BranchController::class,'sendMail']);
  //smtp setting
  Route::prefix('smtp/')->group(function(){
    Route::get('setting',[SMTPController::class,'index']);
    Route::post('update/{id}',[SMTPController::class,'store']);
  });
  //branch subscription
  Route::post('branch/subscription/insert',[BranchSubsController::class,'Branch_subscription']);

  Route::prefix('School/subscription/')->group(function(){
    Route::get('list/all',[BranchSubsController::class,'allSubscription']);
    Route::get('subscription/edit/{id}',[BranchSubsController::class,'editsubscription']);
    Route::post('subscription/update/{id}',[BranchSubsController::class,'updatesubscription']);
    Route::post('subscription/delete/{id}',[BranchSubsController::class,'deletesubscription']);
    Route::get('Package/all',[schoolSubcription::class,'allPlan']);
    Route::get('Package/add',[schoolSubcription::class,'addPlan']);
    Route::post('Package/insert',[schoolSubcription::class,'insertPlan']);
    Route::get('Package/edit/{id}',[schoolSubcription::class,'editPlan']);
    Route::post('Package/update/{id}',[schoolSubcription::class,'updatePlan']);
    Route::post('Package/delete/{id}',[schoolSubcription::class,'deletePlan']);

  });


//course
  Route::prefix('course/')->group(function(){
    Route::get('all',[CourseController::class,'allCourse']);
    Route::get('add',[CourseController::class,'addCourse']);
    Route::post('insert',[CourseController::class,'insertCourse']);
    Route::get('edit/{id}',[CourseController::class,'editCourse']);
    Route::post('update/{id}',[CourseController::class,'updateCourse']);
    Route::post('delete/{id}',[CourseController::class,'deleteCourse']);
    Route::get('search',[CourseController::class,'searchCourse']);
  });



//session
  Route::prefix('Session/')->group(function(){
    Route::get('all',[SessionController::class,'allSession']);
    Route::get('add',[SessionController::class,'addSession']);
    Route::post('insert',[SessionController::class,'insertSession']);
    Route::get('edit/{id}',[SessionController::class,'editSession']);
    Route::post('update/{id}',[SessionController::class,'updateSession']);
    Route::post('delete/{id}',[SessionController::class,'deleteSession']);

  });
//All Student

  //district all url
  Route::get('add_division',[settingController::class,'division_add']);
  Route::post('add_division/insert',[settingController::class,'division_insert']);
  Route::get('edit/division/{id}',[settingController::class,'division_edit']);
  Route::post('division/update/{id}',[settingController::class,'update_division']);
  Route::get('division/delete/{id}',[settingController::class,'Delete_division']);

  //subdistrict all url
  Route::get('add_district',[settingController::class,'add_district']);
  Route::post('add_district/insert',[settingController::class,'district_insert']);
  Route::get('edit/district/{id}',[settingController::class,'district_edit']);
  Route::post('district/update/{id}',[settingController::class,'update_district']);
  Route::get('district/delete/{id}',[settingController::class,'Delete_district']);
   //education Year Setting
   Route::get('education_year/add',[settingController::class,'addEducationYear']);
   Route::post('education_year/insert',[settingController::class,'insertEducationYear']);
//    Route::get('education_year/edit/{id}',[settingController::class,'editEducationYear']);
   Route::post('education_year/update/{id}',[settingController::class,'updateEducationYear']);
   Route::post('education_year/current/change/{id}',[settingController::class,'updateEducationYearCurrent']);
   Route::post('education_year/delete/{id}',[settingController::class,'deleteEducationYear']);
   Route::get('education_year/info/{id}',[settingController::class,'educationYearInfo']);

   Route::prefix('SystemSettings/')->group(function(){
    Route::get('index',[settingController::class,'index']);

    //logo and seo
    Route::get('Backend/Settings/logo',[settingController::class,'logoset']);
    Route::POST('logo/update/{id}',[settingController::class,'logoUpdate']);
    Route::get('Backend/Settings/seo',[settingController::class,'seoSettings']);
    Route::POST('seo/update/{id}',[settingController::class,'seoUpdate']);
    //payment gateway
    Route::get('Backend/Settings/paymentGateway',[settingController::class,'paymentGatewaySettings']);
    Route::get('bkash_custom',[settingController::class,'bkash_custom']);
    Route::POST('BkashGateway/update/{id}',[settingController::class,'BkashGatewayUpdate']);

    Route::get('Backend/Settings',[settingController::class,'BackendEdit']);
    Route::POST('update/{id}',[settingController::class,'BackendUpdate']);
  });



  Route::prefix('notice/')->group(function(){
    Route::get('all',[NoticeController::class,'all']);
    Route::get('index',[NoticeController::class,'index'])->name('notice.index');
    Route::post('insert',[NoticeController::class,'insert']);
    Route::get('edit/{id}',[NoticeController::class,'edit']);
    Route::post('update/{id}',[NoticeController::class,'update']);
    Route::post('delete/{id}',[NoticeController::class,'delete']);
      //add Registration Fund

  });
  Route::post('/upload', [NoticeController::class, 'uploadImage'])->name('upload.image');

  // Route::post('ckeditor/upload', [NoticeController::class, 'upload'])->name('ckeditor.upload');



Route::group(['middleware' => ['web']], function () {
  // Payment Routes for bKash


  //search payment
  Route::get('/bkash/search/{trxID}', [App\Http\Controllers\BkashTokenizePaymentController::class,'searchTnx'])->name('bkash-serach');

  //refund payment routes
  Route::get('/bkash/refund', [App\Http\Controllers\BkashTokenizePaymentController::class,'refund'])->name('bkash-refund');
  Route::get('/bkash/refund/status', [App\Http\Controllers\BkashTokenizePaymentController::class,'refundStatus'])->name('bkash-refund-status');
});
//catch for b-kash pay amaount
Route::post('/store-payment-data', [BkashPaymentController::class, 'catchAmountPay']);

  //default settings
  Route::get('get_districts',[settingController::class,'getDistrictByDivision']);
});
  //authentication

Route::prefix('Login/')->group(function(){
  Route::post('AuthCheck',[AuthController::class,'loginCheck']);
  Route::get('log',[AuthController::class,'login'])->name('institute.login');
});

Route::get('admin/login',[AuthController::class,'adminlogin'])->name('admin.login');
Route::get('lgout',[AuthController::class,'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
