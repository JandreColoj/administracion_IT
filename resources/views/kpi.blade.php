@extends('layouts.app')

@section('content')
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">

    @include('layouts.menu')

    <main class="mdl-layout__content" ng-controller="InicioCtrl" ng-cloak >

        <div class="row p-raw">
            <div class="col-md-4 trending">
                <div class="mdl-card p-s">
                    <form name="f1"> 
                        <ul>
                            <li>
                                <div class="circle">
                                    <img src= "{{asset('images/mysql.jpg')}}"/>
                                </div>
                                <h4>Mysql</h4>
                                <input id="Mysql" type="checkbox" ng-click="seleccionar('Mysql')" checked/>
                                <label for="Mysql" ><i class="fa fa-check"></i></label>
                            </li>
                            <li>
                                <div class="circle"><img src= "{{asset('images/postgres.jpeg')}}"/>
                                </div>
                                <h4>Postgres</h4>
                                <input id="Postgres" type="checkbox" ng-click="seleccionar('Postgres')"/>
                                <label for="Postgres"><i class="fa fa-check" ></i></label>
                            </li>
                            <li>
                                <div class="circle"><img src= "{{asset('images/sqlserver.png')}}"/>
                                </div>
                                <h4>SQLServer</h4>
                                <input id="SQLServer" type="checkbox" ng-click="seleccionar('SQLServer')"/>
                                <label for="SQLServer"><i class="fa fa-check"></i></label>
                            </li>
                            <li >
                                <div class="circle"><img src= "{{asset('images/oracle.png')}}"/>
                                </div>
                                <h4>Oracle</h4>
                                <input id="Oracle" type="checkbox" ng-click="seleccionar('Oracle')"/>
                                <label for="Oracle"><i class="fa fa-check"></i></label>
                            </li>
                        </ul>
                    </form> 
                </div>
            </div>
            
            <div class="col-md-4 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Filtros</h2>
                </div>
                <div class="mdl-card">
                    <form name="frm" class="content_filtro">
                        <div class="col-md-12">
                            <label for="">Fecha inicial:</label>
                            <input type="date" class="form-control" name="fini" ng-model="filtro.finicio" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">Fecha final:</label>
                            <input type="date" class="form-control" name="ffin" ng-model="filtro.ffin" required>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn_filtro" ng-click="calculoImpuestos()" ng-disabled="frm.$invalid">Filtrar</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-md-4 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Ventas</h2>
                </div>
                <div class="mdl-card">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>

        <!-- segunda linea  -->
        <div class="row p-raw">
            <div class="col-md-6 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text"></h2>
                </div>
                <div class="mdl-card">
                    <canvas id="line-chart" width="800" height="450"></canvas>
                </div>
            </div>

            <div class="col-md-6 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text"></h2>
                </div>
                <div class="mdl-card">
                    <canvas id="line-chart2" width="800" height="450"></canvas>
                </div>
            </div>
        </div>
        <!-- tercera linea -->
        <div class="row p-raw">
            <div class="col-md-4 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text"></h2>
                </div>
                <div class="mdl-card">
                    <canvas id="pie-chart" width="800" height="450"></canvas>
                </div>
            </div>

            <div class="col-md-4 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text"></h2>
                </div>
                <div class="mdl-card">
                   <canvas id="polar-chart" width="800" height="450"></canvas>
                </div>
            </div>
            <div class="col-md-4 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text"></h2>
                </div>
                <div class="mdl-card">
                    <canvas id="doughnut-chart" width="800" height="450"></canvas>
                </div>
            </div>
        </div>


        <!-- Cuarta linea  -->
        <div class="row p-raw">
            <div class="col-md-6 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text"></h2>
                </div>
                <div class="mdl-card">
                     <canvas id="bar-chart-horizontal" width="800" height="450"></canvas>
                </div>
            </div>
            <div class="col-md-6 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text"></h2>
                </div>
                <div class="mdl-card">
                    <canvas id="bar-chart-grouped" width="800" height="450"></canvas>
                </div>
            </div>
        </div>
    </main>
    
</div>

@endsection

@push('scripts')
    <script type="text/javascript" src="{{asset('js/Controllers/inicio.js')}}"></script>
@endpush
