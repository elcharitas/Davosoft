<?php

namespace App\Providers;

use Str, Blade, Route, View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * A Closure Based blade directive to set/retrieve the current title
         */
        Blade::directive('title', function ($exp) {
            
            if(empty($exp)){
                return '<?php echo $title ?? config("app.name"); ?>';
            }
            
            return "<?php \$title = $exp; ?>";
        });
        
        /**
         * We need some variables to be global & some headers shared
         */
        View::composer('*', function ($view) {
            $view->with('route', Str::of(Route::currentRouteName()));
        });
    }
}
