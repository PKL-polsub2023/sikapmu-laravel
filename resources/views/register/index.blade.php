@extends('template_front.layout')

@section('content')
@section('title', 'Login')   
<!-- <section class="uni-banner">
   <div class="container">
      <div class="uni-banner-text-area">
         <h1>Login</h1>
         <ul>
            <li><a href="/">Home</a></li>
            <li>Login</li>
         </ul>
      </div>
   </div>
</section> -->

<section class="contact-form-area pb-100">
   <div class="container">
      <div class="section-content">
         <div class="row">
            
            <div class="col-lg-8">
               <h3>Daftar Silapem </h3>
               <div class="contact-form-text-area">
                  <form method="POST" action="{{ route('register') }}">
                     @csrf

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
                             value="{{ old('email') }}">
                     </div>
                     @error('email')
                         <p class='text-danger inputerror'>{{ $message }} </p>
                     @enderror
                     <div class="input-group input-group-outline mt-3">
                         <label class="form-label">Password</label>
                         <input type="password" class="form-control" name="password">
                     </div>
                     @error('password')
                         <p class='text-danger inputerror'>{{ $message }} </p>
                     @enderror
                     <div class="input-group input-group-outline mt-3">
                         <label class="form-label">Konfirmasi Password</label>
                         <input type="password" class="form-control" name="kpassword">
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
                             <option selected disabled>Pilih jenis...</option>
                             <option value="pp">Pemuda Pelopor</option>
                             <option value="wm">Wirausaha Muda</option>
                             <option value="okp">OKP</option>
                             <option value="uu">User Umum</option>
                         </select>
                     </div>


                     @error('kontak')
                         <p class='text-danger inputerror'>{{ $message }} </p>
                     @enderror
                     <div class="text-center">
                         <button type="submit" class="btn btn-lg btn-lg w-100 mt-4 mb-0"
                             style="background-color: #0057FF;"><i
                                 class="text-sm text-white">Daftar</i>
                         </button>
                     </div>

                 </form>
                  {{-- <form id="FormDaftar">
                     <div class="row align-items-center">
                        <div class="col-md-6 col-sm-6 col-12">
                           <div class="form-group">
                              <input type="text" class="form-control form-control-sm" placeholder="Username" id="username" required="" data-error="Mohon input username">
                              
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control form-control-sm" placeholder="Nama" id="name" required="" data-error="Mohon input nama">
                              
                           </div>
                           <div class="form-group">
                              <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" id="email" required="" data-error="Mohon input Email">
                              
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                           <div class="form-group">
                              <input type="password" class="form-control form-control-sm" placeholder="Password" id="password" required="" data-error="Mohon input password">
                              
                           </div>
                           <div class="form-group">
                              <input type="password" class="form-control form-control-sm" placeholder="Konfirmasi Password" id="konfirmasipassword" required="" data-error="Mohon input konfirmasi password">
                              
                           </div>
                           <div class="form-group">
                              <select class="form-control form-control-sm w-100 bg-white" name="pilih">
                                 <option value="">=== Pilih ===</option>
                                 <option value="">Pemuda Pelopor</option>
                                 <option value="">Wirausaha Muda</option>
                                 <option value="">OKP</option>
                                 <option value="">Admin</option>
                                 <option value="">User Admin</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                              <div class="form-check">
                                 <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="">
                                 <label class="form-check-label" for="gridCheck">
                                 I agree to the <a href="#">terms</a> and <a href="#">privacy policy</a>
                                 </label>
                                 <div class="help-block with-errors gridCheck-error"></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                           <button class="default-button" type="submit"><span>Daftar</span></button>
                           <a href="/login" class="btn btn-dark w-100 mt-3" ><span>Login</span></a>
                           <div id="msgSubmit" class="h6 text-center hidden"></div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </form> --}}
               </div>
            </div>
            <div class="col-lg-4">
               <div class="pr-20">
                  <img src="{{ asset('') }}front/images/laptop-and-book-scaled.jpg" class="fit-object" alt="image" style="width:100%;height:600px;">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection