@extends('layouts.app')

@section('template_title')
    {{ $descuento->name ?? "{{ __('Show') Descuento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Descuento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('descuentos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Porcentaje:</strong>
                            {{ $descuento->Porcentaje }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $descuento->id_Producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
