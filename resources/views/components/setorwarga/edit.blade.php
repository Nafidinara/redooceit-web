<x-app-layout>
    <x-slot:title>
        Edit Setoran Warga
    </x-slot>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Setoran Warga</h3>
                    <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('setoranwarga.index')}}">TPS Management</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit TPS</li>
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
                                <a href="{{route('tps.index')}}">
                                    <i class="bi bi-arrow-left"></i>
                                    Back
                                </a>
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="POST" action="{{ route('setoranwarga.update', $setoran_wargas->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="warga_id">Warga Id</label>
                                                <input type="text" id="warga_id" class="form-control"
                                                       value="{{ $setoran_wargas->warga_id }}" name="warga_id">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="berat">Berat</label>
                                                <input type="number" id="berat" class="form-control"
                                                       value="{{ $setoran_wargas->berat }}" name="berat">
                                            </div>
                                        </div>
                                    
                                        <div class="form-group col-md-12 col-12">
                                            <label for="stamp" class="form-label">Stamp</label>
                                            <textarea class="form-control" id="stamp" name="stamp" rows="3">{{ $setoran_wargas->stamp }}</textarea>
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
