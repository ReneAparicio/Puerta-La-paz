use App\Http\Controllers\Admin\ProgramaController;

Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
    Route::resource('programas', ProgramaController::class);
});