@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>
<h4>Contenido publico</h4>
@role('admin')
<p>contenido admin</p>
@endrole

@role('escritor')
<p>contenido escritor</p>
@endrole

@endsection
