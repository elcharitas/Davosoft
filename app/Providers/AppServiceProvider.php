<?php

namespace App\Providers;

use Blade;
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
        Blade::directive('title', function ($exp) {
            
            if(empty($exp)){
                return '<?php echo $title ?? config("app.name"); ?>';
            }
            
            return "<?php \$title = $exp; ?>";
        });
    }
}
