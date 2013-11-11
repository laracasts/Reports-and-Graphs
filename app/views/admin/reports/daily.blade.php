@extends('layouts.master')

@section('content')
    <h1>Daily Reports</h1>

    <canvas id="daily-reports" width="600" height="300"></canvas>

    <h2>Drill Down</h2>

    @foreach ($totals as $index => $dailyIncome)
        <li><strong>{{ $dates[$index] }}</strong> ${{ $dailyIncome}}</li>
    @endforeach
@stop

@section('footer')
    <script src="/js/vendor/chart.min.js"></script>

    <script>
        (function() {
            var ctx = document.getElementById('daily-reports').getContext('2d');
            var chart = {
                labels: {{ json_encode($dates) }},
                datasets: [{
                    data: {{ json_encode($totals) }},
                    fillColor : "#f8b1aa",
                    strokeColor : "#bb574e",
                    pointColor : "#bb574e"
                }]
            };

            new Chart(ctx).Bar(chart, { bezierCurve: false });
        })();
    </script>
@stop
