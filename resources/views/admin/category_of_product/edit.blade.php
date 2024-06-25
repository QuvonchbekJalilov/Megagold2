<x-layouts.admin>
        <div class="card mt-3">
            <div class="card-header"><h2><b>Mahsulotni tahrirlash</b></h2></div>
            <div class="card-body">
                <form action="{{ route('category_of_product.update', ['category_of_product' => $product->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Category -->
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Kategoriya:</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name_uz }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Type -->
                            <div class="mb-3">
                                <label for="type_id" class="form-label">Turi:</label>
                                <select name="type_id" class="form-control">
                                    @foreach($populars as $popular)
                                    <option value="{{ $popular->id }}" {{ $product->type_id == $popular->id ? 'selected' : '' }}>{{ $popular->type }}</option>
                                    @endforeach
                                </select>
                                @error('type_id')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Name Fields -->
                            <div class="mb-3">
                                <label for="name_uz" class="form-label">Nomi (O'zbekcha):</label>
                                <input type="text" class="form-control" name="name_uz" placeholder="Mahsulot nomi uz" value="{{ $product->name_uz }}" />
                                @error('name_uz')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name_ru" class="form-label">Nomi (Ruscha):</label>
                                <input type="text" class="form-control" name="name_ru" placeholder="Mahsulot nomi ru" value="{{ $product->name_ru }}" />
                                @error('name_ru')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name_en" class="form-label">Nomi (Inglizcha):</label>
                                <input type="text" class="form-control" name="name_en" placeholder="Mahsulot nomi en" value="{{ $product->name_en }}" />
                                @error('name_en')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Additional Fields -->
                            <div class="mb-3">
                                <label for="size" class="form-label">Marka:</label>
                                <input type="text" class="form-control" name="size" placeholder="Marka" value="{{ $product->size }}" />
                                @error('size')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Image Upload Fields -->
                            <div class="mb-3">
                                <label for="manufacturer" class="form-label">Ishlab chiqaruvchi:</label>
                                <input type="text" class="form-control" name="manufacturer" placeholder="Ishlab chiqaruvchi" value="{{ $product->manufacturer }}" />
                                @error('manufacturer')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tonna_metr" class="form-label">Tonna Metr:</label>
                                <input type="text" class="form-control" name="tonna_metr" placeholder="Tonna metr" value="{{ $product->tonna_metr }}" />
                                @error('tonna_metr')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="metr_tonna" class="form-label">Metr Tonna:</label>
                                <input type="text" class="form-control" name="metr_tonna" placeholder="Metr tonna" value="{{ $product->metr_tonna }}" />
                                @error('metr_tonna')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Narxi:</label>
                                <input type="text" class="form-control" name="price" placeholder="Narxi" value="{{ $product->price }}" />
                                @error('price')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Mahsulot Rasmi:</label>
                                <input type="file" class="form-control-file" id="photo" name="photo" onchange="displayPhoto(this)">
                                @error('photo')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <img src="{{ asset('storage/' . $product->photo) }}" alt="Mahsulot Rasmi" id="photoPreview" style="height: 90px; display: block; margin-top: 10px;">
                            </div>

                            <script>
                                function displayPhoto(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function(e) {
                                            $('#photoPreview').attr('src', e.target.result);
                                        }
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            </script>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
</x-layouts.admin>
