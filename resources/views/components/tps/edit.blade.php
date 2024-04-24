<x-app-layout>
    <x-slot:title>
        Edit TPS
    </x-slot>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit TPS</h3>
                    <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('tps.index')}}">TPS Management</a></li>
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
                                <form class="form" method="POST" action="{{ route('tps.update', $tps->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="name">Nama</label>
                                                <input type="text" id="name" class="form-control"
                                                       value="{{ $tps->name }}" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="latitude">Latitude</label>
                                                <input type="text" id="latitude" class="form-control"
                                                       value="{{ $tps->latitude }}" name="latitude">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="longitude">Longitude</label>
                                                <input type="text" id="longitude" class="form-control"
                                                       value="{{ $tps->longitude }}" name="longitude">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h6>Jenis</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" id="type" name="type">
                                                    <option @if($tps->type == 'bsu') selected @endif value="bsu">Bank Sampah Unit</option>
                                                    <option @if($tps->type == 'bsi') selected @endif value="bsi">Bank Sampah Induk</option>
                                                    <option @if($tps->type == 'tps') selected @endif value="tps">TPS</option>
                                                    <option @if($tps->type == 'tps3r') selected @endif value="tps3r">TPS3R</option>
                                                    <option @if($tps->type == 'tpst') selected @endif value="tpst">TPST</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="form-group col-md-12 col-12">
                                            <label for="address" class="form-label">Alamat</label>
                                            <textarea class="form-control" id="address" name="address" rows="3">{{ $tps->address }}</textarea>
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
