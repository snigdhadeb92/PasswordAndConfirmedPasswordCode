<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <form action="{{url('/')}}/register"  method="POST">
    @csrf
    
    <div class="container">
        <h1 class="text-center">Registration Form</h1>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="" value="{{old('name')}}">
            <span class="text-danger">
              @error('name')
                  {{$message}}
              @enderror
            </span>
            <!--small id="helpId" class="text-muted">Help text</small-->
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" id="" class="form-control" placeholder="" value="{{old('email')}}">
            <span class="text-danger">
              @error('email')
              {{$message}}
              @enderror
            </span>
            <!--small id="helpId" class="text-muted">Help text</small-->
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="">
            <span class="text-danger">
              @error('password')
              {{$message}}
              @enderror
            </span>
            <!--small id="helpId" class="text-muted">Help text</small-->
        </div>
        <div class="form-group">
          <label for="">Confirm Password</label>
          <input type="password" name="password_confirmation" id="" class="form-control" placeholder="">
          <span class="text-danger">
            @error('password_confirmation')
            {{$message}}
            @enderror
          </span>
          <!--small id="helpId" class="text-muted">Help text</small-->
      </div>
        <button class="btn btn-primary">
             Submit
        </button>
    </div>

</form>
  </body>
</html>