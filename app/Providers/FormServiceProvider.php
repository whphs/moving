<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Form::component('inputGroup', 'components.form.input', ['name', 'title', 'value' => null, 'type' => 'text', 'attributes' => []]);
        Form::component('alert', 'components.form.alert', ['status', 'message']);
        Form::component('statusAlert', 'components.form.status-alert', ['status']);
        Form::component('selectGroup', 'components.form.select', ['name', 'title', 'list', 'selected' => null, 'attributes' => []]);
    }
}
