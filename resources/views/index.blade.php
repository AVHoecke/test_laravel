@extends('layouts.app')
@section('title', 'Top halloween Vacatures!')   
@section('sidebar')
@section('content')
    <h1><?= $companyName ?? '' ?></h1>
    <h2>Voor verschrikkelijk talent!</h2>
    <h4>Wij hebben momenteel in de aanbieding:</h4>
    <table class="table col-md-6">
    @foreach ($vacancies as $vacancy)
    <x-wrap-vacature :vacancy="$vacancy"/> 
    @endforeach
    <script>
        function showVacancyModal(id){
            $('#mediumModal'+id).modal("show")
        }
    </script>
    </table>
@endsection