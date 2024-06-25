<x-layouts.admin>
    
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header"><h2><b>Kategoriya Ma'lumoti</b></h2></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name_uz" class="form-label">Mahsulot nomi (Uzbek)</label>
                            <p>{{ $category->name_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="name_ru" class="form-label">Mahsulot nomi (Russian)</label>
                            <p>{{ $category->name_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="name_en" class="form-label">Mahsulot nomi (English)</label>
                            <p>{{ $category->name_en }}</p>
                        </div>
                        <!-- Display Image -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">Rasm</label>
                            <img src="{{ asset('storage/' . $category->photo) }}" alt="Category Image" style="height: 90px;">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Orqaga</a>
                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-primary">tahrirlash</a>
                        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">O'chirish</button>
                        </form>
                    </div>
                </div>
            </div>
        
</x-layouts.admin>
