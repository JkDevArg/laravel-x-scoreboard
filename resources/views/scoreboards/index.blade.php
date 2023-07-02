@extends('adminlte::page')

@section('title', 'Scoreboards')

@section('content_header')
    <h1>Scoreboards</h1>
@stop

@section('content')
<div class="pb-3">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#scoreBoard">
    New Scoreboards
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="scoreBoard" tabindex="-1" aria-labelledby="scoreBoardLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scoreBoardLabel">Create new Score</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('scoreboards.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="TeamAName">Team A Name</label>
                            <input type="text" class="form-control" name="teamA" id="TeamAName" placeholder="Enter Team A name" autocomplete="off" required>
                        </div>
                        {{-- <div class="form-group col-6">
                            <label for="TeamAScore">Team A Score</label>
                            <input type="number" class="form-control" name="scoreA" id="TeamAScore" min="0" max="100">
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="TeamBName">Team B Name</label>
                            <input type="text" class="form-control" name="teamB" id="TeamBName" placeholder="Enter Team B name" autocomplete="off" required>
                        </div>
                        {{-- <div class="form-group col-6">
                            <label for="TeamBScore">Team B Score</label>
                            <input type="number" class="form-control" name="scoreB" id="TeamBScore" min="0" max="100">
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Team A</th>
            <th scope="col">Team B</th>
            <th scope="col">Score A</th>
            <th scope="col">Score B</th>
            <th scope="col">Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($scoreboards as $score)
            <tr>
                <th scope="row">{{ $score->id }}</th>
                <td>{{ $score->teamA }}</td>
                <td>{{ $score->teamB }}</td>
                <td>{{ $score->scoreA }}</td>
                <td>{{ $score->scoreB }}</td>
                <td>{{ $score->created_at }}</td>
                <td>
                    <a href="{{ route('scoreboards.view', $score) }}" target="_blank" class="btn btn-success">VIEW</a>
                     <a href="{{ route('scoreboards.destroy', $score) }}" class="btn btn-danger">DELETE</a>
                </td>
            </tr>
        @empty
            <tr>
                <th class="text-center" colspan="7">
                    EMPTY
                </th>
            </tr>
        @endforelse
    </tbody>
</table>
@stop

@section('css')
@stop

@section('js')
@stop
