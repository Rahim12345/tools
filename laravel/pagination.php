<?php

//1.Controllerde
articles::paginate(10)->onEachSide(5);

//2.viewda
{!! $data->links() !!}

//3.App/Providers/AppServiceProvider da
use Illuminate\Pagination\Paginator;

public function boot()
{
    Paginator::useBootstrap();
}
