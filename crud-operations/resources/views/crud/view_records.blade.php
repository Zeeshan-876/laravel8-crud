<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
          <title>View Records</title>
     </head>

     <body>
          <div class="container">
               <div class="row">
                    <div class="col-md-8 offset-md-2">
                         <h2>Laravel CRUD | View , Delete Records</h2>
                         <hr>
                         <a href="{{url('form')}}" class="btn btn-outline-info">Add Records</a>
                    </div>
               </div>
               <div class="row">
                    <div class="col-md-8 offset-md-2">
                         <table class="table table-striped table-bordered">
                              <thead class="table-dark">
                                   <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone No</th>
                                        <th>Email</th>
                                        <th>Job Title</th>
                                        <th>Salary</th>
                                        <th>Actions</th>
                                   </tr>
                              </thead>

                              <tbody>
                                   @foreach($mydata as $data)
                                   <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->phone_no}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->job_title}}</td>
                                        <td>{{$data->job_salary}}</td>
                                        <td>
                                             <div class="btn-group">
                                                  <a href="destroy/{{$data->id}}"
                                                       class="btn btn-outline-danger">Delete</a>
                                                  <a href="edit/{{$data->id}}"
                                                       class="btn btn-outline-success">Update</a>
                                             </div>
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </body>

</html>