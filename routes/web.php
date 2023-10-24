<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\Admin\c_wiramuda;
use App\Http\Controllers\Admin\c_okp;
use App\Http\Controllers\Admin\c_pelopor;
use App\Http\Controllers\Admin\c_umum;
use App\Http\Controllers\Admin\c_loker;
use App\Http\Controllers\Admin\c_event;
use App\Http\Controllers\Wiramuda\c_bio;
use App\Http\Controllers\c_user_umum;
use App\Http\Controllers\c_pemuda_pelopor;
use App\Http\Controllers\c_data;

Route::get('/', function () {
    return view('pages.laravel-examples.landingpage');
})->name('/');
Route::get('landingokp', function () {
    return view('pages.laravel-examples.landingokp');
})->name('landingokp');
Route::get('landingpemuda', function () {
    return view('pages.laravel-examples.landingpemuda');
})->name('landingpemuda');
Route::get('landingloker', function () {
    return view('pages.laravel-examples.landingloker');
})->name('landingwiramuda');
Route::get('landingwiramuda', function () {
    return view('pages.laravel-examples.landingwiramuda');
})->name('landingwiramuda');
Route::get('landingberita', function () {
    return view('pages.laravel-examples.landingberita');
})->name('landingberita');
Route::get('sign-up', function () {return redirect('sign-in');})->middleware('guest');


// Route::get('/', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->name('profile');
Route::post('user-profile', [ProfileController::class, 'update']);
Route::get('landingpage', function () {
    return view('pages.laravel-examples.landingpage');
})->name('landingpage');
Route::group(['middleware' => 'auth'], function () {
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('DataPemudaP', function () {
		return view('pages.laravel-examples.DataPemudaP');
	})->name('DataPemudaP');
    Route::get('DataUmum', function () {
		return view('pages.laravel-examples.DataUmum');
	})->name('DataUmum');
    Route::get('DataWiraMuda', function () {
		return view('pages.laravel-examples.DataWiraMuda');
	})->name('DataWiraMuda');
    Route::get('DataLoker', function () {
		return view('pages.laravel-examples.DataLoker');
	})->name('DataLoker');
    Route::get('DataEvent', function () {
		return view('pages.laravel-examples.DataEvent');
	})->name('DataEvent');
    Route::get('Berita', function () {
		return view('pages.laravel-examples.Berita');
	})->name('Berita');
    Route::get('dataOKP', function () {
		return view('pages.laravel-examples.dataOKP');
	})->name('dataOKP');
    Route::get('Ads', function () {
		return view('pages.laravel-examples.Ads');
	})->name('Ads');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
    Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
    Route::get('addloker', function () {
		return view('pages.laravel-examples.addloker');
	})->name('addloker');
    Route::get('addevent', function () {
		return view('pages.laravel-examples.addevent');
	})->name('addevent');
    Route::get('addberita', function () {
		return view('pages.laravel-examples.addberita');
	})->name('addberita');

});


// KHUSUS ADMIN
	// DATA WIRAUSAHA MUDA ADMIN
	Route::controller(c_wiramuda::class)->group(function () {
		Route::get('wiramuda', 'index')->name('wiramuda.index');
		Route::get('wiramuda/create', 'create')->name('wiramuda.create');
		Route::post('wiramuda/store', 'store')->name('wiramuda.store');
		Route::get('wiramuda/edit/{id}', 'edit')->name('wiramuda.edit');
		Route::post('wiramuda/update/{id}', 'update')->name('wiramuda.update');
		Route::get('wiramuda/verifikasi/{id}', 'verifikasi')->name('wiramuda.verifikasi');
	});
	// END DATA WIRAUSAHA MUDA ADMIN

	// DATA OKP ADMIN
	Route::controller(c_okp::class)->group(function () {
		Route::get('okp', 'index')->name('okp.index');
		Route::get('okp/create', 'create')->name('okp.create');
		Route::post('okp/store', 'store')->name('okp.store');
		Route::get('okp/edit/{id}', 'edit')->name('okp.edit');
		Route::post('okp/update/{id}', 'update')->name('okp.update');
		Route::get('okp/verifikasi/{id}', 'verifikasi')->name('okp.verifikasi');
	});
	// END DATA OKP ADMIN

	// DATA PELOPOR MUDA ADMIN
	Route::controller(c_pelopor::class)->group(function () {
		Route::get('pelopor', 'index')->name('pelopor.index');
		Route::get('pelopor/create', 'create')->name('pelopor.create');
		Route::post('pelopor/store', 'store')->name('pelopor.store');
		Route::get('pelopor/edit/{id}', 'edit')->name('pelopor.edit');
		Route::post('pelopor/update/{id}', 'update')->name('pelopor.update');
		Route::get('pelopor/verifikasi/{id}', 'verifikasi')->name('pelopor.verifikasi');
	});
	// END DATA PELOPOR MUDA ADMIN

	// DATA PELOPOR MUDA ADMIN
	Route::controller(c_umum::class)->group(function () {
		Route::get('umum', 'index')->name('umum.index');
		Route::get('umum/create', 'create')->name('umum.create');
		Route::post('umum/store', 'store')->name('umum.store');
		Route::get('umum/edit/{id}', 'edit')->name('umum.edit');
		Route::post('umum/update/{id}', 'update')->name('umum.update');
		Route::get('umum/verifikasi/{id}', 'verifikasi')->name('umum.verifikasi');
	});
	// END DATA PELOPOR MUDA ADMIN

	// DATA LOKER ADMIN
	Route::controller(c_loker::class)->group(function () {
		Route::get('loker', 'index')->name('loker.index');
		Route::get('loker/create', 'create')->name('loker.create');
		Route::post('loker/store', 'store')->name('loker.store');
		Route::get('loker/edit/{id}', 'edit')->name('loker.edit');
		Route::post('loker/update/{id}', 'update')->name('loker.update');
	});
	// END DATA LOKER ADMIN

	// DATA EVENT ADMIN
	Route::controller(c_event::class)->group(function () {
		Route::get('event', 'index')->name('event.index');
		Route::get('event/create', 'create')->name('event.create');
		Route::post('event/store', 'store')->name('event.store');
		Route::get('event/edit/{id}', 'edit')->name('event.edit');
		Route::post('event/update/{id}', 'update')->name('event.update');
	});
	// END DATA EVENT ADMIN
// END KHUSUS ADMIN



// WIRAUSAHA MUDA
Route::controller(c_bio::class)->group(function () {
	Route::get('wiramuda/bio', 'index')->name('wiramuda.bio');
	Route::post('wiramuda/updatebio', 'updateBio')->name('wiramuda.updatebio');
});

// END WIRAUSAHA MUDA


// User Umum
Route::controller(c_user_umum::class)->group(function () {
    Route::get('umum/bio', 'bio')->name('umum.bio');
	Route::post('umum/updatebio', 'updatebio')->name('umum.updatebio');
});

// User Umum
Route::controller(c_pemuda_pelopor::class)->group(function () {
    Route::get('pelopor/bio', 'bio')->name('pelopor.bio');
	Route::post('pelopor/updatebio', 'updatebio')->name('pelopor.updatebio');
});
// Data Pendukung
Route::controller(c_data::class)->group(function () {
    Route::get('datadukung', 'index')->name('data');
	Route::get('data/destroy/{id}', 'destroy')->name('data.destroy');
	Route::post('data/store', 'store')->name('data.store');
});
// END User Umum
