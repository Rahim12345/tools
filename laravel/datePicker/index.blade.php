@extends('backend.layout.app')

@section('title')

@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endsection

@section('content')
<div class="row ml-auto mr-auto" style="margin-top: 100px;">
    <div class="shadow p-3 mb-3 bg-white rounded" style="width: 100%">
        <input type="text" class="float-right" name="daterange" value="{{ date('m').'/'.date('d/Y') }} - {{ date('m/d/Y') }}" onkeydown="return false" />
        <div style="width: 100%;">
            {!! $chart->container() !!}
        </div>
    </div>
</div>
<div class="row ml-auto mr-auto">
    <div class="shadow p-3 mb-3 bg-white rounded col-xl-6">
        1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto blanditiis consectetur dolores ducimus, enim explicabo incidunt molestias quasi vel! Accusantium, culpa dolor et facilis molestias quisquam sapiente similique sunt?
    </div>
    <div class="shadow p-3 mb-3 bg-white rounded col-xl-6">
        2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto blanditiis consectetur dolores ducimus, enim explicabo incidunt molestias quasi vel! Accusantium, culpa dolor et facilis molestias quisquam sapiente similique sunt?
    </div>
</div>
@endsection

@section('js')
{!! $chart->script() !!}
<script>
    $(document).ready(function (){
        $(function()
        {

            $('input[name="daterange"]').daterangepicker({
                    startDate: moment().subtract(7 ,'days'),
                    endDate: moment(),
                    minDate: '01/01/2018',
                    maxDate: {dateFormat:"dd/mm/yy"},
                    dateLimit: { days: 30 },
                    showDropdowns: true,
                    showWeekNumbers: true,
                    timePicker: false,
                    timePickerIncrement: 1,
                    timePicker12Hour: true,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1 ,'days'), moment().subtract(1,'days')],
                        'Last 7 Days': [moment().subtract(6,'days'), moment()],
                        'Last 30 Days': [moment().subtract(29,'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1,'month').startOf('month'), moment().subtract(1,'month').endOf('month')]
                    },
                    opens: 'left',
                    buttonClasses: ['btn btn-default'],
                    applyClass: 'btn-small btn-primary',
                    cancelClass: 'btn-small',
                    format: 'DD/MM/YYYY',
                    separator: ' to ',
                    locale: {
                        applyLabel: 'Submit',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom Range',
                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        firstDay: 1
                    }
            },
            function(start, end)
            {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                var startdate   = start.format('YYYY-MM-DD');
                var stopdate    = end.format('YYYY-MM-DD');
                $.ajax({
                    type:'POST',
                    url:'./dashboard',
                    data:{startdate:startdate,stopdate:stopdate,"_token": "{{ csrf_token() }}"},
                    success:function (response)
                    {
                        alert(response);
                    },
                    error:function (myErrors)
                    {
                        var myerr = '';
                        $.each(myErrors.responseJSON.errors, function (key, item)
                        {
                            myerr += item;
                        });

                        alert(myerr);
                    }
                });
            });
        });
    });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
@endsection
