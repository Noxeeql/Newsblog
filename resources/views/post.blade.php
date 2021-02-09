@extends('layouts.title')

<body>

@include('layouts.header')

    <div class="mx-auto" style="width: 1000px;">
        <h1>{{$data->title}}</h1>
    </div>
    <img src={{ asset( $data->image) }}  class="rounded mx-auto d-block"  alt="lorem">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p class="text-justify">{{ $data->text }}</p>
        </div>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
