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
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
        @if (!empty($result))
            <div style="padding: 20px;">
                @foreach ($result as $item)
                    <span>{{ $item->name }}</span>
                    @if (!$loop->last)
                        <br>
                    @endif
                @endforeach
            </div>
        @endif
</body>

</html>
