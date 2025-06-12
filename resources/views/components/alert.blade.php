<!--
<div class="alert alert-secondary" role="alert">
  <h1> {{$Titulo}}</h1>
  <span>{{$Contenido}}</span>
</div>
-->

<!-- @switch ($type)
    @case('success')
        <div class="alert alert-success" role="alert">
            <h1>{{ $Titulo }}</h1>
            <span>{{ $Contenido }}</span>
        </div>
        @break
        
    @case('warning')
        <div class="alert alert-warning" role="alert">
            <h1>{{ $Titulo }}</h1>
            <span>{{ $Contenido }}</span>
        </div>
        @break

    @case('Error')
        <div class="alert alert-danger" role="alert">
            <h1>{{ $Titulo }}</h1>
            <span>{{ $Contenido }}</span>
        </div>
        @break

    @case('info')
        <div class="alert alert-info" role="alert">
            <h1>{{ $Titulo }}</h1>
            <span>{{ $Contenido }}</span>
        </div>
        @break
    @default
    @endswitch -->

@php
switch($type ?? '') {
    case 'success':
        $class = 'alert alert-success';
        break;
    case 'warning':
        $class = 'alert alert-warning';
        break;
    case 'error':
        $class = 'alert alert-danger';
        break;
    case 'info':
        $class = 'alert alert-info';
        break;
    default:
        $class = 'alert alert-secondary';
}
@endphp


<div class="{{ $class }}" role="alert">
    <h1>{{ $Titulo ?? 'Sin título' }}</h1>
    <span>{{ $Contenido ?? 'Sin contenido' }}</span>
</div>