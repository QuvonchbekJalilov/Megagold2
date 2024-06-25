<x-layouts.admin>
        <div class="card mt-3">
            <div class="card-header">
                <h3 class='m-3'>Biz haqimizda ma'lumot</h3>
                <a href="{{ route('about.index') }}" class="btn btn-secondary float-right">Orqaga</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Mavzu (Uzbek)</h5>
                        <p>{{ $about->title_uz }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Mavzu (Russian)</h5>
                        <p>{{ $about->title_ru }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Mavzu (English)</h5>
                        <p>{{ $about->title_en }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Tavsif (Uzbek)</h5>
                        <p>{{ $about->short_content_uz }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Tavsif (Russian)</h5>
                        <p>{{ $about->short_content_ru }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Tavsif (English)</h5>
                        <p>{{ $about->short_content_en }}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>Ma'lumot (Uzbek)</h5>
                        <p>{{ $about->content_uz }}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>Ma'lumot (Russian)</h5>
                        <p>{{ $about->content_ru }}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>Ma'lumot (English)</h5>
                        <p>{{ $about->content_en }}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>Rasm</h5>
                        <div class="about-image">
                            <img src="{{ asset('storage/' . $about->photo) }}" alt="About Image" style="width:150px" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('about.edit', ['about' => $about->id]) }}" class="btn btn-primary">Tahrirlash</a>
                <form action="{{ route('about.destroy', ['about' => $about->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Ochirishga ruxsat berasizmi?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">O'chirish</button>
                </form>
            </div>
        </div>
    
</x-layouts.admin>
