<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Form</title>
          <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     </head>

     <body>
          <div class="container">
               <div class="row">
                    <div class="col-md-8 offset-md-2 mt-4">
                         <h2 class="text-center">Laravel CRUD | Insert Record</h2>
                         <hr>
                         <a href="{{url('show')}}" class="btn btn-outline-info">View Records</a>
                         <a href="{{url('/')}}" class="btn btn-outline-info">Go to Main Page</a>
                         @if(Session::get('Success'))
                         <div class="alert alert-success">
                              {{Session::get('Success')}}
                         </div>
                         @endif

                         @if(Session::get('Fail'))
                         <div class="alert alert-danger">
                              {{Session::get('Fail')}}
                         </div>
                         @endif
                    </div>
               </div>
               <div class="row">
                    <div class="col-md-6 offset-md-3">
                         <form action="store" method="POST">
                              @csrf

                              <div class="form-group">
                                   Name <input type="text" name="name" placeholder="User name" class="form-control">
                                   <span style="color: red;"> @error('name') {{$message}} @enderror</span>
                              </div>

                              <div class="form-group">
                                   Phone No <input type="text" name="phone_no" placeholder="Phone No"
                                        class="form-control">
                                   <span style="color: red;"> @error('phone_no') {{$message}} @enderror</span>
                              </div>

                              <div class="form-group">
                                   Email <input type="text" name="email" placeholder="Email" class="form-control">
                                   <span style="color: red;"> @error('email') {{$message}} @enderror</span>
                              </div>

                              <div class="form-group">
                                   Job Title <input type="text" name="job_title" placeholder="Job Title"
                                        class="form-control">
                                   <span style="color: red;"> @error('job_title') {{$message}} @enderror</span>
                              </div>

                              <div class="form-group">
                                   Job Salary <input type="text" name="job_salary" placeholder="Salary"
                                        class="form-control">
                                   <span style="color: red;"> @error('job_salary') {{$message}} @enderror</span>
                              </div>
                              <br>
                              <button type="submit" class="btn btn-outline-primary w-100">Insert Record</button>

                         </form>
                    </div>
               </div>
          </div>
     </body>

</html>