<x-app-layout>
    <x-slot:title>
        Card
    </x-slot>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Progress</h3>
                    <p class="text-subtitle text-muted">Examples for how to use Bootstrap’s included progress components.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Progress</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Progress Label Start  -->
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4>Progress Label</h4>
                </div>
                <div class="card-body">
                    <p>Use class <code>.progress-bar-{color-name}</code> to add different colors to progressbar.</p>
                    <div class="progress progress-primary  mb-4">
                        <div class="progress-bar progress-label" role="progressbar" style="width: 35%" aria-valuenow="35"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress progress-secondary  mb-4">
                        <div class="progress-bar progress-label" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress progress-warning  mb-4">
                        <div class="progress-bar progress-label" role="progressbar" style="width: 50%" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress progress-danger  mb-4">
                        <div class="progress-bar progress-label" role="progressbar" style="width: 40%" aria-valuenow="40"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress progress-dark  mb-4">
                        <div class="progress-bar progress-label" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress progress-info  mb-4">
                        <div class="progress-bar progress-label" role="progressbar" style="width: 88%" aria-valuenow="88"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Progress Label End  -->
    </div>
</x-app-layout>
