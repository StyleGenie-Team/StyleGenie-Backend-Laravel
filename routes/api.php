//routes/api.php 
Route::get('/ar-products',[ArController::class, 'getArProducts']); 
Route::get('/ar-models/{productId}',[ArController::class, 'getArModel']);