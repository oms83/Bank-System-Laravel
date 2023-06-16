@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-md-12 h6">
        Banks
    </div>
    <div class="col-md-12">
        <div class="row">
        @foreach ($bankAccounts as $bankAccount)

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card" style="border-radius:10px !important">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-7">
                                <div>Bank Name.</div>
                                <div class="h6">{{ $bankAccount->bank->name }} {{ $bankAccount->bank_location->name }}</div>

                                <br/>

                                <div>Account Name.</div>
                                <div class="h6">{{ $bankAccount->name }}</div>

                                <div>Account No.</div>
                                <div class="h6">{{ $bankAccount->number }}</div>

                            </div>
                            <div class="col-sm-12 col-md-5 text-right">
                                @if(!empty($bankAccount->bank->picture))
                                    <img src="{{ $bankAccount->bank->picture }}" alt="{{ $bankAccount->bank->name }}" class="rounded-circle" width="50" height="50">
                                @endif

                                <br/>
                                <br/>

                                <div>Ledger Balance.</div>
                                <div class="h6 text-muted">{{ $bankAccount->bank_location->currency->symbol }} {{ $bankAccount->ledger_balance }}</div>

                                <div>Available Balance.</div>
                                <div class="h6">{{ $bankAccount->bank_location->currency->symbol }} {{ $bankAccount->available_balance }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
        </div>

    </div>
</div>

<!-- ============================================================== -->
<!-- Sales chart -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="d-md-flex align-items-center">
                    <div>
                        <h4 class="card-title">Deposit</h4>
                        <h5 class="card-subtitle">Overview of Last 7days</h5>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <canvas id="depositsChart" width="400" height="200"></canvas>
                    </div>
                    <!-- column -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Expenses</h4>
                <h5 class="card-subtitle">Overview of Last 7days</h5>
                <canvas id="expensesChart" width="400" height="300"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Sales chart -->
<!-- ============================================================== -->


@endsection

@section('custom-script')

<script>

function loadDepositChart(){

    var ctx = document.getElementById('depositsChart').getContext('2d');
    var myLineChart = new Chart(ctx,{
        "type":"line",
        "data":{
            "labels":[
                @foreach($bankDepositDates as $bankDepositDate)
                    '{{$bankDepositDate->format('D d M, Y')}}',
                @endforeach
            ],
            "datasets":[
                {
                    "label":"Amount","data":[
                        @foreach($bankDepositAmounts as $bankDepositAmount)
                            '{{$bankDepositAmount}}',
                        @endforeach
                    ],
                    "fill":true,
                    "borderColor":"rgb(254, 121, 79)",
                    "lineTension":0.1
                }
            ]
        },
        "options":{

        }
    });


}


function loadExpensesChart(){

    var ctx = document.getElementById('expensesChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                @foreach($bankExpensesDates as $bankExpensesDate)
                    '{{$bankExpensesDate->format('D d M, Y')}}',
                @endforeach
            ],
            datasets: [{
                label: 'Amount',
                data: [
                    @foreach($bankExpensesAmounts as $bankExpensesAmount)
                        '{{$bankExpensesAmount}}',
                    @endforeach
                ],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 0.5
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

}




loadDepositChart();
loadExpensesChart();


</script>

@endsection
