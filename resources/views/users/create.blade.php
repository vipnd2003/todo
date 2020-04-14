@extends('layouts.default')

@section('title', 'Create User')

@section('content')
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <create-user-component :errors="{{ $errors }}" :old="{{ json_encode(old()) }}"></create-user-component>
    </form>

@stop