@extends('layouts.app')

@section('template_title')
    {{ $proveedor->name ?? "{{ __('Show') Proveedor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Proveedor:</strong>
                            {{ $proveedor->Nombre_Proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $proveedor->Contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Id Marca:</strong>
                            {{ $proveedor->id_Marca }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
