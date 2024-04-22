@extends('front.layouts.app')

@section('main')
<style>
    .dashboard{
        display: block;
    }
    .dashboard h3{
        font-size: 20px;
    }
    .gh{
        font-size: 12px;
    }
    .card{
        margin-bottom: 16px;
    }
</style>
<section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                @include('admin.sidebar')
            </div>
            <div class="col-lg-9">
                @include('front.message')
                <div class="card border-0 shadow mb-4">
                   <div class="card-body dashboard">
                        {{-- <p class="h2">Welcome Administrator!!</p> --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>TOTAL EMPLOYEE</h3>
                                        <p class="gh">({{$total_employees}}) Employees Available</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>TOTAL USER LOGIN</h3>
                                        <p class="gh">(1) User Available</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>TOTAL COMPANY</h3>
                                        <p class="gh">({{$total_company}}) Company Available</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>TOTAL JOBS</h3>
                                        <p class="gh">({{$total_jobs}}) Jobs Available</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>TOTAL APPLIED JOBS</h3>
                                        <p class="gh">({{$total_jobs_applied}}) Applied Jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>                          
            </div>
        </div>
    </div>
</section>
@endsection

@section('customJs')
@endsection