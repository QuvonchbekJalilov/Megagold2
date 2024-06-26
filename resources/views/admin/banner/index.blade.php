<x-layouts.admin>
    <div class="container-fluid">
        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card mt-3">
                    <h3 class='m-3'>Bannerlar Ro'yxati</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Sarlavha (UZ)</th>
                                <th scope="col">Sarlavha (RU)</th>
                                <th scope="col">Sarlavha (EN)</th>
                                <th scope="col">Rasm</th>
                                <th scope="col">Amallar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banners as $banner)
                                <tr>
                                    <td>{{ $banner->id }}</td>
                                    <td>{{ $banner->title_uz }}</td>
                                    <td>{{ $banner->title_ru }}</td>
                                    <td>{{ $banner->title_en }}</td>
                                    <td><img src="{{ asset('storage/' . $banner->photo) }}" alt="" style="width: 100px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('banner.show', ['banner' => $banner->id]) }}" class="mx-3"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('banner.edit', ['banner' => $banner->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('banner.destroy', ['banner'=> $banner->id]) }}" method="post" onsubmit="return confirm('Ishonchingiz komilmi?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn text-danger" style="margin-top: -6px;"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <a href="{{ route('banner.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-layouts.admin>
