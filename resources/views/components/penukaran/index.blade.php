<x-app-layout>
    <x-slot:title>
        Penukaran Management
    </x-slot>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Penukaran Management</h3>
                    <p class="text-subtitle text-muted"></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Penukaran Management</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <h5 class="card-title">
                            Data Penukaran
                        </h5>
                    </div>
                    <div>
                        <a href="{{route('penukaran.create')}}" class="btn btn-primary">
                            <i class="bi bi-plus-square-fill"></i> Tambah Penukaran
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>ID Warga</th>
                            <th>ID Item Penelusuran</th>
                            <th>Stamp</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($penukaran as $t)
                            <tr>
                                <td>{{ $t->warga_id }}</td>
                                <td>{{ $t->item_penukaran_id }}</td>
                                <td>{{ $t->stamp }}</td>
                                <td class="d-flex justify-content-start">
                                    <a href="{{route('penukaran.index')}}" class="btn btn-sm btn-light ml-5" style="margin: 0 10px 0 10px">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('penukaran.edit', $t->id) }}" class="btn btn-sm btn-primary" style="margin: 0 10px 0 10px">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('penukaran.destroy', $t->id) }}" method="POST" id="delete-penukaran-form-{{ $t->id }}" style="margin: 0 10px 0 10px">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-danger delete-penukaran" data-id="{{ $t->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    @push('styles')
        <link rel="stylesheet" href="{{asset('assets/extensions/simple-datatables/style.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/scss/pages/simple-datatables.scss') }}">
        <link rel="stylesheet" href="{{asset('assets/extensions/sweetalert2/sweetalert2.min.css')}}">
    @endpush
    @push('scripts')
        <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
        <script src="{{ asset('assets/static/js/pages/simple-datatables.js') }}"></script>
        <script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
        <script>
            $('.delete-penukaran').on('click', function () {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete-penukaran-form-' + $(this).data('id') + '').submit();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                    )
                }
                })
            })
        </script>
    @endpush
</x-app-layout>
