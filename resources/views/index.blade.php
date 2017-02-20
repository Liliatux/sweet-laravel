@extends('layouts.app')

@section('content')
    <div class="ui centered two columns grid">
        <div class="column">
           <h1 class="ui center aligned header">Store sweets</h1> 
        </div>   
        <div class="row">
            <div class="column">
                <form action="/addSweet" method="post" class="ui form">
                    {{csrf_field() }}
                        <div class="three fields">
                        <div class="field">
                            <label for="name">Nom du bonbon</label><input type="text" id="name" name="name">   
                        </div>
                        <div class="field">
                            <label for="stock">Nombre de bonbons</label><input type="number" id="stock" name="stock">    
                        </div>
                        <button type="submit" class="ui circular green button"><i class="send icon"></i></button>  
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="ui two columns centered grid">
        <div class="column">
        @foreach($sweets as $sweet)
        <div class="ui center aligned column">
            <div class="ui compact floated segment">
                <h5 class="ui header">Bonbon {{$sweet->name}}</h5>
                <button class="ui tiny red button decrease" data-id="{{$sweet->id}}"><i class="minus icon"></i></button>
                Stock: <div class="newStock">{{$sweet->stock}}</div>
                <button class="ui tiny green button increase" data-id="{{$sweet->id}}"><i class="add icon"></i></button>
            </div>
        </div>
        @endforeach
        </div>
    </div>
@endsection