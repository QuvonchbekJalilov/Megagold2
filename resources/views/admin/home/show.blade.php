<x-layouts.admin>
        <div class="card mt-3">
            <div class="card-header">
                <h3 class='m-3'>Mahsulot Tafsilotlari</h3>
                <a href="{{ route('home.index') }}" class="btn btn-secondary float-right">Orqaga</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Mahsulot nomi (UZ)</h5>
                        <p>{{ $home->title_uz }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Mahsulot nomi (RU)</h5>
                        <p>{{ $home->title_ru }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Mahsulot nomi (EN)</h5>
                        <p>{{ $home->title_en }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Qisqacha Tavsif (UZ)</h5>
                        <p>{{ $home->short_content_uz }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Qisqacha Tavsif (RU)</h5>
                        <p>{{ $home->short_content_ru }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Qisqacha Tavsif (EN)</h5>
                        <p>{{ $home->short_content_en }}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>Rasmlar</h5>
                        <div class="d-flex flex-wrap">
                            @if ($home->first_photo)
                                <img src="{{ asset('storage/' . $home->first_photo) }}" alt="First Photo" class="img-thumbnail m-2" style="width: 150px; height: 150px;">
                            @endif
                            @if ($home->second_photo)
                                <img src="{{ asset('storage/' . $home->second_photo) }}" alt="Second Photo" class="img-thumbnail m-2" style="width: 150px; height: 150px;">
                            @endif
                            @if ($home->third_photo)
                                <img src="{{ asset('storage/' . $home->third_photo) }}" alt="Third Photo" class="img-thumbnail m-2" style="width: 150px; height: 150px;">
                            @endif
                            @if ($home->fourth_photo)
                                <img src="{{ asset('storage/' . $home->fourth_photo) }}" alt="Fourth Photo" class="img-thumbnail m-2" style="width: 150px; height: 150px;">
                            @endif
                            @if ($home->fifth_photo)
                                <img src="{{ asset('storage/' . $home->fifth_photo) }}" alt="Fifth Photo" class="img-thumbnail m-2" style="width: 150px; height: 150px;">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('home.edit', ['home' => $home->id]) }}" class="btn btn-primary">Tahrirlash</a>
                <form action="{{ route('home.destroy', ['home' => $home->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Ochirishga ruxsat berasizmi?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">O'chirish</button>
                </form>
            </div>
        </div>
</x-layouts.admin>
