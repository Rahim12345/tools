<?php

//1.Controllerde
DB::table('articles')->select()->paginate(10);

//2.viewda
{!! $data->links() !!}

//3.App/Providers/AppServiceProvider da
use Illuminate\Pagination\Paginator;

public function boot()
{
    Paginator::useBootstrap();
}
