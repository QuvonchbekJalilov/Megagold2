<x-layouts.admin>
    <!-- Bosh saxifa -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card mt-3">
                    <h3 class='m-3'>Bizning jamoamiz</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">ismi va familiyasi</th>
                                <th scope="col">Mavzu</th>
                                <th scope="col">telegram</th>
                                <th scope="col">Rasm</th>
                                <th scope="col">operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>{{ $team->id }}</td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->title_uz }}</td>
                                    <td><a href="{{ $team->telegram }}">telegram</a></td>
                                    <td><img src="{{ asset( 'storage/' . $team->photo ) }}" alt="" style="width: 100px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('team.show', ['team' => $team->id]) }}" class="mx-3"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('team.edit', ['team' => $team->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('team.destroy', ['team'=> $team->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('team.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
