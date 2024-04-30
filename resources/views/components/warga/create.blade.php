<x-app-layout>
    <x-slot:title>
        Tambah Warga Baru
    </x-slot>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Warga Baru</h3>
                    <p class="text-subtitle text-muted"></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('warga.index')}}">Warga Management</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Warga</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a href="{{route('warga.index')}}">
                                    <i class="bi bi-arrow-left"></i>
                                    Back
                                </a>
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="POST" action="{{ route('warga.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="name">Nama</label>
                                                <input type="text" id="name" class="form-control"
                                                       placeholder="Masukkan nama Warga" name="nama">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-12">
                                            <label for="address" class="form-label">Alamat</label>
                                            <textarea class="form-control" id="address" name="alamat" rows="3"></textarea>
                                        </div>
                                        <div class="form-group col-md-12 col-12">
                                            <label for="phone" class="form-label">Nomor Handphone</label>
                                            <input type="text" id="phone" class="form-control" placeholder="Masukkan nomor handphone" name="no_hp">
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
{{--                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>--}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>
    @push('styles')

    @endpush
    @push('scripts')

    @endpush
</x-app-layout>
