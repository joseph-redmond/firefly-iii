@extends('layouts.default')
@section('content')
{!! Breadcrumbs::renderIfExists(Route::getCurrentRoute()->getName(), $date) !!}
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>
            <a href="#" class="btn btn-default" id="includeShared" style="display:none;">
                <i class="state-icon glyphicon glyphicon-unchecked"></i>
                Include shared asset accounts</a>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-fw fa-credit-card"></i>
                Accounts
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Account</th>
                    <th>Start of month</th>
                    <th>Current balance</th>
                    <th>Spent</th>
                    <th>Earned</th>
                </tr>
                @foreach($accounts as $account)
                    <tr>
                        <td><a href="{{route('accounts.show',$account->id)}}">{{{$account->name}}}</a></td>
                        <td>{!! Amount::format($account->startBalance) !!}</td>
                        <td>{!! Amount::format($account->endBalance) !!}</td>
                        <td>
                            @if($account->startBalance - $account->endBalance >= 0)
                                {!! Amount::format($account->startBalance - $account->endBalance) !!}
                            @endif
                        </td>
                        <td>
                            @if($account->startBalance - $account->endBalance < 0)
                                {!! Amount::format(($account->startBalance - $account->endBalance)*-1) !!}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-tasks fa-fw"></i>
                Budgets
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th colspan="2">Budgets</th>
                    <?php
                    $accountSums = [];
                    ?>
                    @foreach($accounts as $account)
                        @if($account->hide === false)
                        <th><a href="{{route('accounts.show',$account->id)}}">{{{$account->name}}}</a></th>
                        @endif
                            <?php
                            $accountSums[$account->id] = 0;
                        ?>

                    @endforeach
                    <th colspan="2">
                        Left in budget
                    </th>
                </tr>
                @foreach($budgets as $id => $budget)
                <tr>
                    <td>{{{$budget['name']}}}</td>
                    <td>{!! Amount::format($budget['amount']) !!}</td>
                    <?php $spent = 0;?>
                    @foreach($accounts as $account)
                        @if($account->hide === false)
                            @if(isset($account->budgetInformation[$id]))
                                <td>
                                    @if($id == 0)
                                    <a href="{{route('reports.no-budget',[$account, $year, $month])}}" class="openModal">
                                        {!! Amount::format($account->budgetInformation[$id]['amount']) !!}
                                    </a>
                                    @else
                                        {!! Amount::format($account->budgetInformation[$id]['amount']) !!}
                                    @endif
                                </td>
                                <?php
                                $spent += floatval($account->budgetInformation[$id]['amount']);
                                $accountSums[$account->id] += floatval($account->budgetInformation[$id]['amount']);
                                ?>
                            @else
                                <td>{!! Amount::format(0) !!}</td>
                            @endif
                        @endif
                    @endforeach
                    <td>{!! Amount::format($budget['amount'] + $budget['spent']) !!}</td>
                    <td>{!! Amount::format($budget['amount'] + $spent) !!}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="2">Balanced by transfers</td>
                    @foreach($accounts as $account)
                        @if($account->hide === false)
                            <td>
                                <a href="{{route('reports.balanced-transfers',[$account, $year, $month])}}" class="openModal">{!! Amount::format($account->balancedAmount) !!}</a>
                            </td>
                        @endif
                    @endforeach
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">Left unbalanced</td>
                    @foreach($accounts as $account)
                        <?php
                        $accountSums[$account->id] += $account->balancedAmount;
                        ?>
                        @if($account->hide === false)
                            @if(isset($account->budgetInformation[0]))
                                <td>
                                    @if($account->budgetInformation[0]['amount'] + $account->balancedAmount != 0.0)
                                        <a href="{{route('reports.left-unbalanced',[$account, $year, $month])}}" class="openModal">{!! Amount::format($account->budgetInformation[0]['amount'] + $account->balancedAmount) !!}</a>
                                    @else
                                        {!! Amount::format($account->budgetInformation[0]['amount'] + $account->balancedAmount) !!}
                                    @endif
                                </td>
                            @else
                                <td>{!! Amount::format(0) !!}</td>
                            @endif
                        @endif
                    @endforeach
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2"><em>Sum</em></td>
                    @foreach($accounts as $account)
                        @if($account->hide === false)
                            <td>{!! Amount::format($accountSums[$account->id]) !!}</td>
                        @endif
                    @endforeach
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">Expected balance</td>
                    @foreach($accounts as $account)
                        @if($account->hide === false)
                            <td>{!! Amount::format($account->startBalance + $accountSums[$account->id]) !!}</td>
                        @endif
                    @endforeach
                    <td colspan="2">&nbsp;</td>
                </tr>

            </table>
        </div>
    </div>
</div>

<!-- modal to show various budget information -->
<div class="modal fade" id="budgetModal">

</div>

@stop
@section('scripts')
    <script type="text/javascript" src="js/reports.js"></script>
@stop