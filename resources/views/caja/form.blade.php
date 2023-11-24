<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Saldo_Inicial') }}
            {{ Form::text('Saldo_Inicial', $caja->Saldo_Inicial, ['class' => 'form-control' . ($errors->has('Saldo_Inicial') ? ' is-invalid' : ''), 'placeholder' => 'Saldo Inicial']) }}
            {!! $errors->first('Saldo_Inicial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Saldo_Final') }}
            {{ Form::text('Saldo_Final', $caja->Saldo_Final, ['class' => 'form-control' . ($errors->has('Saldo_Final') ? ' is-invalid' : ''), 'placeholder' => 'Saldo Final']) }}
            {!! $errors->first('Saldo_Final', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Empleado') }}
            {{ Form::text('id_Empleado', $caja->id_Empleado, ['class' => 'form-control' . ($errors->has('id_Empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
            {!! $errors->first('id_Empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>