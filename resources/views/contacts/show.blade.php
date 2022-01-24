@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Información de Contacto</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nombre : {{ $contacts->name }}</h5>
        <p class="card-text">Dirección : {{ $contacts->address }}</p>
        <p class="card-text">Teléfono : {{ $contacts->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>