<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div>
        <form
            action="{{route('auth.postSignup')}}"
            method="POST"
        >
            @csrf
            <div>
                <label for="">Name</label>
                <input type="text" name="name">
            </div>

            <div>
                <label for="">Email</label>
                <input type="text" name="email">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password">
            </div>
            <div>
                <label for=""> Comfirm Password</label>
                <input type="password" name="comfirmpassword">
            </div>
            <div>
                <button>Sign up</button>
            </div>
        </form>
    </div>
</body>
</html>
