<x-layouts.admin>

    <div class="card mt-3">
        <div class="py-4 mx-3">
            <div class="card-header">
                <h2><b>Link tahrirlash</b></h2>
            </div>

            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('link.update', $link->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Link field -->
                            <div class="mb-3">
                                <label for="link" class="form-label">Video uchun link</label>
                                <input type="text" id="link" class="form-control" name="link" placeholder="Video uchun link" value="{{ old('link', $link->link) }}">
                                @error('link')
                                <div class="text-danger">Link xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Telegram field -->
                            <div class="mb-3">
                                <label for="telegram" class="form-label">Telegram uchun link</label>
                                <input type="text" id="telegram" class="form-control" name="telegram" placeholder="Telegram uchun link" value="{{ old('telegram', $link->telegram) }}">
                                @error('telegram')
                                <div class="text-danger">Telegram xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Instagram field -->
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram uchun link</label>
                                <input type="text" id="instagram" class="form-control" name="instagram" placeholder="Instagram uchun link" value="{{ old('instagram', $link->instagram) }}">
                                @error('instagram')
                                <div class="text-danger">Instagram xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Facebook field -->
                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook uchun link</label>
                                <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Facebook uchun link" value="{{ old('facebook', $link->facebook) }}">
                                @error('facebook')
                                <div class="text-danger">Facebook xato: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Twitter field -->
                            <div class="mb-3">
                                <label for="twitter" class="form-label">Twitter uchun link</label>
                                <input type="text" id="twitter" class="form-control" name="twitter" placeholder="Twitter uchun link" value="{{ old('twitter', $link->twitter) }}">
                                @error('twitter')
                                <div class="text-danger">Twitter xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- YouTube field -->
                            <div class="mb-3">
                                <label for="youtube" class="form-label">YouTube uchun link</label>
                                <input type="text" id="youtube" class="form-control" name="youtube" placeholder="YouTube uchun link" value="{{ old('youtube', $link->youtube) }}">
                                @error('youtube')
                                <div class="text-danger">YouTube xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Photo upload field -->
                            <div class="mb-3">
                                <label for="photo" class="form-label">Rasm hajmi: Custom Size</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photo" name="photo" onchange="displayFileName()">
                                    <label class="custom-file-label" for="photo" id="photoLabel">{{ $link->photo ?? 'Rasm Tanlash' }}</label>
                                </div>
                                @error('photo')
                                <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                            </div>

                            <script>
                                function displayFileName() {
                                    const input = document.getElementById('photo');
                                    const label = document.getElementById('photoLabel');
                                    const fileName = input.files[0]?.name || '{{ $link->photo ?? 'Rasm Tanlash' }}';
                                    label.textContent = fileName;
                                }
                            </script>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('link.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
