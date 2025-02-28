@extends('layouts.app')
@section('title')
     @lang('models/tournaments.plural')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('models/tournaments.plural')</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('tournaments.create')}}" class="btn btn-primary form-btn">@lang('add_new')<i class=""></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('tournaments.table')
            </div>
       </div>
   </div>

    </section>
@endsection



