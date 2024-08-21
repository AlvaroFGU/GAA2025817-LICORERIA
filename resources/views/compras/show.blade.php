@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">Detalles de la Compra</div>
                <div class="card-body">
                    <p><strong>Proveedor:</strong> {{ $compra->proveedor->persona->Nombres }} {{ $compra->proveedor->persona->Apellidos }}</p>
                    <p><strong>Empleado:</strong> {{ $compra->empleado->persona->Nombres }} {{ $compra->empleado->persona->Apellidos }}</p>
                    <p><strong>Monto Total:</strong> {{ $compra->MontoTotal }}</p>
                    <p><strong>Monto Pagado:</strong> {{ $compra->MontoPagado }}</p>
                    <p><strong>Fecha:</strong> {{ $compra->Fecha }}</p>

                    <h5>Productos</h5>
                    <ul class="list-group">
                        @foreach($detalles as $detalle)
                            <li class="list-group-item list-group-item-light">
                                {{ $detalle->producto->Nombre }} - Cantidad: {{ $detalle->Cantidad }}
                            </li>
                        @endforeach
                    </ul>
                    <h5>Pagos</h5>
                    <ul class="list-group">
                        @foreach($pagos as $pago)
                            <li class="list-group-item list-group-item-light">
                                <strong>Fecha del Pago:</strong> {{ $pago->Fecha }} - <strong>Monto:</strong> {{ $pago->Monto }}
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('compras.index') }}" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
