@extends('back.layout.master')

@section('title')
Education
@endsection

@section('css')

@endsection

@section('content')
@livewire('educations')
@endsection

@section('js')
<script>
    window.addEventListener('closeAddModal', event => {
        $("#closeEducationModal").click();

        toastr[event.detail.type](event.detail.message,
            event.detail.title ?? '');
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
        }
    });

    window.addEventListener('educationUpdate', event => {
        $("#educationUpdateModal").click();

        toastr[event.detail.type](event.detail.message,
            event.detail.title ?? '');
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
        }
    });
</script>
@endsection
