@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Different data widgets -->
            <div class="row" style="margin-top: 20px">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Solde actuel</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                            <li class="text-right"><i class="ti-arrow-up text-success"></i> <span
                                    class="counter text-success">659</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Derner credit</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                            <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span
                                    class="counter text-purple">869</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Dernier debit</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash3"></div>
                            </li>
                            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span
                                    class="counter text-info">911</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Split Operation button -->
            <div class="btn-group" style="margin-bottom: 10px">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Faire une Opération
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#" data-toggle="modal" data-target="#addCredit">Crédit</a></li>
                    <li><a href="#">Débit</a></li>
                </ul>
            </div>
            <!-- table -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                            <select class="form-control pull-right row b-none">
                                <option>March 2017</option>
                                <option>April 2017</option>
                                <option>May 2017</option>
                                <option>June 2017</option>
                                <option>July 2017</option>
                            </select>
                        </div>
                        <h3 class="box-title">Liste des Opérations</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>DATE</th>
                                        <th>TYPE</th>
                                        <th>SOLDES INIT.</th>
                                        <th>LIBELLES</th>
                                        <th>ENTREES</th>
                                        <th>SORTIES</th>
                                        <th>PIECES JOINTES</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20/20/20</td>
                                        <td><span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
                                        <td class="">200.000 F CFA</td>
                                        <td>Déplacement Africa bourse</td>
                                        <td class="">100.000 F CFA</td>
                                        <td class="">500 F CFA</td>
                                        <td><strong><i class="fa fa-file-text-o"></i></strong></td>
                                        <td>
                                            <a href="#" class="text-muted mr-3"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="text-primary mr-3"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fa fa-close"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>
            @include('Credit.modal_add')
        </div>
    </div>
@endsection
