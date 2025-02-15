<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleActionsScreen;
use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleGridScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;
use App\Orchid\Screens\PostEditScreen;
use App\Orchid\Screens\PostListScreen;
// use App\Orchid\Screens\CareerEditScreen;
// use App\Orchid\Screens\CareerListScreen;
use App\Orchid\Screens\ContactEditScreen;
use App\Orchid\Screens\ContactListScreen;
use App\Orchid\Screens\AboutEditScreen;
use App\Orchid\Screens\AboutListScreen;
// use App\Orchid\Screens\CategoryEditScreen;
// use App\Orchid\Screens\CategoryListScreen;
// use App\Orchid\Screens\ProductEditScreen;
// use App\Orchid\Screens\ProductListScreen;
use App\Orchid\Screens\BannerEditScreen;
use App\Orchid\Screens\BannerListScreen;
// use App\Orchid\Screens\EssentialEditScreen;
// use App\Orchid\Screens\EssentialListScreen;
use App\Orchid\Screens\HomeEditScreen;
use App\Orchid\Screens\HomeListScreen;
// use App\Orchid\Screens\CompanyEditScreen;
// use App\Orchid\Screens\CompanyListScreen;
use App\Orchid\Screens\TestimonialEditScreen;
use App\Orchid\Screens\TestimonialListScreen;
use App\Orchid\Screens\JerseyEditScreen;
use App\Orchid\Screens\JerseyListScreen;
// use App\Orchid\Screens\ServiceEditScreen; // Import the ServiceEditScreen
// use App\Orchid\Screens\ServiceListScreen;
// use App\Orchid\Screens\TeamEditScreen;
// use App\Orchid\Screens\TeamListScreen;
// use App\Orchid\Screens\BatchEditScreen;
// use App\Orchid\Screens\BatchListScreen;
// use App\Orchid\Screens\AppointmentEditScreen;
// use App\Orchid\Screens\AppointmentListScreen;
/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example Screen'));


Route::screen('/examples/form/fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('/examples/form/advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');
Route::screen('/examples/form/editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('/examples/form/actions', ExampleActionsScreen::class)->name('platform.example.actions');

Route::screen('/examples/layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('/examples/grid', ExampleGridScreen::class)->name('platform.example.grid');
Route::screen('/examples/charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('/examples/cards', ExampleCardsScreen::class)->name('platform.example.cards');

//Route::screen('idea', Idea::class, 'platform.screens.idea');

Route::screen('post/{post?}', PostEditScreen::class)
    ->name('platform.post.edit');

Route::screen('posts', PostListScreen::class)
    ->name('platform.post.list');

//     Route::screen('team/{team?}', TeamEditScreen::class)
//     ->name('platform.team.edit');

// Route::screen('teams', TeamListScreen::class)
//     ->name('platform.team.list');


// Route::screen('career/{career?}', CareerEditScreen::class)
//     ->name('platform.career.edit');

// Route::screen('careers', CareerListScreen::class)
//     ->name('platform.career.list');


 Route::screen('contact/{contact?}', ContactEditScreen::class)
    ->name('platform.contact.edit');

Route::screen('contacts', ContactListScreen::class)
    ->name('platform.contact.list');


 Route::screen('about/{about?}', AboutEditScreen::class)
    ->name('platform.about.edit');

Route::screen('abouts', AboutListScreen::class)
    ->name('platform.about.list');


// Route::screen('category/{category?}', CategoryEditScreen::class)
//     ->name('platform.category.edit');

// Route::screen('categorys', CategoryListScreen::class)
//     ->name('platform.category.list');

// Route::screen('product/{product?}', ProductEditScreen::class)
//     ->name('platform.product.edit');

// Route::screen('products', ProductListScreen::class)
//     ->name('platform.product.list');

Route::screen('banner/{banner?}', BannerEditScreen::class)
    ->name('platform.banner.edit');

Route::screen('banners', BannerListScreen::class)
    ->name('platform.banner.list');

Route::screen('home/{home?}', HomeEditScreen::class)
    ->name('platform.home.edit');

Route::screen('homes', HomeListScreen::class)
    ->name('platform.home.list');

// Route::screen('essential/{essential?}', EssentialEditScreen::class)
//     ->name('platform.essential.edit');

// Route::screen('essentials', EssentialListScreen::class)
//     ->name('platform.essential.list');

// Route::screen('company/{company?}', CompanyEditScreen::class)
//     ->name('platform.company.edit');

// Route::screen('companys', CompanyListScreen::class)
//     ->name('platform.company.list');

Route::screen('testimonial/{testimonial?}', TestimonialEditScreen::class)
    ->name('platform.testimonial.edit');

Route::screen('testimonials', TestimonialListScreen::class)
    ->name('platform.testimonial.list');

    Route::screen('jersey/{jersey?}', JerseyEditScreen::class)
    ->name('platform.jersey.edit');

Route::screen('jerseys', JerseyListScreen::class)
    ->name('platform.jersey.list');

//     Route::screen('service/{service?}', ServiceEditScreen::class) // Update to use ServiceEditScreen
//     ->name('platform.service.edit'); // Update the route name

// Route::screen('services', ServiceListScreen::class) // Update to use ServiceListScreen
//     ->name('platform.service.list'); // Update the route name

//     Route::screen('batch/{batch?}', BatchEditScreen::class)
//     ->name('platform.batch.edit');

// Route::screen('batchs', BatchListScreen::class)
//     ->name('platform.batch.list');

//     Route::screen('appointment/{appointment?}', AppointmentEditScreen::class)
//     ->name('platform.appointment.edit');

// Route::screen('appointments', AppointmentListScreen::class)
//     ->name('platform.appointment.list');
