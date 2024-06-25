<x-layouts.admin>
    <div class="card mt-3">
        <div class="py-4 mx-3">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('home.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Title fields -->
                            <div class="mb-3">
                                <label for="title_uz" class="form-label">Sarlavha uz</label>
                                <input type="text" id="title_uz" class="form-control" name="title_uz" placeholder="Sarlavha uz" value="{{ old('title_uz') }}">
                                @error('title_uz')
                                <div class="text-danger">Sarlavha uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_ru" class="form-label">Sarlavha ru</label>
                                <input type="text" id="title_ru" class="form-control" name="title_ru" placeholder="Sarlavha ru" value="{{ old('title_ru') }}">
                                @error('title_ru')
                                <div class="text-danger">Sarlavha ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Sarlavha en</label>
                                <input type="text" id="title_en" class="form-control" name="title_en" placeholder="Sarlavha en" value="{{ old('title_en') }}">
                                @error('title_en')
                                <div class="text-danger">Sarlavha en xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Short content fields -->
                            <div class="mb-3">
                                <label for="short_content_uz" class="form-label">Tavsif uz</label>
                                <input type="text" id="short_content_uz" class="form-control" name="short_content_uz" placeholder="Tavsif uz" value="{{ old('short_content_uz') }}">
                                @error('short_content_uz')
                                <div class="text-danger">Tavsif uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_ru" class="form-label">Tavsif ru</label>
                                <input type="text" id="short_content_ru" class="form-control" name="short_content_ru" placeholder="Tavsif ru" value="{{ old('short_content_ru') }}">
                                @error('short_content_ru')
                                <div class="text-danger">Tavsif ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_en" class="form-label">Tavsif en</label>
                                <input type="text" id="short_content_en" class="form-control" name="short_content_en" placeholder="Tavsif en" value="{{ old('short_content_en') }}">
                                @error('short_content_en')
                                <div class="text-danger">Tavsif en xato: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Image upload fields with preview -->
                            <div class="mb-3">
                                <label for="first_photo" class="form-label">Rasm hajmi: 760x556</label>
                                <input name="first_photo" type="file" class="form-control" id="first_photo" onchange="displayImage(this, 'first_photo_preview')">
                                @error('first_photo')
                                <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                                <img id="first_photo_preview" style="display:none; max-width: 100%; margin-top: 10px;" />
                            </div>
                            <div class="mb-3">
                                <label for="second_photo" class="form-label">Rasm hajmi: 238x147</label>
                                <input name="second_photo" type="file" class="form-control" id="second_photo" onchange="displayImage(this, 'second_photo_preview')">
                                @error('second_photo')
                                <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                                <img id="second_photo_preview" style="display:none; max-width: 100%; margin-top: 10px;" />
                            </div>
                            <div class="mb-3">
                                <label for="third_photo" class="form-label">Rasm hajmi: 64x77</label>
                                <input name="third_photo" type="file" class="form-control" id="third_photo" onchange="displayImage(this, 'third_photo_preview')">
                                @error('third_photo')
                                <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                                <img id="third_photo_preview" style="display:none; max-width: 100%; margin-top: 10px;" />
                            </div>
                            <div class="mb-3">
                                <label for="fourth_photo" class="form-label">Rasm hajmi: 116x61</label>
                                <input name="fourth_photo" type="file" class="form-control" id="fourth_photo" onchange="displayImage(this, 'fourth_photo_preview')">
                                @error('fourth_photo')
                                <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                                <img id="fourth_photo_preview" style="display:none; max-width: 100%; margin-top: 10px;" />
                            </div>
                            <div class="mb-3">
                                <label for="fifth_photo" class="form-label">Rasm hajmi: 106x76</label>
                                <input name="fifth_photo" type="file" class="form-control" id="fifth_photo" onchange="displayImage(this, 'fifth_photo_preview')">
                                @error('fifth_photo')
                                <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                                <img id="fifth_photo_preview" style="display:none; max-width: 100%; margin-top: 10px;" />
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content">
                        <a href="{{ route('home.index') }}" class="btn btn-outline-secondary">Orqaga</a>
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
