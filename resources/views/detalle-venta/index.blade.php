@extends('layouts.app')

@section('template_title')
    Detalle Venta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle Venta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalle-ventas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Producto</th>
										<th>Precio</th>
										<th>Total</th>
										<th>Monto</th>
										<th>Resto</th>
										<th>Id Venta</th>
										<th>Id Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleVentas as $detalleVenta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalleVenta->Producto }}</td>
											<td>{{ $detalleVenta->Precio }}</td>
											<td>{{ $detalleVenta->Total }}</td>
											<td>{{ $detalleVenta->Monto }}</td>
											<td>{{ $detalleVenta->Resto }}</td>
											<td>{{ $detalleVenta->id_Venta }}</td>
											<td>{{ $detalleVenta->id_Cliente }}</td>

                                            <td>
                                                <form action="{{ route('detalle-ventas.destroy',$detalleVenta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalle-ventas.show',$detalleVenta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalle-ventas.edit',$detalleVenta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $detalleVentas->links() !!}
            </div>
        </div>
    </div>
@endsection
