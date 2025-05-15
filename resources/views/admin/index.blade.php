@extends('template_admin.layout')
@section('title', 'Dashboard Admin')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endsection
@section('content')

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">
                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card sales-card" style="background-color:rgb(251, 247, 20);">
                        <div class="card-body">
                            <h5 class="card-title">Siswa <span>| Today</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card revenue-card" style="background-color:rgb(199, 119, 167);">
                        <div class="card-body">
                            <h5 class="card-title">Guru <span>| Today</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-workspace"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card customers-card" style="background-color:rgb(30, 216, 132);">
                        <div class="card-body">
                            <h5 class="card-title">Kelas <span>| Today</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card customers-card" style="background-color:rgb(33, 93, 171);">
                        <div class="card-body">
                            <h5 class="card-title">Jurusan <span>| Today</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Left side columns -->
        <!-- Right side columns -->
        <div class="col-lg-4">
        </div>
        <!-- End Right side columns -->

@endsection