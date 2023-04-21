@extends('layouts.default')

@section('title','所有用户')

@section('content')

<div class="offset-md-2 col-md-8">
    <h2 class="mb-4 text-center">所有用户</h2>

    <div class="list-group list-group-flush">
        @foreach ($users as $user)
            <div class="list-group-item">
                <img src="https://cdn.learnku.com/uploads/sites/KDiyAbV0hj1ytHpRTOlVpucbLebonxeX.png" width="32"  alt="{{ $user->name }}" class="gravatar">
                <a href="{{ route('users.show',$user) }}">
                   {{ $user->name }}
                </a>
            </div>
        @endforeach
    </div>
</div>


@stop
