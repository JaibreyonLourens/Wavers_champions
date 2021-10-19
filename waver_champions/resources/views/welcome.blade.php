@extends('layouts.app')
@section('content')
    <div class="index_content flex_sb page_section">
        <div class="card welcome_card">
            <h2>Wavers Champions</h2>
            <p class="card-text">
                Welcome to wavers Champions!
            </p>
            <div class="card-group">
                <div class="card text-center">
                   <a class="btn btn-primary" href="{{route('leaderboard.index')}}">Rankings</a>
                </div>
                <div class="card text-center">
                    <a class="btn btn-primary" href="{{route('battles.index')}}">Battles</a>
                </div>
                <div class="card text-center">
                    <a class="btn btn-primary" href="">Tournaments</a>
                </div>
            </div>
        </div>

        <div class="index_image">

        </div>
    </div>
@endsection


