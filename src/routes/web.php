    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TestController;
    use App\Http\Controllers\HelloController;
    use App\Http\Controllers\TestTestController;
    use App\Http\Controllers\AuthorController;

    Route::get('/test',[TestController::class,'index']);
    Route::get('/hello', [HelloController::class,'index']);
    Route::get('/test/{room}/{id}', function ($room, $id) {return 'roomが' . $room . 'でidは' . $id . 'です';});    
    Route::get('/test/{greeting}',function ($greeting = 'Goodmorning') {
        return $greeting . '=おはようございます';
    });
    Route::get('/',[TestTestController::class,'index']);

    Route::get('/', [AuthorController::class,'index']);
    Route::get('/add',[AuthorController::class,'add']);
    Route::post('/add',[AuthorController::class,'create']);
    Route::get('/edit', [AuthorController::class, 'edit']);
    Route::post('/edit', [AuthorController::class, 'update']);
