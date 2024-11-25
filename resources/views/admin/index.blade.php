@extends('layouts.main')
@section('content')
<div class='container md:mx-auto border m-4'>
  <h2>Список репортов</h2>
  <div class='flex justify-between'>
    <p class=" border w-full">Дата заявления</p>
    <p class=" border w-full">Номер </p>
    <p class="border w-full">Имя пользователя</p>
    <p class="border w-full">Текст заявления</p>
    <p class="border w-full">Статус</p>
  </div>
  @foreach($reports as $report)
    <div class='flex justify-between'>
    <p class="border w-full">{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}</p>
    <p class=" border w-full">{{ $report->number }}</p>
    <p class="border w-full">{{ $report->user->fullName() }}</p>
    <p class="border w-full">{{ $report->description }}</p>
    @if($report->status_id == 1)
    <form class="border w-full" id="form-update-{{$report->id}}" action="{{route('reports.update')}}" method="POST">
      @csrf
      @method('PATCH')
      <input type="hidden" name="id" value="{{$report->id}}">
      <select class="border w-full" name="status_id" onchange="document.getElementById('form-update-{{$report->id}}').submit()">
      @foreach ($statuses as $status)
      <option value="{{$status->id}}">{{$status->name}}</option>
    @endforeach
      </select>
    </form>
  @else
  <p class="border w-full">{{ $report->status->name }}</p>
  @endif
    </div>
  @endforeach
</div>

@endsection()