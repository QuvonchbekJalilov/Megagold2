<x-layouts.admin>
    
        <div class="card mt-3">
            <div class="card-header"><h2><b>Mahsulot qo'shish</b></h2></div>
            <div class="card-body">
                <form action="{{ route('category_of_product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Category -->
                            <div class="mb-3">
                                <label for="category_id">Kategoriya:</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <small class="text-danger">Kategoriya tanlash majburiy</small>
                                @enderror
                            </div>

                            <!-- Type -->
                            <div class="mb-3">
                                <label for="type_id">Turi:</label>
                                <select name="type_id" class="form-control">
                                    @foreach($populars as $popular)
                                    <option value="{{ $popular->id }}">{{ $popular->type }}</option>
                                    @endforeach
                                </select>
                                @error('type_id')
                                <small class="text-danger">Turi tanlash majburiy</small>
                                @enderror
                            </div>

                            <!-- Name Fields -->
                            <div class="mb-3">
                                <label for="name_uz">Nomi (O'zbekcha):</label>
                                <input type="text" class="form-control" name="name_uz" placeholder="Mahsulot nomi uz" value="{{ old('name_uz') }}" />
                                @error('name_uz')
                                <small class="text-danger">O'zbek tilida nomi majburiy</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name_ru">Nomi (Ruscha):</label>
                                <input type="text" class="form-control" name="name_ru" placeholder="Mahsulot nomi ru" value="{{ old('name_ru') }}" />
                                @error('name_ru')
                                <small class="text-danger">Rus tilida nomi majburiy</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name_en">Nomi (Inglizcha):</label>
                                <input type="text" class="form-control" name="name_en" placeholder="Mahsulot nomi en" value="{{ old('name_en') }}" />
                                @error('name_en')
                                <small class="text-danger">Ingliz tilida nomi majburiy</small>
                                @enderror
                            </div>

                            <!-- Additional Fields -->
                            <div class="mb-3">
                                <label for="size">Marka:</label>
                                <input type="text" class="form-control" name="size" placeholder="Marka" value="{{ old('size') }}" />
                                @error('size')
                                <small class="text-danger">Marka majburiy</small>
                                @enderror
                            </div>


                        </div>

                        <div class="col-md-6">
                            <!-- Image Upload Fields -->
                            <div class="mb-3">
                                <label for="manufacturer">Ishlab chiqaruvchi:</label>
                                <input type="text" class="form-control" name="manufacturer" placeholder="Ishlab chiqaruvchi" value="{{ old('manufacturer') }}" />
                                @error('manufacturer')
                                <small class="text-danger">Ishlab chiqaruvchi majburiy</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tonna_metr">Tonna Metr:</label>
                                <input type="text" class="form-control" name="tonna_metr" placeholder="Tonna metr" value="{{ old('tonna_metr') }}" />
                                @error('tonna_metr')
                                <small class="text-danger">Tonna metr majburiy</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="metr_tonna">Metr Tonna:</label>
                                <input type="text" class="form-control" name="metr_tonna" placeholder="Metr tonna" value="{{ old('metr_tonna') }}" />
                                @error('metr_tonna')
                                <small class="text-danger">Metr tonna majburiy</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price">Narxi:</label>
                                <input type="text" class="form-control" name="price" placeholder="Narxi" value="{{ old('price') }}" />
                                @error('price')
                                <small class="text-danger">Narxi majburiy</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Rasm hajmi: O'zingiz tanlang</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photo" name="photo" onchange="displayFileName()">
                                    <label class="custom-file-label" for="photo" id="photoLabel">Rasm Tanlash</label>
                                </div>
                                @error('photo')
                                <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                            </div>

                            <script>
                                function displayFileName() {
                                    const input = document.getElementById('photo');
                                    const label = document.getElementById('photoLabel');
                                    const fileName = input.files[0].name;
                                    label.textContent = fileName;
                                }
                            </script>
                        </div>
                    </div>

                    <!-- Submit Button -->
                   <div class="d-flex justify-content">
                        <a href="{{ route('category_of_product.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    
</x-layouts.admin>
