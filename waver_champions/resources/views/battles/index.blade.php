@extends('layouts.app')

@section('content')

        <div class="card h-700 m-5 align-items-center">
            <h2>List of Battles</h2>
            @foreach($battles as $battle)
            <div class="battle d-flex">
                <div class="player1">
                    test
                </div>
                <p class="">VS</p>
                <div class="player2">
                    test
                </div>
            @endforeach
            </div>
        </div>
        <div class="card h-700 m-5 align-items-center">
            <h2>Request a Battle</h2>
            <a href="{{route('battles.create')}}" class="card-link">Request</a>
        </div>


@endsection
