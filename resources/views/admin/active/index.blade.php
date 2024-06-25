<x-layouts.admin>
    <!-- Bosh saxifa -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card mt-3">
                    <h3 class='m-3'>Faol mijozlarimiz</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Faol mijozlarimiz</th>
                                <th scope="col">Tajribali azolar</th>
                                <th scope="col">Xizmat ko'rsatishni boshlagan yil</th>
                                <th scope="col">operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($active_clients as $active)
                                <tr>
                                    <td>{{ $active->id }}</td>
                                    <td>{{ $active->active_client }}</td>
                                    <td>{{ $active->experienced }}</td>
                                    <td>{{ $active->years_services }}</td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('active_client.edit', ['active_client' => $active->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('active_client.destroy', ['active_client'=> $active->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('active_client.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
