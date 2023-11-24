<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_Proveedor') }}
            {{ Form::text('Nombre_Proveedor', $proveedor->Nombre_Proveedor, ['class' => 'form-control' . ($errors->has('Nombre_Proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Proveedor']) }}
            {!! $errors->first('Nombre_Proveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contacto') }}
            {{ Form::text('Contacto', $proveedor->Contacto, ['class' => 'form-control' . ($errors->has('Contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('Contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Marca') }}
            {{ Form::text('id_Marca', $proveedor->id_Marca, ['class' => 'form-control' . ($errors->has('id_Marca') ? ' is-invalid' : ''), 'placeholder' => 'Id Marca']) }}
            {!! $errors->first('id_Marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>