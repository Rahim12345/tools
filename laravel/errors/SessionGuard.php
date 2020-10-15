<?php
/**
 * Argument 1 passed to Illuminate\Auth\SessionGuard::login() must implement interface Illuminate\Contracts\Auth\Authenticatable, instance of App\Models\users given, 
 * called in C:\wamp64\www\emrah\vendor\laravel\framework\src\Illuminate\Auth\AuthManager.php on line 307
 */

 /**
  * Solution 
  * 1.uyğun modelə ən yuxarı
  * use Illuminate\Foundation\Auth\User as Authenticatable; əlavə edirik
  *
  * 2.class users extends Model burda Modeli silib yerinə Authenticatable yaziriq
  */