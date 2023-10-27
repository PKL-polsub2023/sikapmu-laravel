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
use App\Http\Controllers\Admin\c_ads;
use App\Http\Controllers\Admin\c_berita;
use App\Http\Controllers\Wiramuda\c_bio;
use App\Http\Controllers\c_user_umum;
use App\Http\Controllers\c_pemuda_pelopor;
use App\Http\Controllers\c_data;
use App\Http\Controllers\c_data_pemuda;
use App\Http\Controllers\c_okpu;
use App\Http\Controllers\c_lokeru;
use App\Http\Controllers\c_eventu;
use App\Http\Controllers\c_landing_page;
use App\Http\Controllers\c_password;


// Route::get('loker-utama', function () {
//     return view('landingPage.loker');
// })->name('landingloker');
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
Route::get('/', [SessionsController::class, 'landingPage'])->middleware('guest')->name('lp');
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
		Route::get('wiramuda', 'index')->name('admin.wiramuda.index');
		Route::get('wiramuda/create', 'create')->name('admin.wiramuda.create');
		Route::post('wiramuda/kirim', 'store')->name('admin.wiramuda.store');
		Route::get('wiramuda/edit/{id}', 'edit')->name('admin.wiramuda.edit');
		Route::post('wiramuda/update/{id}', 'update')->name('admin.wiramuda.update');
		Route::get('wiramuda/verifikasi/{id}', 'verifikasi')->name('admin.wiramuda.verifikasi');
		Route::get('wiramuda/destroy/{id}', 'destroy')->name('admin.wiramuda.destroy');
	});
	// END DATA WIRAUSAHA MUDA ADMIN

	// DATA OKP ADMIN
	Route::controller(c_okp::class)->group(function () {
		Route::get('okp', 'index')->name('admin.okp.index');
		Route::get('okp/create', 'create')->name('admin.okp.create');
		Route::post('okp/store', 'store')->name('admin.okp.store');
		Route::get('okp/edit/{id}', 'edit')->name('admin.okp.edit');
		Route::post('okp/update/{id}', 'update')->name('admin.okp.update');
		Route::get('okp/verifikasi/{id}', 'verifikasi')->name('admin.okp.verifikasi');
		Route::get('okp/destroy/{id}', 'destroy')->name('admin.okp.destroy');
	});
	// END DATA OKP ADMIN

	// DATA PELOPOR MUDA ADMIN
	Route::controller(c_pelopor::class)->group(function () {
		Route::get('pelopor', 'index')->name('admin.pelopor.index');
		Route::get('pelopor/create', 'create')->name('admin.pelopor.create');
		Route::post('pelopor/store', 'store')->name('admin.pelopor.store');
		Route::get('pelopor/edit/{id}', 'edit')->name('admin.pelopor.edit');
		Route::post('pelopor/update/{id}', 'update')->name('admin.pelopor.update');
		Route::get('pelopor/verifikasi/{id}', 'verifikasi')->name('admin.pelopor.verifikasi');
		Route::get('pelopor/destroy/{id}', 'destroy')->name('admin.pelopor.destroy');
	});
	// END DATA PELOPOR MUDA ADMIN

	// DATA PELOPOR MUDA ADMIN
	Route::controller(c_umum::class)->group(function () {
		Route::get('umum', 'index')->name('admin.umum.index');
		Route::get('umum/create', 'create')->name('admin.umum.create');
		Route::post('umum/store', 'store')->name('admin.umum.store');
		Route::get('umum/edit/{id}', 'edit')->name('admin.umum.edit');
		Route::post('umum/update/{id}', 'update')->name('admin.umum.update');
		Route::get('umum/verifikasi/{id}', 'verifikasi')->name('admin.umum.verifikasi');
		Route::get('umum/destroy/{id}', 'destroy')->name('admin.umum.destroy');
	});
	// END DATA PELOPOR MUDA ADMIN

	// DATA LOKER ADMIN
	Route::controller(c_loker::class)->group(function () {
		Route::get('loker', 'index')->name('loker.index');
		Route::get('loker/create', 'create')->name('loker.create');
		Route::post('loker/store', 'store')->name('loker.store');
		Route::get('loker/edit/{id}', 'edit')->name('loker.edit');
		Route::post('loker/update/{id}', 'update')->name('loker.update');
		Route::get('loker/detail/{id}', 'detail')->name('loker.detail');
		Route::get('loker/destroy/{id}', 'destroy')->name('loker.destroy');
	});
	// END DATA LOKER ADMIN

	// DATA EVENT ADMIN
	Route::controller(c_event::class)->group(function () {
		Route::get('event', 'index')->name('event.index');
		Route::get('event/create', 'create')->name('event.create');
		Route::post('event/store', 'store')->name('event.store');
		Route::get('event/edit/{id}', 'edit')->name('event.edit');
		Route::post('event/update/{id}', 'update')->name('event.update');
		Route::get('event/detail/{id}', 'detail')->name('event.detail');
		Route::get('event/destroy/{id}', 'destroy')->name('event.destroy');
	});
	// END DATA EVENT ADMIN

	// DATA BERITA ADMIN
	Route::controller(c_berita::class)->group(function () {
		Route::get('berita', 'index')->name('berita.index');
		Route::get('berita/create', 'create')->name('berita.create');
		Route::post('berita/store', 'store')->name('berita.store');
		Route::get('berita/edit/{id}', 'edit')->name('berita.edit');
		Route::post('berita/update/{id}', 'update')->name('berita.update');
		Route::get('berita/detail/{id}', 'detail')->name('berita.detail');
		Route::get('berita/destroy/{id}', 'destroy')->name('berita.destroy');
	});
	// END DATA BERITA ADMIN

	// DATA ADS ADMIN
	Route::controller(c_ads::class)->group(function () {
		Route::get('ads', 'index')->name('ads.index');
		Route::get('ads/create', 'create')->name('ads.create');
		Route::post('ads/store', 'store')->name('ads.store');
		Route::get('ads/edit/{id}', 'edit')->name('ads.edit');
		Route::post('ads/update/{id}', 'update')->name('ads.update');
		Route::get('ads/detail/{id}', 'detail')->name('ads.detail');
	});
	// END DATA ADS ADMIN
// END KHUSUS ADMIN



// WIRAUSAHA MUDA
Route::controller(c_bio::class)->group(function () {
	Route::get('wiramuda/bio', 'index')->name('wiramuda.bio');
	Route::post('wiramuda/updatebio', 'updateBio')->name('wiramuda.updatebio');
	Route::get('wiramuda/usaha', 'usaha')->name('wiramuda.usaha');
	Route::get('wiramuda/create', 'create')->name('wiramuda.create');
	Route::get('wiramuda/edit/{id}', 'edit')->name('wiramuda.edit');
	Route::get('wiramuda/destroy{id}', 'destroy')->name('wiramuda.destroy');
	Route::post('wiramuda/update{id}', 'update')->name('wiramuda.update');
	Route::post('wiramuda/store', 'store')->name('wiramuda.store');
});

// END WIRAUSAHA MUDA


// User Umum
Route::controller(c_user_umum::class)->group(function () {
    Route::get('umum/bio', 'bio')->name('umum.bio');
	Route::post('umum/updatebio', 'updatebio')->name('umum.updatebio');
});

// Pemuda Pelopor
Route::controller(c_pemuda_pelopor::class)->group(function () {
    Route::get('pelopor/bio', 'bio')->name('pelopor.bio');
	Route::post('pelopor/updatebio', 'updatebio')->name('pelopor.updatebio');
});

// OKP
Route::controller(c_okpu::class)->group(function () {
    Route::get('okp/bio', 'bio')->name('okp.bio');
	Route::get('okp/dketua', 'dketua')->name('okp.dketua');
	Route::post('okp/updatebio', 'updatebio')->name('okp.updatebio');
	Route::post('okp/uketua', 'uketua')->name('okp.uketua');
	Route::get('okp/dsekretaris', 'dsekretaris')->name('okp.dsekretaris');
	Route::post('okp/usekretaris', 'usekretaris')->name('okp.usekretaris');
	Route::get('okp/dbendahara', 'dbendahara')->name('okp.dbendahara');
	Route::post('okp/ubendahara', 'ubendahara')->name('okp.ubendahara');
	Route::get('okp/dlainya', 'dlainya')->name('okp.dlainya');
	Route::post('okp/ulainya', 'ulainya')->name('okp.ulainya');
	
});

// Data Pendukung
Route::controller(c_data::class)->group(function () {
    Route::get('datau', 'index')->name('data');
	Route::get('data/destroy/{id}', 'destroy')->name('data.destroy');
	Route::post('data/store', 'store')->name('data.store');
});

// Data Pendukung
Route::controller(c_data_pemuda::class)->group(function () {
    Route::get('pemuda', 'index')->name('pemuda');
	Route::get('pemuda/create', 'create')->name('pemuda.create');
	Route::post('pemuda/store', 'store')->name('pemuda.store');
	Route::get('pemuda/edit/{id}', 'edit')->name('pemuda.edit');
	Route::post('pemuda/update/{id}', 'update')->name('pemuda.update');
	Route::get('pemuda/destroy/{id}', 'destroy')->name('pemuda.destroy');
});

// Data Pendukung
Route::controller(c_lokeru::class)->group(function () {
    Route::get('lokeru', 'index')->name('lokeru');
	Route::get('lokeru/detail/{id}', 'detail')->name('lokeru.detail');
	Route::post('lokeru/store/{id}', 'store')->name('lokeru.store');
	Route::get('lokeru/histori', 'histori')->name('lokeru.histori');
	Route::get('test', 'test')->name('test');
});

// Data Event
Route::controller(c_eventu::class)->group(function () {
    Route::get('eventu', 'index')->name('eventu');
	Route::get('eventu/detail/{id}', 'detail')->name('eventu.detail');
	Route::post('eventu/store/{id}', 'store')->name('eventu.store');
	Route::get('eventu/histori', 'histori')->name('eventu.histori');
});
// Data Event
Route::controller(c_landing_page::class)->group(function () {
    Route::get('/', 'home');
	Route::get('chart/{id}', 'chart');
	Route::get('lwm', 'lwm')->name('wm.landingpage');
	Route::get('lwm/detail/{id}', 'wirausahadetail')->name('wm.landing.detail');

	// Loker
	Route::get('loker-utama', 'loker')->name('loker.landingPage');
	Route::get('loker-utama/detail/{id}', 'lokerDetail')->name('loker.landingPage.detail');
	// end Loker

	// Pemuda
	Route::get('pemuda-utama', 'pemuda')->name('pemuda.landingPage');
	Route::get('pemuda-utama/detail/{id}', 'pemudaDetail')->name('pemuda.landingPage.detail');
	// end Pemuda

	// OKP
	Route::get('okp-utama', 'okp')->name('okp.landingPage');
	Route::get('okp-utama/detail/{id}', 'okpDetail')->name('okp.landingPage.detail');
	// end OKP

	// Event
	Route::get('event-utama', 'event')->name('event.landingPage');
	Route::get('event-utama/detail/{id}', 'eventDetail')->name('event.landingPage.detail');
	// end Event

	// berita
	Route::get('berita-utama', 'berita')->name('berita.landingPage');
	Route::get('berita-utama/detail/{id}', 'beritaDetail')->name('berita.landingPage.detail');
	// end berita
});

// Data Event
Route::controller(c_password::class)->group(function () {

	Route::post('password/{id}', 'password')->name('password');

});
// END User Umum
