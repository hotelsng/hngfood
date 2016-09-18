@extends('layouts.admin')

@section('title', 'Manage Inventory')

@section('admin-content')
    <div class="stats-section clearfix">
        <h3 class="pull-left">Available Bukas</h3>
        <a class="btn btn-primary pull-right" style="position:relative;top:-8px;">Add Buka</a>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul>
            @foreach($bukas as $buka)
                <li>
                    <div class="buka-wrapper">
                        <h4>{{ $buka->name }}</h4>
                        <span>{{ $buka->lunches->count() }} Food Type(s)</span>
                        <div class="overlay"></div>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
@stop