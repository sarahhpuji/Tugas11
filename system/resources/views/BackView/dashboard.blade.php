@inject('timeService', 'App\Services\TimeServices')

@extends('Template.base')

@section('content')
    <div class="float-right">
        Jam : {{$timeService->showTimeNow()}}
    </div>
    <h1>Dashboard</h1>
@endsection