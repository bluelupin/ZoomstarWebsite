<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

{{-- <title>{{$data[0]}}</title> --}}
</head>
<body>
    <div class="container">
     <div>
        @foreach ($data as $data)
        <p>{{$data}}</p><br/>
         @endforeach
     </div>
    </div>
</body>
</html>