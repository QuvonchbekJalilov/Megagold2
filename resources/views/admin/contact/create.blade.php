
<x-layouts.admin>

    <div class="card mt-3">
        <div class="py-4 mx-3">
        <div class="card-header"><h2><b>Kontakt Qo'shish</b></h2></div>

            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Active Client field -->
                            <div class="mb-3">
                                <label for="active_client" class="form-label">Qisqa ma'lumot (Uzbek tilida)</label>
                                <input type="text" id="active_client" class="form-control" name="title_uz" placeholder="Qisqa ma'lumot (Uzbek)" value="{{ old('title_uz') }}">
                                @error('active_client')
                                <div class="text-danger">Qisqa ma'lumot (Uzbek): {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="active_client" class="form-label">Qisqa ma'lumot (Rus tilida)</label>
                                <input type="text" id="active_client" class="form-control" name="title_ru" placeholder="Qisqa ma'lumot (Uzbek)" value="{{ old('title_ru') }}">
                                @error('active_client')
                                <div class="text-danger">Qisqa ma'lumot (Rus tilida): {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="active_client" class="form-label">Qisqa ma'lumot (Ingliz tilida)</label>
                                <input type="text" id="active_client" class="form-control" name="title_en" placeholder="Qisqa ma'lumot (Uzbek)" value="{{ old('title_en') }}">
                                @error('active_client')
                                <div class="text-danger">Qisqa ma'lumot (Ingliz tilida): {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Experienced field -->
                            <div class="mb-3">
                                <label for="experienced" class="form-label">Email</label>
                                <input type="email" id="experienced" class="form-control" name="email" placeholder="email kiriting" value="{{ old('email') }}">
                                @error('experienced')
                                <div class="text-danger">experienced: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Years of Service field -->
                            <div class="mb-3">
                                <label for="years_services" class="form-label">Telefon Raqam</label>
                                <input type="text" id="years_services" class="form-control" name="phone_number" placeholder="Hizmat ko'rsatishni boshlangan yil" value="{{ old('phone_number') }}">
                                @error('years_services')
                                <div class="text-danger">Telefon Raqam: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content">
                        <a href="{{ route('contact.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>

