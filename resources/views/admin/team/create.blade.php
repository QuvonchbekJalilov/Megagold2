<x-layouts.admin>
    <div class="card mt-3">
        <div class="py-4 mx-3">
            <div class="contact-form">
                <h2 class="mb-4"><b>Jamoa a'zolarini qo'shish</b></h2>
                <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Ism familiya</label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Ism familiya" value="{{ old('name') }}">
                                @error('name')
                                <div class="text-danger">Ism familiyasi: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_uz" class="form-label">Lavozimi uz</label>
                                <input type="text" id="title_uz" class="form-control" name="title_uz" placeholder="Lavozimi uz" value="{{ old('title_uz') }}">
                                @error('title_uz')
                                <div class="text-danger">title_uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_ru" class="form-label">Lavozimi ru</label>
                                <input type="text" id="title_ru" class="form-control" name="title_ru" placeholder="Lavozimi ru" value="{{ old('title_ru') }}">
                                @error('title_ru')
                                <div class="text-danger">title_ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Lavozimi en</label>
                                <input type="text" id="title_en" class="form-control" name="title_en" placeholder="Lavozimi en" value="{{ old('title_en') }}">
                                @error('title_en')
                                <div class="text-danger">title_en xato: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="telegram" class="form-label">Telegram link</label>
                                <input type="text" id="telegram" class="form-control" name="telegram" placeholder="Telegram link" value="{{ old('telegram') }}">
                                @error('telegram')
                                <div class="text-danger">telegram xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram link</label>
                                <input type="text" id="instagram" class="form-control" name="instagram" placeholder="Instagram link" value="{{ old('instagram') }}">
                                @error('instagram')
                                <div class="text-danger">instagram xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook link</label>
                                <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Facebook link" value="{{ old('facebook') }}">
                                @error('facebook')
                                <div class="text-danger">facebook xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="youtube" class="form-label">Youtube link</label>
                                <input type="text" id="youtube" class="form-control" name="youtube" placeholder="Youtube link" value="{{ old('youtube') }}">
                                @error('youtube')
                                <div class="text-danger">youtube xato: {{ $message }}</div>
                                @enderror
                            </div>
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
                        <a href="{{ route('home.index') }}" class="btn btn-outline-danger">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
