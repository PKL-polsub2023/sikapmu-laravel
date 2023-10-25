<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="Ads"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Ads Management"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">

                    <div class="mb-3">

                        <form method="POST" id="validationForm" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex align-items-center">
                                <input type="file" class="form-control" id="gambar" name="foto"
                                    accept=".jpg, .jpeg, .png" onchange="Submit()">

                            </div>
                        </form>

                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @foreach ($ads as $data)
                                    <div class="col-1 mx-0">
                                        <div class="profile-img">
                                            <img class="w-100" src="{{ asset('foto/ads/' . $data->foto) }}"
                                                alt="profile-img" />

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
        <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>

<script>
    function Submit() {
        var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        var formData = new FormData(document.getElementById('validationForm'));


        $.ajax({
            type: 'POST',
            url: 'ads/store',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN,
            },
            success: function(response) {
                if (response.success) {
                    location.reload();
                } else {
                    // Handle validation errors
                    var errors = response.errors;
                    var errorMessages = '';
                    for (var key in errors) {
                        errorMessages += errors[key] + '<br>';
                    }
                    document.getElementById('error-messages').style.display = "block";
                    $('#error-messages').html(errorMessages);
                }
            }
        });
    }
</script>
