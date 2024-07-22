<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\VoteController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DasboardController::class, 'index']);
});

Route::prefix('user')->group(function () {
    Route::get('/register', [UserController::class, 'register']);
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login/auth', [UserController::class, 'loginAuth']);
    Route::post('/register/store', [UserController::class, 'storeRegister']);
    Route::post('/logout', [UserController::class, 'logout']);
});

Route::get('/vote', [VoteController::class, 'vote'])->name('vote.index');
Route::get('/voting', [VoteController::class, 'show'])->name('vote.show');
Route::post('/voting/submit', [VoteController::class, 'submit'])->name('vote.submit');
Route::get('/voting/results', [VoteController::class, 'results'])->name('vote.results');
Route::get('/voting/tentang-kami', [VoteController::class, 'tentangkami'])->name('vote.tentangkami');
Route::get('/voting/catatan', [VoteController::class, 'catatan'])->name('vote.catatan');
Route::get('/admin/manage-candidates', [VoteController::class, 'index'])->name('admin.manage_candidates');
Route::get('/admin/manage-candidates/create', [VoteController::class, 'create'])->name('admin.create_candidate');
Route::post('/admin/manage-candidates', [VoteController::class, 'store'])->name('admin.store_candidate');
Route::get('/tentangkami', [VoteController::class, 'tentangkami'])->name('tentangkami');
Route::get('/catatankandidat', [VoteController::class, 'catatan'])->name('catatankandidat');
