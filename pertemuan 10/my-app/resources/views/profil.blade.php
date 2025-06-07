@php
    $username = "Siti Asyiah";
    $role = "Admin";  
@endphp

@if($role == "Admin")
    <h1>Selamat datang, {{ $username }} ({{ $role }})</h1>
@else
    <h1>Selamat datang, {{ $username }}</h1>
@endif