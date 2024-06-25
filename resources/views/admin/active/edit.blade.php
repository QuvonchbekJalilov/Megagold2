<x-layouts.admin>

    <div class="card mt-3">
        <div class="py-4 mx-3">
        <div class="card-header"><h2><b>Faol Mijozlarni Tahrirlash</b></h2></div>

            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('active_client.update', $activeClient->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Active Client field -->
                            <div class="mb-3">
                                <label for="active_client" class="form-label">Faol mijozlarimiz soni</label>
                                <input type="text" id="active_client" class="form-control" name="active_client" placeholder="Faol mijozlarimiz soni" value="{{ old('active_client', $activeClient->active_client) }}">
                                @error('active_client')
                                <div class="text-danger">active_client soni: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Experienced field -->
                            <div class="mb-3">
                                <label for="experienced" class="form-label">Tajribali azolarimiz soni</label>
                                <input type="text" id="experienced" class="form-control" name="experienced" placeholder="Tajribali azolarimiz soni" value="{{ old('experienced', $activeClient->experienced) }}">
                                @error('experienced')
                                <div class="text-danger">experienced: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Years of Service field -->
                            <div class="mb-3">
                                <label for="years_services" class="form-label">Hizmat ko'rsatishni boshlangan yil</label>
                                <input type="text" id="years_services" class="form-control" name="years_services" placeholder="Hizmat ko'rsatishni boshlangan yil" value="{{ old('years_services', $activeClient->years_services) }}">
                                @error('years_services')
                                <div class="text-danger">years_services: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content">
                        <a href="{{ route('active_client.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
