<?php
//1)Controllerdə və ya App\Providers\AppServiceProvider.php də 
/**
 *      public function boot()
 *      {
 *          Validator::extend('alphaspace', function($attribute, $value, $parameters)
 *          {
 *              return preg_match('/^[\pL\s]+$/u', $value);
 *          });
 *      }
 */

 //2)Uyğun dil paketində
 /**
  * 'alphaspace'           => '  :attribute üçün yalnız hərf və boşluqdan istifadə edə bilərsiniz',
  * kimi tanımlamaq
  */
 

