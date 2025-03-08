@extends('layouts.app')
@section('title')
     @lang('videos.plural')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('videos.plural')</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('videos.create')}}" class="btn btn-primary form-btn">@lang('add_new')<i class=""></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('videos.table')
            </div>
       </div>
   </div>

    </section>
@endsection



