<x-app-layout>
    <x-slot:title>
        Edit Item Penukaran
    </x-slot>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Item Penukaran</h3>
                    <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('itemPenukaran.index')}}">Item Penukaran Management</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Item Penukaran</li>
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
                                <a href="{{route('itemPenukaran.index')}}">
                                    <i class="bi bi-arrow-left"></i>
                                    Back
                                </a>
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="POST" action="{{ route('itemPenukaran.update', $itemPenukaran->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" id="nama" class="form-control"
                                                       value="{{ $itemPenukaran->nama }}" name="nama">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="harga">Harga</label>
                                                <input type="text" id="harga" class="form-control"
                                                       value="{{ $itemPenukaran->harga }}" name="harga">
                                            </div>
                                        </div><div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="stamp">Stamp</label>
                                                <input type="text" id="stamp" class="form-control"
                                                       value="{{ $itemPenukaran->stamp }}" name="stamp">
                                            </div>
                                        </div><div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="satuan">Satuan</label>
                                                <input type="text" id="satuan" class="form-control"
                                                       value="{{ $itemPenukaran->satuan }}" name="satuan">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
