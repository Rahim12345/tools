@extends('layout.master')

@section('title')
Dashboard
@endsection

@section('css')
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
@endsection

@section('content')
@include('blogAdd')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Projects
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-primary col-12" data-toggle="modal" data-target="#blogAdd" data-whatever="@mdo">Add project</button>
        </div>
        <hr>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

@section('js')
<script>
    var modal = $('#blogAdd');
    modal.removeAttr('tabindex');

    modal.focusout(function(){
        $(this).css({'position':'relative'});
    });

    modal.focusin(function(){
        $(this).css({'position':'fixed'});
    });
</script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>
    CKEDITOR.replace( 'blogEn' );
    CKEDITOR.replace( 'blogAz' );
</script>

@endsection
