<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title></title>
</head>

<body>
    <form action="{{ URL::to('role/show') }}" method="GET">
        <div style="padding: 20px;">

            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif

            @foreach ($roles as $role)
                <input class="" type="checkbox" name="role_id[]" value="{{ $role->id }}"> <b>{{ $role->name }}</b><br>
                @if (!$loop->last)
                    <br>
                @endif
            @endforeach
        </div>
        <div style="padding: 20px;">
            <button type="submit" class="btn btn-primary">Show</button>
        </div>
    </form>
</body>

</html>
