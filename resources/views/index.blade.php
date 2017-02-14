@extends('layouts.app')

@section('content')
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

    <div class="row">
        <div class="column">
            @foreach($sweets as $sweet)
            <div class="ui compact segment">
                <h5 class="ui header">{{$sweet->name}}</h5>
                <span>{{$sweet->stock}}</span>
            </div>
            @endforeach
        </div>
    </div>
@endsection