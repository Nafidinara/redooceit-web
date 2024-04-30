<x-app-layout>
    <x-slot:title>
        Tambah Sampah Baru
    </x-slot>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Sampah Baru</h3>
                    <p class="text-subtitle text-muted"></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('sampah.index')}}">Sampah Management</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Sampah</li>
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
                                <a href="{{route('sampah.index')}}">
                                    <i class="bi bi-arrow-left"></i>
                                    Back
                                </a>
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="POST" action="{{ route('sampah.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="tps_id">TPS ID</label>
                                                <input type="text" id="tps_id" class="form-control"
                                                       placeholder="Masukkan TPS ID" name="tps_id">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <input type="text" id="keterangan" class="form-control"
                                                       placeholder="Masukkan keterangan" name="keterangan">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="volume">Volume</label>
                                                <input type="text" id="volume" class="form-control"
                                                       placeholder="Masukkan volume" name="volume">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h6>Jenis</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" id="jenis" name="jenis">
                                                    <option value="basah">Basah</option>
                                                    <option value="kering">Kering</option>
                                                </select>
                                            </fieldset>
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
