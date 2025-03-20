@extends('layouts.landing')

@section('title','Services')
    
@section('content')
  <h1>Bienvenido a services</h1>
  @component('_components.card')
    @slot('title', 'Services 1')
    @slot('content')
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quibusdam, hic voluptas autem nulla nemo tempora temporibus obcaecati deserunt consequatur voluptates voluptatem ipsa facere, minus ea numquam. Eaque, accusamus aliquam!</p>
    @endslot
  @endcomponent

  @component('_components.card')
    @slot('title', 'Services 2')
    @slot('content','Contenido 2')
  @endcomponent
    
@endsection