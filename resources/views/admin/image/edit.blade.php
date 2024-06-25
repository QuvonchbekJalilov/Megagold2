<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('image.update', ['image' => $images->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- Image upload field -->
                    <div class="mb-3">
                        <label for="photo" class="form-label">Rasm hajmi: Custom Size</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="photo" name="photo" onchange="displayFileName()">
                            <label class="custom-file-label" for="photo" id="photoLabel">Yangi Rasm Tanlash</label>
                        </div>
                        @if ($images->photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $images->photo) }}" alt="Current Image" style="width: 90px;">
                        </div>
                        @endif
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

                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                        <a href="{{ route('image.index') }}" class="btn btn-outline-danger" type="submit" id="sendMessageButton">Orqada</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
</x-layouts.admin>