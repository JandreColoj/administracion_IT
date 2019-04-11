@extends('layouts.app')

@section('content')
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">

    @include('layouts.menu')

    <main class="mdl-layout__content" ng-controller="InicioCtrl" ng-cloak >

        <div class="row">
            <div class="col-md-4 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">VENTAS DEL MES</h2>
                </div>
                <div class="mdl-card">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            
            <div class="col-md-4 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">VENTAS DEL ANIO</h2>
                </div>
                <div class="mdl-card">
                    <canvas id="myDoughnutChart"></canvas>
                </div>
            </div>
            
            <div class="col-md-4 trending">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">VENTAS DEL ANIO</h2>
                </div>
                <div class="mdl-card">
                    <canvas id="myDoughnutChart"></canvas>
                </div>
            </div>
        </div>

    </main>
    
</div>

@endsection

@push('scripts')
    <script type="text/javascript" src="{{asset('js/Controllers/inicio.js')}}"></script>
@endpush
