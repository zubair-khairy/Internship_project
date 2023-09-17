@extends('layouts.app')

@section('main')
<main id="main" class="main">
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Edit Company</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">Companies</a></li>
                <li class="breadcrumb-item active">Edit Company</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <!-- Company section -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-16 d-flex flex-column align-items-center justify-content-center">
                            <hr>
                            <hr>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Edit Company</h5>
                                        <p class="text-center small">Edit details of the Company</p>
                                    </div>
                                    <form class="row g-3 needs-validation" enctype="multipart/form-data" novalidate method="post" action="{{ route('companies.update', $company) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-12">
                                            <label for="Company_name" class="form-label">Company name</label>
                                            <input type="text" class="form-control" name="name" id="Company_name" value="{{ $company->name }}" required>
                                            <div class="invalid-feedback">Please, enter Company name</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="Company_email" class="form-label">Company email</label>
                                            <input type="text" class="form-control" name="email" id="Company_email" value="{{ $company->email }}" required>
                                            <div class="invalid-feedback">Please, enter Company email</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <label for="formFile" class="col-sm-2 col-form-label">File Upload</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="logo" type="file" id="logo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="Company_website" class="form-label">Company website</label>
                                            <input type="text" class="form-control" name="website" id="Company_website" value="{{ $company->website }}">
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Apply Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
