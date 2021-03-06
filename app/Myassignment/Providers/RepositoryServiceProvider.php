<?php
namespace App\Myassignment\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

  public function register()
  {
      $this->app->bind(
          'App\Myassignment\Repository\BasketballLeagueInterface',
          'App\Myassignment\Repository\Eloquent\BasketballLeague'
      );
  }

}