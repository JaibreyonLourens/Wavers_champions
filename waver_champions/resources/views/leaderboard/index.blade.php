@extends('layouts.app')

@section('content')
    <h2>Check the leaderboard</h2>
    <table class="leaderboard table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Waver</th>
            <th>Points</th>
            <th>Rank</th>
        </tr>
        </thead>
        <tbody>

        @forelse($users as $user)

            <tr>

            <td>{{$loop->index + 1}}</td>
            <td>{{$user->waver_name}}</td>
            <td>{{$user->points}}</td>
            <td>{{$user->rank}}</td>

        </tr>
        @empty
            <tr>
                <td><p>there are no wavers yet</p></td>
            </tr>
        @endforelse
        </tbody>
    </table>

@endsection
