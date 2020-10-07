<?php
// 1 il evvel 20 saat evvel kimi
{{\Carbon\Carbon::parse($article->created_at)->diffForHumans() }}

//migration ve migrate zamani cedvelin yaranmasi
php artisan make:migration migration_name --create=table_name

//yalniz bir seeder ise salmaq ucun
php artisan db:seed --class=testSeeder

// faker package
composer require fzaninotto/faker
// ve sonra seederin icinde asagidakilari elave edirik
Use Faker\Factory as Faker;
$faker = Faker::create();


//DB islemleri

/*
|--------------------------------------------------------------------------
| select
|--------------------------------------------------------------------------
|
*/
$users 	    = DB::select('select * from users where active = ?', [1]);

$results 	= DB::select('select * from users where id = :id', ['id' => 1]);

/*
|--------------------------------------------------------------------------
| insert
|--------------------------------------------------------------------------
|
*/
DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);

/*
|--------------------------------------------------------------------------
| update
|--------------------------------------------------------------------------
|
*/
$affected 	= DB::update('update users set votes = 100 where name = ?', ['John']);

/*
|--------------------------------------------------------------------------
| delete
|--------------------------------------------------------------------------
|
*/
$deleted 	= DB::delete('delete from users');

/*
|--------------------------------------------------------------------------
| drop
|--------------------------------------------------------------------------
|
*/
DB::statement('drop table users');

/*
|--------------------------------------------------------------------------
| users tableda * alir
|--------------------------------------------------------------------------
|
*/
$users  	= DB::table('users')->get();

/*
|--------------------------------------------------------------------------
| users tableda name = John olan setri alir
|--------------------------------------------------------------------------
|
*/
$user 	    = DB::table('users')->where('name', 'John')->first();

/*
|--------------------------------------------------------------------------
| users tableda name = John olan setirde yalniz email sutunun alir
|--------------------------------------------------------------------------
|
*/
$email 	    = DB::table('users')->where('name', 'John')->value('email');

/*
|--------------------------------------------------------------------------
| users tableda id = 3 olan setri alir
|--------------------------------------------------------------------------
|
*/
$user 	    = DB::table('users')->find(3);

/*
|--------------------------------------------------------------------------
| roles tableda butun titlelari alir
|--------------------------------------------------------------------------
|
*/
$titles 	= DB::table('roles')->pluck('title');

/*
|--------------------------------------------------------------------------
| users tableda setirlerin sayini gosterir
|--------------------------------------------------------------------------
|
*/
$users      = DB::table('users')->count();

/*
|--------------------------------------------------------------------------
| orders tableda price sutununda max qiymeti gosterir
|--------------------------------------------------------------------------
|
*/
$price      = DB::table('orders')->max('price');

$price      = DB::table('orders')
            ->where('finalized', 1)
            ->avg('price');

DB::table('orders')->where('finalized', 1)->exists();

DB::table('orders')->where('finalized', 1)->doesntExist();

DB::table('users')->select('name', 'email as user_email')->get();
DB::table('test_table')->select('name','email')->get();

    $users = DB::table('users')
                ->where('votes', '>=', 100)
                ->get();

    $users = DB::table('users')
                ->where('votes', '<>', 100)
                ->get();

    $users = DB::table('users')
                ->where('name', 'like', 'T%')
                ->get();

    $users = DB::table('users')->where([
        ['status', '=', '1'],
        ['subscribed', '<>', '1'],
    ])->get();

    $users = DB::table('users')
                    ->where('votes', '>', 100)
                    ->orWhere('name', 'John')
                    ->get();

    $users = DB::table('users')
            ->where('votes', '>', 100)
            ->orWhere(function($query) {
                $query->where('name', 'Abigail')
                      ->where('votes', '>', 50);
            })
            ->get();
// SQL: select * from users where votes > 100 or (name = 'Abigail' and votes > 50)

    $users = DB::table('users')
           ->whereBetween('votes', [1, 100])
           ->get();

    $users = DB::table('users')
                    ->whereNotBetween('votes', [1, 100])
                    ->get();



