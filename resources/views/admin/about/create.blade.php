<x-layouts.admin>

    <div class="card mt-3">
        <div class="py-4 mx-3">
        <div class="card-header"><h2><b>Biz haqimizda uchun ma'lumot qo'shish</b></h2></div>

            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Title fields -->
                            <div class="mb-3">
                                <label for="title_uz" class="form-label">Mavzu uz</label>
                                <input type="text" id="title_uz" class="form-control" name="title_uz" placeholder="Mavzu uz" value="{{ old('title_uz') }}">
                                @error('title_uz')
                                <div class="text-danger">Mavzu_uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_ru" class="form-label">Mavzu ru</label>
                                <input type="text" id="title_ru" class="form-control" name="title_ru" placeholder="Mavzu ru" value="{{ old('title_ru') }}">
                                @error('title_ru')
                                <div class="text-danger">Mavzu_ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Mavzu en</label>
                                <input type="text" id="title_en" class="form-control" name="title_en" placeholder="Mavzu en" value="{{ old('title_en') }}">
                                @error('title_en')
                                <div class="text-danger">Mavzu_en xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Short content fields -->
                            <div class="mb-3">
                                <label for="short_content_uz" class="form-label">Tavsif uz</label>
                                <input type="text" id="short_content_uz" class="form-control" name="short_content_uz" placeholder="Tavsif uz" value="{{ old('short_content_uz') }}">
                                @error('short_content_uz')
                                <div class="text-danger">Tavsif_uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_ru" class="form-label">Tavsif ru</label>
                                <input type="text" id="short_content_ru" class="form-control" name="short_content_ru" placeholder="Tavsif ru" value="{{ old('short_content_ru') }}">
                                @error('short_content_ru')
                                <div class="text-danger">Tavsif_ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_en" class="form-label">Tavsif en</label>
                                <input type="text" id="short_content_en" class="form-control" name="short_content_en" placeholder="Tavsif en" value="{{ old('short_content_en') }}">
                                @error('short_content_en')
                                <div class="text-danger">Tavsif_en xato: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Detailed content fields -->
                            <div class="mb-3">
                                <label for="content_uz" class="form-label">Ma'lumot uz</label>
                                <input type="text" id="content_uz" class="form-control" name="content_uz" placeholder="Ma'lumot uz" value="{{ old('content_uz') }}">
                                @error('content_uz')
                                <div class="text-danger">Ma'lumot_uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="content_ru" class="form-label">Ma'lumot ru</label>
                                <input type="text" id="content_ru" class="form-control" name="content_ru" placeholder="Ma'lumot ru" value="{{ old('content_ru') }}">
                                @error('content_ru')
                                <div class="text-danger">Ma'lumot_ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="content_en" class="form-label">Ma'lumot en</label>
                                <input type="text" id="content_en" class="form-control" name="content_en" placeholder="Ma'lumot en" value="{{ old('content_en') }}">
                                @error('content_en')
                                <div class="text-danger">Ma'lumot_en xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Image upload field -->
                            <div class="mb-3">
                                <label for="photo" class="form-label">Rasm hajmi</label>
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
                    <div class="d-flex justify-content">
                        <a href="{{ route('about.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>