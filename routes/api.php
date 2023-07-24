<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::middleware('auth:sanctum')->group(function () {
    // List of records for a specific organization
    Route::get('/api/list', [EventController::class, 'index'])->name('events.index');

    // Return a specific record
    Route::get('/api/{id}', [EventController::class, 'show'])->name('events.show');

    // Create a new event
    Route::post('/api', [EventController::class, 'store'])->name('events.store');

    // Update an existing event
    Route::put('/api/{id}', [EventController::class, 'update'])->name('events.update');

    // Partially update one or more columns of an existing event
    Route::patch('/api/{id}/partial', [EventController::class, 'partialUpdate'])->name('events.partialUpdate');

    // Delete an event
    Route::delete('/api/{id}', [EventController::class, 'destroy'])->name('events.destroy');
});
