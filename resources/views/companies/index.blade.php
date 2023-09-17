@extends('layouts.app')
@section('main')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>companies</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item" active>companies</li>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
   
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Companies </h5>
              <p>All the Companies are availble here to see and  mentain !</p>
              
              <a href="{{route('companies.create')}}"><button type="button" class="btn btn-primary"><i class="bi bi-plus"></i>create company</button></a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email </th>
                    <th scope="col">Web site</th>
                    <th scope="col">Edit</th>
                    <th scope="col">delete <i class="bi bi-trash"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                  <tr>
                    <th scope="row">{{$company->id}}</th>
                    <td>{{$company->name}}</td>
                    <td>{{$company->email}}</td>
                    <td>{{$company->website}}</td>
                    
                    <td><a href="{{ route('companies.edit', $company) }}" class="btn btn-primary  btn-sm" title="change department"><i class="bi bi-gear-wide"></i></a></td>
                    <td>
                      <form action="{{ route('companies.destroy', $company) }}"  method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Remove" class="btn btn-danger btn-sm">
                      </form>
                    </td>
                  </tr>
                  @endforeach
                
                </tbody>
              </table>
           
          </div>
           </div>


                
        </div>        
        
       

        </div>             
    </section>

  </main><!-- End #main -->





@endsection