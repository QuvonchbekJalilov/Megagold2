<x-layouts.admin>
    <div class="card mt-3">
        <div class="py-4 mx-3">
            <div class="contact-form">
                <div id="success"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title_uz" class="form-label">Sarlavha (UZ)</label>
                            <input type="text" id="title_uz" class="form-control" name="title_uz" placeholder="Sarlavha (UZ)" value="{{ $banner->title_uz }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="title_ru" class="form-label">Sarlavha (RU)</label>
                            <input type="text" id="title_ru" class="form-control" name="title_ru" placeholder="Sarlavha (RU)" value="{{ $banner->title_ru }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="title_en" class="form-label">Sarlavha (EN)</label>
                            <input type="text" id="title_en" class="form-control" name="title_en" placeholder="Sarlavha (EN)" value="{{ $banner->title_en }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="photo" class="form-label">Rasm</label>
                            <img id="photo" src="{{ asset('storage/' . $banner->photo) }}" style="max-width: 100%; margin-top: 10px;" />
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content">
                    <a href="{{ route('banner.index') }}" class="btn btn-outline-secondary">Ortga</a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
