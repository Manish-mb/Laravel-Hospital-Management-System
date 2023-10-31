@include('admin.css')
@include('admin.navbar')
  
<div class="container-fluid page-body-wrapper">
@include('admin.sidebar')

<div class="col-md-7 grid-margin stretch-card page-body-wrapper">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Appointment table</h4>
                    
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Customer Name</th>
                          <th> Email </th>
                          <th> Phone </th>
                          <th> Doctor Name </th>
                          <th> Date </th>
                          <th> Message </th>
                          <th> Status</th>
                          <th> Approved</th>
                          <th> Cancel</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $appoint)
                        <tr>
                          <td>{{ $appoint->name}}</td>
                          <td>{{$appoint->email}}</td>
                          <td>{{$appoint->phone}}</td>
                          <td>{{$appoint->doctor}}</td>
                          <td>{{$appoint->date}}</td>
                          <td>{{$appoint->message}}</td>
                          <td>{{$appoint->status}}</td>
                          <td><a href="{{url('approved', $appoint->id)}}" class="btn btn-outline-success btn-sm">Approved</a></td>
                          <td><a href="{{url('canceled',$appoint->id)}}" class="btn btn-outline-danger btn-sm">Canceled</a></td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
           </div>
         
@include('admin.script')