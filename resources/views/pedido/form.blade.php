<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fecha_Pedido') }}
            {{ Form::text('Fecha_Pedido', $pedido->Fecha_Pedido, ['class' => 'form-control' . ($errors->has('Fecha_Pedido') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Pedido']) }}
            {!! $errors->first('Fecha_Pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_Entrega') }}
            {{ Form::text('Fecha_Entrega', $pedido->Fecha_Entrega, ['class' => 'form-control' . ($errors->has('Fecha_Entrega') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Entrega']) }}
            {!! $errors->first('Fecha_Entrega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Proveedor') }}
            {{ Form::text('id_Proveedor', $pedido->id_Proveedor, ['class' => 'form-control' . ($errors->has('id_Proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Id Proveedor']) }}
            {!! $errors->first('id_Proveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>