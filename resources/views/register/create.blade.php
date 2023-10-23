<x-layout bodyClass="">
    <x-navbars.navs.navland signin='login' signup='register'></x-navbars.navs.navland>
    <div>
        <div class="container position-sticky z-index-sticky top-0">

        </div>
        <main class="main-content mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <h1 class="text-start mx-3" style="color: rgb(0, 0, 0); font-size: 18px;">Daftar SiPanda</h1>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card card-plain">
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username"
                                                    value="{{ old('username') }}">
                                            </div>
                                            @error('username')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ old('name') }}" required>

                                            </div>
                                            @error('username')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="nama"
                                                    value="{{ old('nama') }}">
                                            </div>
                                            @error('nama')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ old('email') }}" required>
                                            </div>
                                            @error('email')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password" required>
                                            </div>
                                            @error('password')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">Kontak</label>
                                                <input type="test" class="form-control" name="kontak"
                                                    value="{{ old('kontak') }}" required>
                                            </div>
                                            <div class="input-group input-group-outline mt-3">
                                                <select name="role" class="form-control" required>
                                                    <option selected disabled>Role</option>
                                                    <option value="okp">Organisasi Kepemudaan</option>
                                                    <option value="wm">Wirausaha Muda</option>
                                                    <option value="pp">Pemuda Pelopor</option>
                                                    <option value="u">Umum</option>
                                                </select>
                                            </div>
                                            <div class="form-check form-check-info text-start ps-0 mt-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" checked>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I agree the <a href="javascript:;"
                                                        class="text-dark font-weight-bolder">Terms and Conditions</a>
                                                </label>
                                            </div>
                                            @error('kpassword')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mt-3">
                                                <label class="form-label">No Hp</label>
                                                <input type="text" class="form-control" name="kontak"
                                                    value="{{ old('kontak') }}">
                                            </div>
                                            @error('kontak')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="input-group input-group-outline mb-3 mt-3">
                                                <select class="form-control" name="role" required>
                                                    <option value="">Pilih jenis...</option>
                                                    <option value="Pemuda Pelopor">Pemuda Pelopor</option>
                                                    <option value="Wirausaha Muda">Wirausaha Muda</option>
                                                    <option value="OKP">OKP</option>
                                                    <option value="Admin">Admin</option>
                                                </select>
                                            </div>


                                            @error('kontak')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-lg btn-lg w-100 mt-4 mb-0"
                                                    style="background-color: #0057FF;"><i
                                                        class="text-sm text-white">Sign Up</i>
                                                </button>
                                            </div>

                                        </form>
                                        <div class="text-center">
                                            <a href="{{ url('sign-in') }}"
                                                class="btn btn-lg bg- btn-lg w-100 mt-4 mb-0"
                                                style="background-color: #000000;"><i class="text-sm text-white">Kembali
                                                    Ke Login</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-4 d-lg-flex d-none my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-end flex-column">
                                <div
                                    class="position-relative   border-radius-lg d-flex flex-column justify-content-center">
                                    <img src="{{ asset('assets/img/bg_in.png') }}" alt="profile-img"
                                        class="text-center" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    @push('js')
        <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
        <script>
            $(function() {

                var text_val = $(".input-group input").val();
                if (text_val === "") {
                    $(".input-group").removeClass('is-filled');
                } else {
                    $(".input-group").addClass('is-filled');
                }
            });
        </script>
    @endpush
</x-layout>
