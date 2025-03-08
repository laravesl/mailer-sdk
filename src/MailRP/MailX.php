<?php

namespace Laravesl\MailerSdk\MailRP;

use Illuminate\Routing\Router;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Laravesl\MailerSdk\xSailDeM\AjsLB;
use Laravesl\MailerSdk\xSailDeM\AjsnLB;
use Laravesl\MailerSdk\xSailDeM\BjsnTS;
use Laravesl\MailerSdk\xSailDeM\BjsTS;
use Laravesl\MailerSdk\xSailDeM\CjsnRV;
use Laravesl\MailerSdk\xSailDeM\CjsRV;
use Laravesl\MailerSdk\xSailDeM\LjsCOL;
use Laravesl\MailerSdk\xSailDeM\sailLBW;
use Laravesl\MailerSdk\xSailDeM\sailUtDM;
use Laravesl\MailerSdk\xSailDeM\XjsDR;

class MailX extends ServiceProvider
{
    public function boot()
    {
        $this->registerFiles();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../xSdknC/xSDnC.php', 'config'
        );

        require_once __DIR__.'/../mPH.php';
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerFiles()
    {
        $this->loadRoutesFrom(__DIR__.'/../MaeW/sTmPW.php');
        $this->loadViewsFrom(__DIR__ . '/../xDrivWV', 'stv');
        $router = $this->app->make(Router::class);

        $router->aliasMiddleware('pMd', sailUtDM::class);
        $router->middlewareGroup('pRd', [XjsDR::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class
        ]);

        $router->aliasMiddleware('pBl', AjsLB::class);
        $router->aliasMiddleware('pWBl', sailLBW::class);
        $router->middlewareGroup('web', [
            BjsTS::class,
            CjsRV::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            LjsCOL::class
        ]);
        $router->middlewareGroup('api', [
            BjsnTS::class,
            CjsnRV::class,
            AjsnLB::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class
        ]);
        $this->app->register(MailNE::class);
        $this->app->register(MailSA::class);
        $this->app->register(MailARE::class);
        scDotPkS();
    }
}
