@extends('layouts.app')
@section('title', 'Top halloween Vacatures!')   
@section('sidebar')
@section('content')
    <h1><?= $companyName ?? '' ?></h1>
    <h2>Voor verschrikkelijk talent!</h2>
    <h4>Wij hebbem momenteel in de aanbieding:</h4>
    @foreach ($vacancies as $vacancy)
    <x-wrap-vacature :vacancy="$vacancy"/> 
    @endforeach
@endsection