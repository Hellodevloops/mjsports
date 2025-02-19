<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use App\Models\Post;
use App\Models\Career;
// use App\Models\Category;
use App\Models\Contact;
use App\Models\About;
// use App\Models\Service;
// use App\Models\Product;
use App\Models\Banner;
use App\Models\Jersey;
use App\Models\Home;
use App\Models\Essential;
use App\Models\Company;
use App\Models\Testimonial;
use Orchid\Support\Color;
// use App\Models\Team;
// use App\Models\Batch;
// use App\Models\Appointment;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Dashboard $dashboard
     *
     * @return void
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * Register the application menu.
     *
     * @return Menu[]
     */
    public function menu(): array
    {

        $postcount = Post::count();
        // $careercount = Career::count();
        $contactcount = Contact::count();
        // $appointmentcount = Appointment::count();
        $aboutcount = About::count();
        // $categorycount = Category::count();
        // $productcount = Product::count();
        $jerseycount = Jersey::count();
        // $servicecount = Service::count();
        // $essentialcount = Essential::count();
        // $companycount = Company::count();
        $testimonialcount = Testimonial::count();
        // $teamcount = Team::count();
        // $batchcount = Batch::count();
        // $testimonialcount = Testimonial::count();
        return [
            // Menu::make('Get Started')
            //     ->icon('bs.book')

            //     ->route(config('platform.index')),

                Menu::make('Dashboard')
                ->icon('bs.collection')
                ->title('Navigation')
                ->route('platform.example'),

            // Menu::make('Home')
            //     ->icon('bs.layers')
            //     ->route('platform.home.list')
            //     ->badge(fn () =>  $homecount),
            // Menu::make('Essential')
            //     ->icon('bs.layers')
            //     ->route('platform.essential.list')
            //     ->badge(fn () =>  $essentialcount),
            // Menu::make('Company')
            //     ->icon('bs.bar-chart')
            //     ->route('platform.company.list')
            //     ->badge(fn () =>  $companycount),

            Menu::make('Post')
            ->icon('bs.quote')
                ->route('platform.post.list')
                ->badge(fn () =>  $postcount),
            // Menu::make('Career')
            //     ->icon('bs.collection')
            //     ->route('platform.career.list')
            //     ->badge(fn () =>  $careercount),
            Menu::make('Contact')
                ->icon('bs.phone')
                ->route('platform.contact.list')
                ->badge(fn () =>  $contactcount),
            // Menu::make('Appointment')
            //     ->icon('bs.phone')
            //     ->route('platform.appointment.list')
            //     ->badge(fn () =>  $appointmentcount),
            // Menu::make('About')
            //     ->icon('bs.pencil')
            //     ->route('platform.about.list')
            //     ->badge(fn () =>  $aboutcount),
            // Menu::make('Category')
            //     ->icon('bs.grid')
            //     ->route('platform.category.list')
            //     ->badge(fn () =>  $categorycount),
            // Menu::make('Product')
            //     ->icon('bs.server')
            //     ->route('platform.product.list')
            //     ->badge(fn () =>  $productcount),
            Menu::make('Custom Jersey')
                ->icon('bs.plus')
                ->route('platform.jersey.list')
                ->badge(fn () =>  $jerseycount),
            // Menu::make('Service')
            //     ->icon('bs.layers')
            //     ->route('platform.service.list')
            //     ->badge(fn () =>  $servicecount),
            // Menu::make('Testimonial')
            //     ->icon('bs.table')
            //     ->route('platform.testimonial.list')
            //     ->badge(fn () =>  $testimonialcount),

                // Menu::make('Team')
                // ->icon('bi user-follow')
                // ->route('platform.team.list')
                // ->badge(fn () =>  $teamcount),

                // Menu::make('Partner')
                // ->icon('bi user-follow')
                // ->route('platform.batch.list')
                // ->badge(fn () =>  $batchcount),



            // Menu::make('Form Elements')
            //     ->icon('bs.card-list')
            //     ->route('platform.example.fields')
            //     ->active('*/examples/form/*'),

            // Menu::make('Overview Layouts')
            //     ->icon('bs.window-sidebar')
            //     ->route('platform.example.layouts'),

            // Menu::make('Grid System')
            //     ->icon('bs.columns-gap')
            //     ->route('platform.example.grid'),

            // Menu::make('Charts')
            //     ->icon('bs.bar-chart')
            //     ->route('platform.example.charts'),

            // Menu::make('Cards')
            //     ->icon('bs.card-text')
            //     ->route('platform.example.cards')
            //     ->divider(),

            Menu::make(__('Users'))
                ->icon('bs.people')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access Controls')),

            Menu::make(__('Roles'))
                ->icon('bs.shield')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles')
                ->divider(),

            // Menu::make('Documentation')
            //     ->title('Docs')
            //     ->icon('bs.box-arrow-up-right')
            //     ->url('https://orchid.software/en/docs')
            //     ->target('_blank'),

            // Menu::make('Changelog')
            //     ->icon('bs.box-arrow-up-right')
            //     ->url('https://github.com/orchidsoftware/platform/blob/master/CHANGELOG.md')
            //     ->target('_blank')
            //     ->badge(fn () => Dashboard::version(), Color::DARK),
        ];
    }

    /**
     * Register permissions for the application.
     *
     * @return ItemPermission[]
     */
    public function permissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
