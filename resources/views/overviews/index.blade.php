@extends('layouts.app')
@section('title')
     @lang('overviews.plural')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('overviews.plural')</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('overviews.create')}}" class="btn btn-primary form-btn">@lang('add_new')<i class=""></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('overviews.table')
            </div>
       </div>
   </div>

    </section>
@endsection



