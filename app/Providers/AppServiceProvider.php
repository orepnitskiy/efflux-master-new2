<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider {
	public function register() {
    
  }
	public function boot() {
		Blade::include('_.vueLink', 'vLink');
		Blade::component('_.vueLinkGroup', 'vLinks');
    Paginator::defaultView('vendor.pagination.default');
    Paginator::defaultSimpleView('vendor.pagination.simple-default');
	}
}
