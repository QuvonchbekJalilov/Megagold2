<x-layouts.admin>
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h3>Buyurtmani tahrirlash</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('orders.update', ['order' => $order->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{ $order->status }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Yangilash</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
