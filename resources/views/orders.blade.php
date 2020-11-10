@extends('main')

@section('title', 'Orders')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Buy items</h3>
        </div>
        <div class="card-body">
            @if(count($orders) > 0)
                <table class="table table-striped">
                    <thead class="bg-info">
                        <tr>
                            <td>Title</td>
                            <td>Author</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Sum</td>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($orders as $order)
                            <tr>
                                <td> {{ $order->book->title }} </td>
                                <td> {{ $order->book->author }} </td>
                                <td> {{ $order->book->price }} </td>
                                <td> {{ $order->quantity }}</td>
                                <td> {{ $order->book->price * $order->quantity }} </td>
                            </tr>
                        @endforeach

                    </tbody>

                    <tfoot class="bg-warning">
                        <tr>
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td>{{ $order->sum('quantity') }}</td>
                            <td>{{ $sum_orders }}</td>
                        </tr>
                    </tfoot>
                </table>

            @else

            <div class="alert alert-danger">
                <p>Buy list is empty.</p>
            </div>

            @endif
        </div>
    </div>

</div>
    
<div class="card-header"><a class="nav-link" href="{{ url('/') }}">Main Menue</a></div>
</div>

@endsection
