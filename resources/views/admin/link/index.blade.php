<x-layouts.admin>
    <!-- Bosh saxifa -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card mt-3">
                    <h3 class='m-3'>Ijtimoiy tarmoqlarimiz</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Video uchun link</th>
                                <th scope="col">telegram</th>
                                <th scope="col">instagram</th>
                                <th scope="col">facebook</th>
                                <th scope="col">twitter</th>
                                <th scope="col">youtube</th>
                                <th scope="col">photo</th>
                                <th scope="col">operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($links as $link)
                                <tr>
                                    <td>{{ $link->id }}</td>
                                    <td><a href="{{ $link->link }}">video linki</a></td>
                                    <td><a href="{{ $link->telegram }}">telegram</a></td>
                                    <td><a href="{{ $link->instagram }}">instagram</a></td>
                                    <td><a href="{{ $link->facebook }}">facebook</a></td>
                                    <td><a href="{{ $link->twitter }}">twitter</a></td>
                                    <td><a href="{{ $link->youtube }}">youtube</a></td>
                                    <td><img src="{{ asset('storage/' . $link->photo) }}" alt="" style="width: 80px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('link.edit', ['link' => $link->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('link.destroy', ['link'=> $link->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('link.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
