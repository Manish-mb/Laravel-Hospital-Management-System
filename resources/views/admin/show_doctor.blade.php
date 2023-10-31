@include('admin.css')
@include('admin.navbar')
  
<div class="container-fluid page-body-wrapper">
@include('admin.sidebar')

<div class="col-md-7 grid-margin stretch-card page-body-wrapper">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Doctors table</h4>
                    
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Sr. No.</th>
                          <th> Doctor Name </th>
                          <th> Phone </th>
                          <th> Speciality </th>
                          <th> Room No.</th>
                          <th> Doctor Image</th>
                          <th class="text-center"> Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $doctor)
                        <tr>
                          <td>{{$doctor->id}}</td>
                          <td>{{$doctor->doctor_name}}</td>
                          <td>{{$doctor->phone}}</td>
                          <td>{{$doctor->speciality}}</td>
                          <td>{{$doctor->room_no}}</td>
                          <td><img src="doctorimage/{{$doctor->image}}" class="" style="height:60px; width: 70px;" ></td>
                          <td><a href="{{url('doctor_update', $doctor->id)}}" class="btn btn-outline-success btn-sm">Update</a>
                          <a href="{{url('doctor_delete',$doctor->id)}}" class="btn btn-outline-danger btn-sm">Delete</a></td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
           </div>
         
@include('admin.script')