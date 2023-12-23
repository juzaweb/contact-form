<?php

namespace Juzaweb\ContactForm\Providers;

use Juzaweb\CMS\Support\ServiceProvider;
use Juzaweb\ContactForm\Actions\MenuAction;
use Juzaweb\ContactForm\Repositories;

class ContactFormServiceProvider extends ServiceProvider
{
    public array $bindings = [
        Repositories\ContactRepository::class => Repositories\ContactRepositoryEloquent::class,
    ];

    public function boot(): void
    {
        $this->registerHookActions([MenuAction::class]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }
}
