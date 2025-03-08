@extends('layouts.app')
@section('title')
     @lang('models/coachOverviews.plural')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('models/coachOverviews.plural')</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('coachOverviews.create')}}" class="btn btn-primary form-btn">@lang('add_new')<i class=""></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('coach_overviews.table')
            </div>
       </div>
   </div>

    </section>
@endsection



