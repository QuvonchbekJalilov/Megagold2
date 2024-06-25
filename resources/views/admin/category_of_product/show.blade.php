<x-layouts.admin>
    
        <div class="card mt-3">
            <div class="card-header">
                <h2><b>Mahsulot Tafsilotlari</b></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Category -->
                        <div class="mb-3">
                            <label for="category_id">Kategoriya:</label>
                            <p>{{ $product->category->name_uz }}</p>
                        </div>

                        <!-- Type -->
                        <div class="mb-3">
                            <label for="type_id">Turi:</label>
                            <p>{{ $product->type }}</p>
                        </div>

                        <!-- Name Fields -->
                        <div class="mb-3">
                            <label for="name_uz">Nomi (O'zbekcha):</label>
                            <p>{{ $product->name_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="name_ru">Nomi (Ruscha):</label>
                            <p>{{ $product->name_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="name_en">Nomi (Inglizcha):</label>
                            <p>{{ $product->name_en }}</p>
                        </div>

                        <!-- Additional Fields -->
                        <div class="mb-3">
                            <label for="size">Marka:</label>
                            <p>{{ $product->size }}</p>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <!-- Image Upload Fields -->
                        <div class="mb-3">
                            <label for="manufacturer">Ishlab chiqaruvchi:</label>
                            <p>{{ $product->manufacturer }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="tonna_metr">Tonna Metr:</label>
                            <p>{{ $product->tonna_metr }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="metr_tonna">Metr Tonna:</label>
                            <p>{{ $product->metr_tonna }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="price">Narxi:</label>
                            <p>{{ $product->price }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Mahsulot Rasmi:</label>
                            <img src="{{ asset('storage/' . $product->photo) }}" alt="Mahsulot Rasmi" style="height: 90px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('category_of_product.index') }}" class="btn btn-secondary">Orqaga</a>
                <a href="{{ route('category_of_product.edit', ['category_of_product' => $product->id]) }}" class="btn btn-primary">Tahrirlash</a>
                <form action="{{ route('category_of_product.destroy', ['category_of_product' => $product->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('O'chirishni istaysizmi?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">O'chirish</button>
                </form>
            </div>
        </div>
</x-layouts.admin>
