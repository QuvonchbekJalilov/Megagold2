<x-layouts.admin>

    <div class="card mt-3">
        <div class="py-4 mx-3">
        <div class="card-header"><h2><b>Kontakt tahrirlash</b></h2></div>

            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('contact.update', $contact->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Title UZ field -->
                            <div class="mb-3">
                                <label for="title_uz" class="form-label">Qisqa ma'lumot (Uzbek tilida)</label>
                                <input type="text" id="title_uz" class="form-control" name="title_uz" placeholder="Qisqa ma'lumot (Uzbek)" value="{{ old('title_uz', $contact->title_uz) }}">
                                @error('title_uz')
                                <div class="text-danger">Qisqa ma'lumot (Uzbek): {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Title RU field -->
                            <div class="mb-3">
                                <label for="title_ru" class="form-label">Qisqa ma'lumot (Rus tilida)</label>
                                <input type="text" id="title_ru" class="form-control" name="title_ru" placeholder="Qisqa ma'lumot (Rus)" value="{{ old('title_ru', $contact->title_ru) }}">
                                @error('title_ru')
                                <div class="text-danger">Qisqa ma'lumot (Rus tilida): {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Title EN field -->
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Qisqa ma'lumot (Ingliz tilida)</label>
                                <input type="text" id="title_en" class="form-control" name="title_en" placeholder="Qisqa ma'lumot (Ingliz)" value="{{ old('title_en', $contact->title_en) }}">
                                @error('title_en')
                                <div class="text-danger">Qisqa ma'lumot (Ingliz tilida): {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Email field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="email kiriting" value="{{ old('email', $contact->email) }}">
                                @error('email')
                                <div class="text-danger">Email: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Phone Number field -->
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Telefon Raqam</label>
                                <input type="text" id="phone_number" class="form-control" name="phone_number" placeholder="Telefon Raqam" value="{{ old('phone_number', $contact->phone_number) }}">
                                @error('phone_number')
                                <div class="text-danger">Telefon Raqam: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content">
                        <a href="{{ route('contact.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Yangilash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
