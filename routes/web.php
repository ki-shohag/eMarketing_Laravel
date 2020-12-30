<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manager_module\appointmentsController;
use App\Http\Controllers\manager_module\callsController;
use App\Http\Controllers\manager_module\clientsController;
use App\Http\Controllers\manager_module\companyController;
use App\Http\Controllers\manager_module\managersController;
use App\Http\Controllers\manager_module\notesController;
use App\Http\Controllers\manager_module\proposalsController;
use App\Http\Controllers\manager_module\servicesController;
use App\Http\Controllers\manager_module\accessController;
use App\Http\Controllers\manager_module\chatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manager/login', [accessController::class, 'showLoginPage']);
Route::post('/manager/login', [accessController::class, 'loginVerification']);
Route::get('/manager/signout', [accessController::class, 'showSignOutPage']);
Route::get('/manager/signup', [accessController::class, 'showSignUpPage']);
Route::post('/manager/signup', [accessController::class, 'storeManager']);
Route::get('/manager/forgot-password', [accessController::class, 'showForgotPasswordPage']);

Route::group(['middleware'=>['sess']], function () {
    Route::get('/manager-dashboard', [managersController::class, 'index']);
    Route::get('/manager/clients', [clientsController::class, 'index']);
    Route::post('/clients/add-client', [clientsController::class, 'insertClient']);
    Route::get('/manager/company', [companyController::class, 'index']);
    Route::get('/manager/company/edit/{id}', [companyController::class, 'editCompany']);
    Route::post('/manager/company/update/{id}', [companyController::class, 'updateCompany']);
    Route::get('/manager/services', [servicesController::class, 'index']);

    Route::get('/manager/chat', [chatController::class, 'index']);
    Route::get('/manager/chat/{client_id}', [chatController::class, 'showClientChat']);
    Route::post('/manager/chat/searchUser', [chatController::class, 'getUser']);

    Route::get('/manager/profile', [managersController::class, 'showProfile']);
    Route::get('/manager/profile/{id}/edit', [managersController::class, 'showProfileEdit']);
    Route::post('/manager/profile/edit', [managersController::class, 'updateProfile']);
    Route::get('/manager/show-client/{id}', [clientsController::class, 'showClient']);
    Route::get('/manager/show-client/{id}/edit', [clientsController::class, 'showClientProfileEdit']);
    Route::get('/manager/profile/{id}/delete', [clientsController::class, 'deleteClientProfile']);
    Route::get('/manager/show-client/{id}/calls', [clientsController::class, 'showClientCall']);
    Route::get('/manager/show-client/{id}/appointments', [clientsController::class, 'showClientAppointment']);
    Route::get('/manager/show-client/{id}/notes', [clientsController::class, 'showClientNote']);
    Route::get('/manager/show-client/{id}/proposals', [clientsController::class, 'showClientProposal']);    

    Route::post('/manager/upload-profile-pic', [managersController::class, 'uploadProfilePic']);

    Route::post('/clients/{client_id}/calls/add-call', [callsController::class, 'insertCall']);
    Route::post('/client/{client_id}/calls/edit/{call_id}', [callsController::class, 'updateCall']);
    Route::get('/clients/{client_id}/calls/delete/{call_id}', [callsController::class, 'deleteCall']);

    Route::post('/clients/{client_id}/appointment/add-appointment', [appointmentsController::class, 'insertAppointment']);
    Route::post('/clients/{client_id}/appointments/edit/{appointment_id}', [appointmentsController::class, 'updateAppointment']);
    Route::get('/clients/{client_id}/appointments/delete/{appointment_id}', [appointmentsController::class, 'deleteAppointment']);

    Route::post('/clients/{client_id}/notes/add-note', [notesController::class, 'insertNote']);
    Route::post('/clients/{client_id}/notes/edit/{note_id}', [notesController::class, 'updateNote']);
    Route::get('/clients/{client_id}/notes/delete/{note_id}', [notesController::class, 'deleteNote']);

    Route::post('/clients/{client_id}/proposals/add-proposal', [proposalsController::class, 'insertProposal']);
    Route::post('/clients/{client_id}/proposals/edit/{proposal_id}', [proposalsController::class, 'updateProposal']);
    Route::get('/clients/{client_id}/proposals/delete/{proposal_id}', [proposalsController::class, 'deleteProposal']);
    Route::get('/clients/{client_id}/proposals/{proposal_id}', [proposalsController::class, 'showProposalPDF']);
    

    Route::post('/services/add-service', [servicesController::class, 'insertService']);
    Route::post('/services/update/{id}', [servicesController::class, 'updateService']);
    Route::get('/services/delete/{id}', [servicesController::class, 'deleteService']);


});