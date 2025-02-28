@extends('layouts.app')
@section('title')
     @lang('players')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('players')</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('players.create')}}" class="btn btn-primary form-btn">@lang('add_new')<i class=""></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('players.table')
            </div>
       </div>
   </div>

    </section>
@endsection



