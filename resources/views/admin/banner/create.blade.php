<x-layouts.admin>
    <div class="card mt-3">
        <div class="py-4 mx-3">
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title_uz" class="form-label">Sarlavha (UZ)</label>
                                <input type="text" id="title_uz" class="form-control" name="title_uz" placeholder="Sarlavha (UZ)" value="{{ old('title_uz') }}">
                                @error('title_uz')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_ru" class="form-label">Sarlavha (RU)</label>
                                <input type="text" id="title_ru" class="form-control" name="title_ru" placeholder="Sarlavha (RU)" value="{{ old('title_ru') }}">
                                @error('title_ru')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Sarlavha (EN)</label>
                                <input type="text" id="title_en" class="form-control" name="title_en" placeholder="Sarlavha (EN)" value="{{ old('title_en') }}">
                                @error('title_en')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="photo" class="form-label">Rasm</label>
                                <input name="photo" type="file" class="form-control" id="photo" onchange="displayImage(this, 'photo_preview')">
                                @error('photo')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <img id="photo_preview" style="display:none; max-width: 100%; margin-top: 10px;" />
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content">
                        <a href="{{ route('banner.index') }}" class="btn btn-outline-secondary">Ortga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function displayImage(input, previewId) {
            const preview = document.getElementById(previewId);
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }
    </script>
</x-layouts.admin>
