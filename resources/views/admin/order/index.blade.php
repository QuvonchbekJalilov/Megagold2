<x-layouts.admin>
    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card mt-3">
                    <h3 class='m-3'>Buyurtmalar</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Mahsulot</th>
                                    <th scope="col">Ism</th>
                                    <th scope="col">Telefon raqam</th>
                                    <th scope="col">Umumiy narx</th>
                                    <th scope="col">Umumiy uzunlik</th>
                                    <th scope="col">Umumiy og'irlik</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Operatsiyalar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->product->name_ru }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->phone_number }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>{{ $order->total_length }}</td>
                                    <td>{{ $order->total_weight }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm {{ $order->status == 'yangi' ? 'btn-danger' : 'btn-primary' }} dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-id="{{ $order->id }}">
                                                {{ $order->status }}
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" type="button" onclick="setStatus('{{ $order->id }}', 'yangi')">yangi</button>
                                                <button class="dropdown-item" type="button" onclick="setStatus('{{ $order->id }}', 'qabul qilindi')">qabul qilindi</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex tools">
                                            <form action="{{ route('orders.destroy', ['order'=> $order->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this order?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn text-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $orders->links() }}
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        function setStatus(orderId, status) {
            $.ajax({
                url: "{{ url('admin/orders') }}/" + orderId + "/update-status",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: status
                },
                success: function(response) {
                    if (response.success) {
                        var button = $('button.dropdown-toggle[data-id="' + orderId + '"]');
                        button.removeClass('btn-danger btn-primary').addClass(status === 'yangi' ? 'btn-danger' : 'btn-primary');
                        button.text(status);
                        alert('Order statusi muvafaqiyatli yangilandi');

                    } else {
                        alert('Error updating status');
                    }
                },
                error: function() {
                    alert('Error updating status');
                }
            });
        }
    </script>
</x-layouts.admin>
