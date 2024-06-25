<x-layouts.admin>
        <div class="card mt-3">
            <div class="card-header">
                <h2><b>{{ $blog->title_uz }}</b></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Title Fields -->
                        <div class="mb-3">
                            <h4>Sarlavha (O'zbekcha):</h4>
                            <p>{{ $blog->title_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Sarlavha (Ruscha):</h4>
                            <p>{{ $blog->title_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Sarlavha (Inglizcha):</h4>
                            <p>{{ $blog->title_en }}</p>
                        </div>

                        <!-- Short Content Fields -->
                        <div class="mb-3">
                            <h4>Qisqa mazmun (O'zbekcha):</h4>
                            <p>{{ $blog->short_content_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Qisqa mazmun (Ruscha):</h4>
                            <p>{{ $blog->short_content_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Qisqa mazmun (Inglizcha):</h4>
                            <p>{{ $blog->short_content_en }}</p>
                        </div>

                        <!-- Content Fields -->
                        <div class="mb-3">
                            <h4>Maqola (O'zbekcha):</h4>
                            <p>{{ $blog->content_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Maqola (Ruscha):</h4>
                            <p>{{ $blog->content_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Maqola (Inglizcha):</h4>
                            <p>{{ $blog->content_en }}</p>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <!-- Description Fields -->
                        <div class="mb-3">
                            <h4>Tavsif (O'zbekcha):</h4>
                            <p>{{ $blog->description_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Tavsif (Ruscha):</h4>
                            <p>{{ $blog->description_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Tavsif (Inglizcha):</h4>
                            <p>{{ $blog->description_en }}</p>
                        </div>

                        <!-- Image Display -->
                        <div class="mb-3">
                            @if ($blog->photo)
                                <h4>Rasm:</h4>
                                <img src="{{ asset('storage/' . $blog->photo) }}" alt="Blog Image" style="max-width: 100%; height: auto;">
                            @else
                                <p>Rasm mavjud emas</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('blog.index') }}" class="btn btn-secondary">Orqaga</a>
                <a href="{{ route('blog.edit', ['blog' => $blog->id]) }}" class="btn btn-primary">Tahrirlash</a>
                <form action="{{ route('blog.destroy', ['blog' => $blog->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Haqiqatan ham o'chirishni xohlaysizmi?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">O'chirish</button>
                </form>
            </div>
        </div>
</x-layouts.admin>
