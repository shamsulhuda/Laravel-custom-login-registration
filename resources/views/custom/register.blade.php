<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom login-register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                
            <form action="{{route('custom.register')}}" method="post">
                {{@csrf_field()}}
                    <fieldset>
                        <legend class="text-center">Register Form</legend>
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="fname" value="{{old('fname')}}" placeholder="Enter first name">
                            <span class="text-danger">{{ $errors->first('lname')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="lname" value="{{old('lname')}}" placeholder="Enter Last name">
                            <span class="text-danger">{{ $errors->first('lname')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email"  value="{{old('email')}}" placeholder="Enter email">
                            <span class="text-danger">{{ $errors->first('email')}}</span>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <span class="text-danger">{{ $errors->first('password')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                            <span class="text-danger">{{ $errors->first('password_confirmation')}}</span>
                        </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </fieldset>
                    </form>
            </div>
        </div>
    </div>

    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>