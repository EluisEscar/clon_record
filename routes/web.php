<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatalogoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');             
})->name('home');

Route::get('/dashboard', function () {
    return redirect()->route('home');   
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/locales', function () {
    return view('locales');
})->name('locales');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo');



require __DIR__.'/auth.php';
