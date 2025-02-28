@extends('layouts.app')
@section('title')
     @lang('models/bio.plural')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('models/bio.plural')</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('bio.create')}}" class="btn btn-primary form-btn">@lang('add_new')<i class=""></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('bio.table')
            </div>
       </div>
   </div>

    </section>
@endsection



