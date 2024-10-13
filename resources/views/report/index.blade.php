@extends('layouts.main')
@section('content')
<div class='container md:mx-auto border m-4'>
    <h2>Список репортов</h2>
    @foreach($reports as $report)
    <div class='flex justify-between'>
        <p class="border w-full">{{ $report->number }}</p>
        <p class="border w-full">{{ $report->description }}</p>
        <p class="border w-full">{{ $report->created_at }}</p>
    </div>
    @endforeach
</div>

@endsection()