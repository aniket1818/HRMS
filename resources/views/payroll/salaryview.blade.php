@extends('layouts.exportmaster')

@section('content')
<!-- Page Wrapper -->
<div class="">
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid" id="app">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-auto float-right ml-auto">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-white">CSV</button>
                            <button class="btn btn-white"><a href="" @click.prevent="printme" target="_blank">PDF</a></button>
                            <button class="btn btn-white"><i class="fa fa-print fa-lg"></i><a href="" @click.prevent="printme" target="_blank"> Print</a></button>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-left: -240px;">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="payslip-title">Payslip for the month of {{ \Carbon\Carbon::now()->format('M') }} {{ \Carbon\Carbon::now()->year }} </h4>
                                <div class="row">
                                    <div class="col-sm-6 m-b-20">
                                        @if(!empty($users->avatar))
                                        <img src="{{ URL::to('/assets/employee_image/'. $users->avatar) }}" class="inv-logo" alt="{{ $users->name }}">
                                        @endif
                                        <ul class="list-unstyled mb-0">
                                            <li class="font-weight-bold">HRMS</li>
                                            <li>Patna</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 m-b-20">
                                        <div class="invoice-details">
                                            <h3 class="text-uppercase">Payslip #49029</h3>
                                            <ul class="list-unstyled">
                                                <li>Salary Month: <span>{{ \Carbon\Carbon::now()->format('M') }} , {{ \Carbon\Carbon::now()->year }} </span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 m-b-20">
                                        <ul class="list-unstyled">
                                            <li>
                                                <h5 class="mb-0"><strong>{{ $users->name }}</strong></h5>
                                            </li>
                                            <li>Employee ID: {{ $users->rec_id }}</li>
                                            <li>Joining Date: {{ $users->join_date }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <h4 class="float-left"><strong>Earnings</strong></h4>
                                            <h4 class="float-right"><strong>Amount</strong></h4>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <?php
                                                    $a =  (int)$users->basic;
                                                    $b =  (int)$users->hra;
                                                    $c =  (int)$users->conveyance;
                                                    $e =  (int)$users->allowance;
                                                    $Total_Earnings   = $a + $b + $c + $e;
                                                    ?>
                                                    <tr>
                                                        <td>Basic Salary <span class="float-right">₹{{ $users->basic }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>House Rent Allowance (H.R.A.)<span class="float-right">₹{{ $users->hra }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Conveyance<span class="float-right">₹{{ $users->conveyance }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Other Allowance<span class="float-right">₹{{ $users->allowance }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Gross Earnings</strong> <span class="float-right"><strong>₹ <?php echo $Total_Earnings ?></strong></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <h4 class="float-left"><strong>Deductions</strong></h4>
                                            <h4 class="float-right"><strong>Amount</strong></h4>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <?php
                                                    $a =  (int)$users->tds;
                                                    $b =  (int)$users->prof_tax;
                                                    $c =  (int)$users->esi;
                                                    $e =  (int)$users->labour_welfare;
                                                    $Total_Deductions   = $a + $b + $c + $e;
                                                    ?>
                                                    <tr>
                                                        <td>Tax Deducted at Source (T.D.S.)<span class="float-right">₹{{ $users->tds }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Provident Fund<span class="float-right">₹{{ $users->prof_tax }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ESI<span class="float-right">₹{{ $users->esi }}</span></td>
                                                    </tr>
                                                    <tr>  
                                                        <td>Loan<span class="float-right">₹{{ $users->labour_welfare }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total Deductions</strong> <span class="float-right"><strong>₹<?php echo $Total_Deductions; ?></strong></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <p><strong>Net Salary: ₹{{ $users->salary }}</strong> (Sixty thousand only.)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Wrapper -->
    </div>
    @endsection