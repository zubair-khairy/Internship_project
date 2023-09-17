@extends('layouts.app')
@section('main')


<main id="main" class="main">


 <!--  Page Title -->
    <div class="pagetitle">
      <h1>edit Employee</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Employee</li>
          <li class="breadcrumb-item active">edit Employee</li>
        </ol>
      </nav>
    </div>
    
    <!-- End Page Title -->


    <!-- company section -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-16 d-flex flex-column align-items-center justify-content-center">
                <hr> <hr> 
                <div class="card mb-3">
                <div class="card-body">

                    <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">edit Employee</h5>
                    <p class="text-center small">Enter your details of Employee</p>
                    </div>
            
                    <form class="row g-3 needs-validation"  enctype="multipart/form-data" novalidate  method="post" action="{{route('employees.update', $employee)}}">
                     @csrf
                     @method('PUT')
                    <div class="col-12">
                        <label for="Employee_first_name" class="form-label">Employee name </label>
                        <input type="text" class="form-control" name="first_name"    id="Employee_first_name">
                        <div class="invalid-feedback">Please, enter Employee first_name </div>
                    </div>
                    <div class="col-12">
                        <label for="Employee_last_name" class="form-label">Employee last_name </label>
                        <input type="text" class="form-control" name="last_name"    id="Employee_last_name"  >
                        <div class="invalid-feedback">Please, enter Employee last_name </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                       <select class="form-select" name="company_id" id="floatingSelect" aria-label="Floating label select example">
                           <option selected>companies</option>
                        @foreach($companies as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                      </select>
                      <label for="floatingSelect">select company</label>
                    </div>
                     <div class="col-12">
                        <label for="employee_email" class="form-label">employee email </label>
                        <input type="text" class="form-control" name="email"    id="employee_email"  >
                        <div class="invalid-feedback">Please, enter employee email </div>
                    </div>
                    <div class="col-12">
                        <label for="employee_phone" class="form-label">employee phone # </label>
                        <input type="text" class="form-control" name="phone"    id="employee_phone"  >
                        <div class="invalid-feedback">Please, enter employee phone # </div>
                    </div>
                    <div class="col-12">
                    <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">File Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" name= "logo" type="file" id="logo">
                            </div>
                    </div>
                    </div>
                           
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">apply changes</button>
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