<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Update Record</title>
          <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
     </head>

     <body>
          <div class="container">
               <div class="row">
                    <div class="col-md-8 offset-md-2 mt-4">
                         <h2 class="text-center">Laravel CRUD | Update Record</h2>
                         <hr>
                         <a href="{{url('show')}}" class="btn btn-info">View Record</a>

                    </div>
               </div>
               <div class="row">
                    <div class="col-md-6 offset-md-3">
                         <form action="update/{{$edit_data->id}}" method="get">
                              @csrf

                              <div class="form-group">
                                   Name <input type="text" name="name" value="{{$edit_data->name}}"
                                        placeholder="User name" class="form-control">
                              </div>

                              <div class="form-group">
                                   Phone No <input type="text" value="{{$edit_data->phone_no}}" name="phone_no"
                                        placeholder="Phone No" class="form-control">
                              </div>

                              <div class="form-group">
                                   Email <input type="text" value="{{$edit_data->email}}" name="email"
                                        placeholder="Email" class="form-control">
                              </div>

                              <div class="form-group">
                                   Job Title <input type="text" value="{{$edit_data->job_title}}" name="job_title"
                                        placeholder="Job Title" class="form-control">
                              </div>

                              <div class="form-group">
                                   Job Salary <input type="text" value="{{$edit_data->job_salary}}" name="job_salary"
                                        placeholder="Salary" class="form-control">
                              </div>
                              <br>
                              <button type="submit" class="btn btn-outline-success w-100">Update Record</button>

                         </form>
                    </div>
               </div>
          </div>
     </body>

</html>