<?php

use App\Mail\Idriss;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategorieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view("/", "welcome")->name("home");
Route::view("/contact", "components.contact")->name("contact");
Route::view("/references", "aboutReferences")->name("contact");
Route::view("/services", "aboutServices")->name("contact");
Route::view("/client", "components.client")->name("contact");
Route::get('/AllProjects', [ProjectController::class , "index"])->name("AllProjects");
Route::get('/searchProject', [ProjectController::class, "indexDetails"])->name("detailsProjet");

Route::get("/details/{id}",[ProjectController::class,"show"]);

// ProjectController.php

Route::get("/login", [AdminController::class , "create"]);
Route::post("/check" ,[AdminController::class , "store"] );

// web.php
Route::get('/watch-video/{id}', [App\Http\Controllers\VideoController::class, 'watchVideo'])->name('watchVideo');
Route::get('/view-video/{id}', [ProjectController::class, 'viewVideo'])->name('viewVideo');
Route::post('/projects/{id}/add-observation', [ProjectController::class, 'addObservation'])->name('projects.addObservation');
Route::middleware("auth")->group(function() {
    Route::get('/ajouter', [ProjectController::class , "create"]);
    Route::post('/store', [ProjectController::class , "store"]);
    Route::get("/ajouterImages/{id}" , [ImageController::class , "create"]);
    Route::post('/storeImages/{id}', [ImageController::class , "store"]);
    Route::get('/admin', [AdminController::class , "index"] );
    Route::get("/update/{id}", [ProjectController::class , "edit"] );
    Route::put("/update/{id}", [ProjectController::class , "update"] );
    Route::get('/admin/{id}/modifierVideo', [ProjectController::class, 'showUpdateVideoForm'])->name('projects.showUpdateVideoForm');

// Route to handle the video update
Route::put('/projects/{id}/update-video', [ProjectController::class, 'updateVideo'])->name('projects.updateVideo');
    Route::post("/logout" ,[AdminController::class , "deconect"] );
    Route::get("/admin/{id}/modifier" ,[AdminController::class , "edit"]  );
    Route::post("/admin/{id}/update" ,[AdminController::class , "update"]  );
    Route::delete("/admin/{id}/delete",[AdminController::class , "destroy"]);
    Route::get("/ajouterCategorie" , [CategorieController::class , "create"]);
    Route::post("/loading" , [CategorieController::class , "store"]);
    Route::delete('/delete/{id}',[ProjectController::class,"destroy"] );
});
Route::get('salam', function () {
    Mail::to('urownemail@gmail.com')->send(new Idriss());
});
// Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');


