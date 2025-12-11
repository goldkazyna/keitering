<?php
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
// Главная страница
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Города
Route::get('/almaty', function () {
    return view('pages.almaty.index');
})->name('almaty');

Route::get('/almaty/coffee-break', function () {
    return view('pages.almaty.coffee-break');
})->name('almaty.coffee-break');

Route::get('/almaty/furshet', function () {
    return view('pages.almaty.furshet');
})->name('almaty.furshet');

Route::get('/almaty/banket', function () {
    return view('pages.almaty.banket');
})->name('almaty.banket');

Route::get('/astana', function () {
    return view('pages.astana.index');
})->name('astana');

Route::get('/astana/coffee-break', function () {
    return view('pages.astana.coffee-break');
})->name('astana.coffee-break');

Route::get('/astana/furshet', function () {
    return view('pages.astana.furshet');
})->name('astana.furshet');

Route::get('/astana/banket', function () {
    return view('pages.astana.banket');
})->name('astana.banket');

// Услуги
Route::get('/uslugi', function () {
    return view('pages.uslugi.index');
})->name('uslugi');

// Кофе брейк
Route::get('/uslugi/coffee-break', function () {
    return view('pages.uslugi.coffee-break.index');
})->name('uslugi.coffee-break');

Route::get('/uslugi/coffee-break/menu', function () {
    return view('pages.uslugi.coffee-break.menu');
})->name('uslugi.coffee-break.menu');

Route::get('/uslugi/coffee-break/almaty', function () {
    return view('pages.uslugi.coffee-break.almaty');
})->name('uslugi.coffee-break.almaty');

Route::get('/uslugi/coffee-break/astana', function () {
    return view('pages.uslugi.coffee-break.astana');
})->name('uslugi.coffee-break.astana');

// Фуршет
Route::get('/uslugi/furshet', function () {
    return view('pages.uslugi.furshet.index');
})->name('uslugi.furshet');

Route::get('/uslugi/furshet/menu', function () {
    return view('pages.uslugi.furshet.menu');
})->name('uslugi.furshet.menu');

Route::get('/uslugi/furshet/almaty', function () {
    return view('pages.uslugi.furshet.almaty');
})->name('uslugi.furshet.almaty');

Route::get('/uslugi/furshet/astana', function () {
    return view('pages.uslugi.furshet.astana');
})->name('uslugi.furshet.astana');

Route::get('/uslugi/furshet/nedorogo', function () {
    return view('pages.uslugi.furshet.nedorogo');
})->name('uslugi.furshet.nedorogo');

// Банкет
Route::get('/uslugi/banket', function () {
    return view('pages.uslugi.banket.index');
})->name('uslugi.banket');

Route::get('/uslugi/banket/menu', function () {
    return view('pages.uslugi.banket.menu');
})->name('uslugi.banket.menu');

Route::get('/uslugi/banket/almaty', function () {
    return view('pages.uslugi.banket.almaty');
})->name('uslugi.banket.almaty');

Route::get('/uslugi/banket/astana', function () {
    return view('pages.uslugi.banket.astana');
})->name('uslugi.banket.astana');

Route::get('/uslugi/banket/nedorogo', function () {
    return view('pages.uslugi.banket.nedorogo');
})->name('uslugi.banket.nedorogo');
Route::get('/uslugi/arenda-oborudovaniya', function () {
    return view('pages.uslugi.arenda-oborudovaniya');
})->name('uslugi.arenda-oborudovaniya');
// Выездной кейтеринг
Route::get('/uslugi/vyezdnoy-keitering', function () {
    return view('pages.uslugi.vyezdnoy-keitering');
})->name('uslugi.vyezdnoy-keitering');

// Меню
Route::get('/menu', function () {
    return view('pages.menu.index');
})->name('menu');

Route::get('/menu/coffee-break', function () {
    return view('pages.menu.coffee-break');
})->name('menu.coffee-break');

Route::get('/menu/furshet', function () {
    return view('pages.menu.furshet');
})->name('menu.furshet');

Route::get('/menu/banket', function () {
    return view('pages.menu.banket');
})->name('menu.banket');

// Цены
Route::get('/ceny', function () {
    return view('pages.ceny.index');
})->name('ceny');

Route::get('/ceny/almaty', function () {
    return view('pages.ceny.almaty');
})->name('ceny.almaty');

Route::get('/ceny/astana', function () {
    return view('pages.ceny.astana');
})->name('ceny.astana');

// Остальные страницы
Route::get('/o-kompanii', function () {
    return view('pages.o-kompanii');
})->name('o-kompanii');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/kontakty', function () {
    return view('pages.kontakty');
})->name('kontakty');

Route::get('/zakazat', function () {
    return view('pages.zakazat');
})->name('zakazat');

// Страницы услуг с выбором города
Route::get('/uslugi/services/coffee-break', function () {
    return view('pages.services.coffee-break');
})->name('services.coffee-break');

Route::get('/uslugi/services/furshet', function () {
    return view('pages.services.furshet');
})->name('services.furshet');

Route::get('/uslugi/services/banket', function () {
    return view('pages.services.banket');
})->name('services.banket');

// Страницы цен
Route::get('/almaty/prices', function () {
    return view('pages.almaty.prices');
})->name('almaty.prices');

Route::get('/astana/prices', function () {
    return view('pages.astana.prices');
})->name('astana.prices');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
// Админ-панель
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login.submit');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
		Route::resource('news', App\Http\Controllers\Admin\NewsController::class);
	// CRUD для портфолио
		Route::resource('portfolio-categories', App\Http\Controllers\Admin\PortfolioCategoryController::class);
		
		// Управление изображениями портфолио
		Route::post('/portfolio-categories/{category}/images', [App\Http\Controllers\Admin\PortfolioImageController::class, 'store'])
			->name('portfolio-images.store');
		Route::delete('/portfolio-images/{image}', [App\Http\Controllers\Admin\PortfolioImageController::class, 'destroy'])
			->name('portfolio-images.destroy');
		Route::post('/portfolio-categories/{category}/images/reorder', [App\Http\Controllers\Admin\PortfolioImageController::class, 'updateOrder'])
			->name('portfolio-images.reorder');		
        Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    });
});

Route::redirect('/furshet', '/uslugi/furshet', 301);

