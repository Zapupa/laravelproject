@extends('layouts.main')
@section('content')
<div class='container md:mx-auto border m-4'>
    <h2>Список товаров</h2>
    @foreach($array as $arr)
    <div class='flex justify-between'>
      <p class="border w-full">{{$arr["id"]}}</p>
      <p class="border w-full">{{$arr["title"]}}</p>
      <p class="border w-full">{{$arr["price"]}}</p>
    </div>
    @endforeach
</div>
        
</div>
@endsection()