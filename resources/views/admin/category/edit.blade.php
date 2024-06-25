<x-layouts.admin>
    
            <div class="col-md-10">
                <div class="card mt-3">
                    <div class="card-header"><h2><b>Kategoriyani tahrirlash</b></h2></div>
                    <div class="card-body">
                        <form action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name_uz" class="form-label">Mahsulot nomi (Uzbek)</label>
                                <input type="text" id="name_uz" class="form-control" name="name_uz" placeholder="Mahsulot nomi (Uzbek)" value="{{ $category->name_uz }}">
                                @error('name_uz')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name_ru" class="form-label">Mahsulot nomi (Russian)</label>
                                <input type="text" id="name_ru" class="form-control" name="name_ru" placeholder="Mahsulot nomi (Russian)" value="{{ $category->name_ru }}">
                                @error('name_ru')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name_en" class="form-label">Mahsulot nomi (English)</label>
                                <input type="text" id="name_en" class="form-control" name="name_en" placeholder="Mahsulot nomi (English)" value="{{ $category->name_en }}">
                                @error('name_en')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Image upload field -->
                            <div class="mb-3">
                                <label for="photo" class="form-label">Rasm hajmi: Custom Size</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photo" name="photo" onchange="displayFileName()">
                                    <label class="custom-file-label" for="photo" id="photoLabel">Rasm Tanlash</label>
                                </div>
                                @error('photo')
                                <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $category->photo) }}" alt="Category Image" style="height: 90px;">
                                </div>
                            </div>

                            <script>
                                function displayFileName() {
                                    const input = document.getElementById('photo');
                                    const label = document.getElementById('photoLabel');
                                    const fileName = input.files[0].name;
                                    label.textContent = fileName;
                                }
                            </script>
                            <button type="submit" class="btn btn-primary">Saqlash</button>
                        </form>
                    </div>
                </div>
            </div>
        
</x-layouts.admin>
