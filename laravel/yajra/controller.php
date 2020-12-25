<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{

    protected $exportColumns = [
        ['data' => 'name', 'title' => 'Name'],
        ['data' => 'email', 'title' => 'Registered Email'],
    ];

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBasicObjectData()
    {

        $users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary myEdit"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', '{{$id}}')
            ->removeColumn('password')
            ->setRowId('id')
            ->setRowClass(function ($user) {
                return $user->id % 2 == 0 ? 'alert-success' : 'alert-warning';
            })
            ->setRowData([
                'id' => 'test',
            ])
            ->setRowAttr([
                'color' => 'red',
            ])

            ->editColumn('created_at', function($user) {
                return $user->created_at->diffForHumans();
            })

            ->editColumn('updated_at', function($user) {
                return $user->updated_at->diffForHumans();
            })

            ->addColumn('intro', function($user) {
                return view('pages.intro',[
                    'name'=>'hdd -'.$user->name,
                    ]);
            })

            ->rawColumns(['name','intro','action'])

            ->make(true);


    }



    public function getBasicObject()
    {
        return view('pages.ex2');
    }
}
