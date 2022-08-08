<?php

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/ticket-validation/{ticket}', function (Ticket $ticket) {
    // TODO Livewire component van maken ZOIETS: (php artisan make:livewire)
    //  - UUID gebruiken voor ticket url ipv ID
    //  - Nadat de controleur op goedkeuren heeft gedrukt,
    //    dit uitvoeren app(ApproveTicketValidationAction::class)($ticket);

    return view('ticket-validation', [
        'ticket' => $ticket
    ]);
})->middleware(['auth'])->name('ticket-validation');

require __DIR__.'/auth.php';
