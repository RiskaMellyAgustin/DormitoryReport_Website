@extends('layouts.app')

@section('title', 'Pengaduan')

@section('content')
<main id="main" class="martop">

    <section class="inner-page">
      <div class="container ">
        <div class="title text-center mb-5">
            <h3 class="fw-bold">Student Complaints Service</h3>
            <h5 class="fw-normal">Submit your report directly to us</h5>
        </div>
       <div class="card card-responsive p-4 border-0 col-md-8 shadow rounded mx-auto">
        <form action="{{ route('pengaduan.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="judul_laporan" class="form-label">Report Title</label>
                <input type="text" value="{{ old('judul_laporan') }}" name="judul_laporan" id="judul_laporan"
                    placeholder="Type the Complaint Title" class="form-control @error('judul_laporan') is-invalid @enderror" required >
                @error('judul_laporan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="isi_laporan" class="form-label">Contents of the report</label>
                <textarea name="isi_laporan" id="isi_laporan"
                    placeholder="Type the contents of the Complaint" rows="5" class="form-control @error('isi_laporan') is-invalid @enderror" required>{{ old('isi_laporan') }}</textarea>
                @error('isi_laporan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="tgl_kejadian" class="form-label">Event Date</label>
                <input type="date" value="{{ old('tgl_kejadian') }}" name="tgl_kejadian" id="tgl_kejadian"
                    placeholder="Event Date" class="form-control @error('tgl_kejadian') is-invalid @enderror" required
                    >
                @error('tgl_kejadian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="lokasi_kejadian" class="form-label">Number Room</label>
                <textarea name="lokasi_kejadian" id="lokasi_kejadian"
                    placeholder="Type Number Room" rows="3" class="form-control @error('lokasi_kejadian') is-invalid @enderror" required>{{ old('lokasi_kejadian') }}</textarea>
                @error('lokasi_kejadian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!-- <div class="form-group mb-3">
                <label for="foto" class="form-label">Photo Evidence</label>
                <input type="file" name="foto" id="foto" class="form-control @error('file') is-invalid @enderror" required>
                @error('file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> -->

            <button type="submit" class="btn btn-primary">SUBMIT</button>

        </form>
       </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection

@push('addon-script')
    @if (!auth('masyarakat')->check())
        <script>
            Swal.fire({
                title: 'Attention!',
                text: "You must log in first!",
                icon: 'warning',
                confirmButtonColor: '#28B7B5',
                confirmButtonText: 'Login',
                allowOutsideClick: false
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '{{ route('user.masuk') }}';
                }else{
                    window.location.href = '{{ route('user.masuk') }}';
                }
                });
        </script>
    @elseif(auth('masyarakat')->user()->email_verified_at == null && auth('masyarakat')->user()->telp_verified_at == null)
        <script>
            Swal.fire({
                title: 'Peringatan!',
                text: "Akun belum diverifikasi!",
                icon: 'warning',
                confirmButtonColor: '#28B7B5',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '{{ route('user.masuk') }}';
                }else{
                    window.location.href = '{{ route('user.masuk') }}';
                }
                });
        </script>
    @endif

    @if (session()->has('pengaduan'))
        <script>
            Swal.fire({
                title: 'Pemberitahuan!',
                text: '{{ session()->get('pengaduan') }}',
                icon: '{{ session()->get('type') }}',
                confirmButtonColor: '#28B7B5',
                confirmButtonText: 'OK',
            });
        </script>
    @endif
@endpush
