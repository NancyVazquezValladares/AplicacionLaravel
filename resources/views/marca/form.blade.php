<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_Marca') }}
            {{ Form::text('Nombre_Marca', $marca->Nombre_Marca, ['class' => 'form-control' . ($errors->has('Nombre_Marca') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Marca']) }}
            {!! $errors->first('Nombre_Marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Producto') }}
            {{ Form::text('id_Producto', $marca->id_Producto, ['class' => 'form-control' . ($errors->has('id_Producto') ? ' is-invalid' : ''), 'placeholder' => 'Id Producto']) }}
            {!! $errors->first('id_Producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>