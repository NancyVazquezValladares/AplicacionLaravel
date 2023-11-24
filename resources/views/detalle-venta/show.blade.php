@extends('layouts.app')

@section('template_title')
    {{ $detalleVenta->name ?? "{{ __('Show') Detalle Venta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-ventas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $detalleVenta->Producto }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $detalleVenta->Precio }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $detalleVenta->Total }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $detalleVenta->Monto }}
                        </div>
                        <div class="form-group">
                            <strong>Resto:</strong>
                            {{ $detalleVenta->Resto }}
                        </div>
                        <div class="form-group">
                            <strong>Id Venta:</strong>
                            {{ $detalleVenta->id_Venta }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $detalleVenta->id_Cliente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
