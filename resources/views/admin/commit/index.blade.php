<x-layouts.admin>
    <!-- Bosh saxifa -->
    <div class="container-fluid">
        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card mt-3">
                    <h3 class='m-3'>Hodimlarimiz haqida fikrlar</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">ismi va familiyasi</th>
                                <th scope="col">Mavzu uz</th>
                                <th scope="col">Rasm</th>
                                <th scope="col">operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($commits as $commit)
                                <tr>
                                    <td>{{ $commit->id }}</td>
                                    <td>{{ $commit->name }}</td>
                                    <td>{{ $commit->title_uz }}</td>
                                    <td><img src="{{ asset( 'storage/' . $commit->photo ) }}" alt="" style="width: 80px;height: 80px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('commit.edit', ['commit' => $commit->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('commit.destroy', ['commit'=> $commit->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('commit.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
