@extends('layouts.default')

@section('title', 'Confirm Create User')

@section('content')
    <form method="POST" action="{{ route('users.store') }}" action-back="{{ route('users.create') }}">
        @csrf
        <create-user-confirm-component :errors="{{ $errors }}" :old="{{ json_encode(old()) }}">
        </create-user-confirm-component>
    </form>
@stop