@extends('layouts.app')
@section('main')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>employees</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item" active>employees</li>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
   
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">employees </h5>
              <p>All the employees are availble here to see and  mentain !</p>
              
              <a href="{{route('employees.create')}}"><button type="button" class="btn btn-primary"><i class="bi bi-plus"></i>Add employee</button></a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">first_name</th>
                    <th scope="col">last_name </th>
                    <th scope="col">company_id</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">Edit</th>
                    <th scope="col">delete <i class="bi bi-trash"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                  <tr>
                    <th scope="row">{{$employee->id}}</th>
                    <td>{{$employee->first_name}}</td>
                    <td>{{$employee->last_name}}</td>
                    <td>{{$employee->company->name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->phone}}</td>

       
                    </td>
                    <td><a href="{{ route('employees.edit', $employee) }}" class="btn btn-primary  btn-sm" title="change department"><i class="bi bi-gear-wide"></i></a></td>
                    <td>
                      <form action="{{route('employees.destroy',$employee)}}"  method="post">
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