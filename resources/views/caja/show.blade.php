@extends('layouts.app')

@section('template_title')
    {{ $caja->name ?? "{{ __('Show') Caja" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Caja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cajas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Saldo Inicial:</strong>
                            {{ $caja->Saldo_Inicial }}
                        </div>
                        <div class="form-group">
                            <strong>Saldo Final:</strong>
                            {{ $caja->Saldo_Final }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $caja->id_Empleado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
