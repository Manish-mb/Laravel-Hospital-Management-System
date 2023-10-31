<section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
         
        </div>

        <form action="{{url('appointment')}}" method="post" >
         
             @csrf

          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  >
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  >
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone"  >
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
            <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                @foreach($doctor as $doctors)
                <option value="{{$doctors->doctor_name}}">{{$doctors->doctor_name}}  --speciality--
                  {{$doctors->speciality}}</option>
                @endforeach
              </select> 
              <div class="validate"></div>
            </div>
        
            <div class="col-md-4 form-group mt-3">
            <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date">
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
          @if(session()->has('message'))

         <div class="alert alert-sucess">
         {{ session()->get('message')}}
        <div>
          @endif()
          </div>
          <div class="text-center"><button name="" type="submit" class="btn btn-primary text-black" >Make an Appointment</button></div>
        </form>

      </div>
    </section>