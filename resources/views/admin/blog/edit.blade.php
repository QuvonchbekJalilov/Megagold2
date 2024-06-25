<x-layouts.admin>
        <div class="card mt-3">
            <div class="card-header"><h2><b>Blog Postni Tahrirlash</b></h2></div>
            <div class="card-body">
                <form action="{{ route('blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Title Fields -->
                            <div class="mb-3">
                                <label for="title_uz">Sarlavha (O'zbekcha):</label>
                                <input type="text" class="form-control" name="title_uz" placeholder="Sarlavha (O'zbekcha)" value="{{ old('title_uz', $blog->title_uz) }}" />
                                @error('title_uz')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_ru">Sarlavha (Ruscha):</label>
                                <input type="text" class="form-control" name="title_ru" placeholder="Sarlavha (Ruscha)" value="{{ old('title_ru', $blog->title_ru) }}" />
                                @error('title_ru')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_en">Sarlavha (Inglizcha):</label>
                                <input type="text" class="form-control" name="title_en" placeholder="Sarlavha (Inglizcha)" value="{{ old('title_en', $blog->title_en) }}" />
                                @error('title_en')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Short Content Fields -->
                            <div class="mb-3">
                                <label for="short_content_uz">Qisqa mazmun (O'zbekcha):</label>
                                <input type="text" class="form-control" name="short_content_uz" placeholder="Qisqa mazmun (O'zbekcha)" value="{{ old('short_content_uz', $blog->short_content_uz) }}" />
                                @error('short_content_uz')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_ru">Qisqa mazmun (Ruscha):</label>
                                <input type="text" class="form-control" name="short_content_ru" placeholder="Qisqa mazmun (Ruscha)" value="{{ old('short_content_ru', $blog->short_content_ru) }}" />
                                @error('short_content_ru')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_en">Qisqa mazmun (Inglizcha):</label>
                                <input type="text" class="form-control" name="short_content_en" placeholder="Qisqa mazmun (Inglizcha)" value="{{ old('short_content_en', $blog->short_content_en) }}" />
                                @error('short_content_en')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Content Fields -->
                            <div class="mb-3">
                                <label for="content_uz">Maqola (O'zbekcha):</label>
                                <textarea class="form-control" name="content_uz" placeholder="Maqola (O'zbekcha)">{{ old('content_uz', $blog->content_uz) }}</textarea>
                                @error('content_uz')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="content_ru">Maqola (Ruscha):</label>
                                <textarea class="form-control" name="content_ru" placeholder="Maqola (Ruscha)">{{ old('content_ru', $blog->content_ru) }}</textarea>
                                @error('content_ru')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="content_en">Maqola (Inglizcha):</label>
                                <textarea class="form-control" name="content_en" placeholder="Maqola (Inglizcha)">{{ old('content_en', $blog->content_en) }}</textarea>
                                @error('content_en')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>

                        <div class="col-md-6">
                            <!-- Description Fields -->
                            <div class="mb-3">
                                <label for="description_uz">Tavsif (O'zbekcha):</label>
                                <textarea class="form-control" name="description_uz" placeholder="Tavsif (O'zbekcha)">{{ old('description_uz', $blog->description_uz) }}</textarea>
                                @error('description_uz')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description_ru">Tavsif (Ruscha):</label>
                                <textarea class="form-control" name="description_ru" placeholder="Tavsif (Ruscha)">{{ old('description_ru', $blog->description_ru) }}</textarea>
                                @error('description_ru')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description_en">Tavsif (Inglizcha):</label>
                                <textarea class="form-control" name="description_en" placeholder="Tavsif (Inglizcha)">{{ old('description_en', $blog->description_en) }}</textarea>
                                @error('description_en')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Image Upload Field -->
                            <div class="mb-3">
                                <label for="photo" class="form-label">Rasm yuklash</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photo" name="photo" onchange="displayFileName()">
                                    <label class="custom-file-label" for="photo" id="photoLabel">Faylni tanlang</label>
                                </div>
                                @error('photo')
                                <div class="text-danger">Rasm yuklash majburiy: {{ $message }}</div>
                                @enderror

                                @if ($blog->photo)
                                    <div class="mt-3">
                                        <label>Joriy rasm:</label><br>
                                        <img src="{{ asset('storage/' . $blog->photo) }}" alt="Blog Image" style="max-width: 100%; height: 90px;">
                                    </div>
                                @endif
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
                        <a href="{{ route('blog.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
</x-layouts.admin>
