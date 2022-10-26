<!DOCTYPE html>
<html lang="en">

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

    <title>Login | SDNTS</title>

</head>

<body>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="{{ url('/images/photo-reg.jpg')}}"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; height: 300px;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

            <form class="px-md-2" action="{{ route('register.custom') }}" method="post">
            @csrf
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control"  name="name" placeholder="name" />
                <label class="form-label" for="form3Example1q">Name</label>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="form3Example2q" class="form-control" name="email" placeholder="email"/>
                <label class="form-label" for="form3Example2q">Email</label>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                </div>
              
              <div class="form-outline mb-4">
                <input type="password" id="form3Example3q" class="form-control"  name="password" required max="12" placeholder="password"/>
                <label class="form-label" for="form3Example3q">Password</label>
                @if ($errors->has('password'))
              <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
              </div>
              <div class="mb-2">
                <p class="mb-1">Don't have an account? <b><u><a style="color: #393f81;" href="{{ route('login') }}" style="color: #1b2382;">Click here</a></u></b></p>
                </div>
              <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
              </div>
            
             

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>