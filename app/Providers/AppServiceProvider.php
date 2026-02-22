<?php

namespace App\Providers;

use Athphane\FilamentEditorjs\Facades\FilamentEditorjs;
use Athphane\FilamentEditorjs\Helpers\EditorjsHelper;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Model::unguard();

        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_END,
            fn(): string => Blade::render('@vite(\'resources/js/app.js\')'),
        );


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
