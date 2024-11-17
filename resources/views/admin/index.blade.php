@extends('layouts.main')
@section('content')
<div class='container md:mx-auto border m-4'>
  <h2>Список репортов</h2>
  <div class='flex justify-between'>
    <p class=" border w-full">Номер заявления</p>
    <p class="border w-full">Номер авто</p>
    <p class="border w-full">Текст заявления</p>
  </div>
  @foreach($reports as $report)
    <div class='flex justify-between'>
    <p class=" border w-full">{{ $report->id }}</p>
    <p class="border w-full">{{ $report->number }}</p>
    <p class="border w-full">{{ $report->description }}</p>
    </div>
  @endforeach
</div>

@endsection()