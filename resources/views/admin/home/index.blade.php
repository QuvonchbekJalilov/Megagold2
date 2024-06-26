<x-layouts.admin>
    <!-- Bosh saxifa -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card mt-3">
                    <h3 class='m-3'>Bosh saxifa</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Mavzu</th>
                                <th scope="col">Qisqa Ma'zmuni</th>
                                <th scope="col">Rasm</th>
                                <th scope="col">operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($homes as $home)
                                <tr>
                                    <td>{{ $home->id }}</td>
                                    <td>{{ $home->title_uz }}</td>
                                    <td>{{ $home->short_content_uz }}</td>
                                    <td><img src="{{ asset( 'storage/' . $home->first_photo ) }}" alt="" style="width: 100px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('home.show', ['home' => $home->id]) }}" class="mx-3"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('home.edit', ['home' => $home->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('home.destroy', ['home'=> $home->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn text-danger" style="margin-top: -6px;"><i class="fa fa-trash"></i></button>
                                                </form>
                                            @endauth
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <a href="{{ route('home.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
