@include('admin.css')
@include('admin.navbar')
  
  @if(session()->has('message'))

    <div class="alert alert-sucess">
    {{ session()->get('message')}}
    <div>
  @endif()

<div class="container-fluid page-body-wrapper">
@include('admin.sidebar')
<div class="col-9 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Doctor </h4>
                   
                    <form class="forms-sample" action="{{ url('edit_doctor', $data->id)}}" method="post" enctype="multipart/form-data">

                    @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Doctor Name</label>
                        <input type="text" name="doctor_name" value="{{ $data->doctor_name }}" class="form-control" id="exampleInputName1" placeholder="Enter Doctor Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Phone</label>
                        <input type="number" value="{{ $data->phone }}" class="form-control" id="exampleInputEmail3" name="phone">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleSelectGender">Speciality</label>
                        <select class="form-control" id="exampleSelectGender" name="speciality" value="{{ $data->speciality }}">
                          <option value="skin">Skin Speciality</option>
                          <option value="neurology">Neurology</option>
                          <option value="surgeon">Surgeon</option>
                          <option value="gastroenterology">Gastroenterology</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Room No</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Room number" name="room_no" value="{{ $data->room_no }}">
                      </div>

                      <div class="form-group">
                      <label>Old Image</label>
                      <img src="doctorimage/{{ $data->image }}" >
                      </div>
                      
                      <div class="form-group">
                        <label>Change Image</label>
                        <input type="file" name="image" class="file-upload-default" >
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="image" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary text-black" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary me-2 text-black" name="">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
</div>
@include('admin.footer')           
@include('admin.script')