@extends('layouts.app')

@section('title')
    example - 2
@endsection

@section('css')

@endsection

@section('content')
<div style="margin-top: 20px;padding-top: 10px;">
    <table class="table table-condensed" id="sss">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Creation</th>
            <th>Update</th>
            <th>Intro</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>
</div>
@endsection

@section('js')
<!--ajax: '{!! route('datatables.getBasicObjectData') !!}',-->
    <script>
        $(document).ready(function(){
            $('#sss').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('datatables.getBasicObjectData') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'intro', name: 'intro', orderable: false,searchable: true},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend:"excelHtml5",
                        title:`Schoolmaster FY20 Enrollment History`,
                        exportOptions: {
                            columns: [ 0, 1, 2] ,
                        }
                    },
                    {
                        extend:"print",
                        title:`Schoolmaster FY20 Enrollment History`,
                        exportOptions: {
                            columns: [ 0, 1, 2] ,
                        }
                    },
                    {
                        extend:"pdf",
                        title:`Schoolmaster FY20 Enrollment History`,
                        exportOptions: {
                            columns: [ 0, 1, 2] ,
                        }
                    }
                ],
                columnDefs: [ {
                    targets: -1,
                    visible: false
                } ]
            });



            $(document).on('click','a.myEdit',function(){
                var href    = $(this).attr('href');

                alert(href.split('-')[1]);
            });
        });

    </script>
@endsection
