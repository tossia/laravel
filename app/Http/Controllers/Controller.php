<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PhotoController;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Symfony\Component\Routing\Route;
use function view;

//Route::resource('photos', PhotoController::class);
//Route::get('/user/{id}', [UserController::class, 'show']);

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;
}

class UserController extends Controller {

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id) {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

}
