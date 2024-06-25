<x-layouts.auth>
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="card shadow-sm border-0">
                <div class="card-header text-center bg-primary text-white">
                    <h3 class="mb-0">Login</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('authenticate') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-user"></i>
                                    </span>
                                </div>
                                <input name="email" type="email" class="form-control" placeholder="Email" required>
                            </div>
                            @error('email')
                                <div class="text-danger mt-2">Ro'yhatdan o'tmagan email bilan kirish taqiqlanadi</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Parol</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input name="password" type="password" class="form-control" placeholder="Parolni kiriting" required>
                            </div>
                            @error('password')
                                <div class="text-danger mt-2">Parol mos kelmadi</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Kirish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.auth>
