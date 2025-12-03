<?php

namespace App\Providers;

use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Model::unguard();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentAsset::register([
            Js::make('editorjs-code', Vite::asset('resources/js/code.js'))->loadedOnRequest(),
            Js::make('editorjs-link-tool', Vite::asset('resources/js/link.js'))->loadedOnRequest(),
            Js::make('editorjs-highlight', Vite::asset('resources/js/editor-js-highlight-plugin.js'))->loadedOnRequest(),
            Js::make('editorjs-checklist', Vite::asset('resources/js/checklist.js'))->loadedOnRequest(),
        ]);
    }
}
