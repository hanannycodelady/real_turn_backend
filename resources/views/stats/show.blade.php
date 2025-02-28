@extends('layouts.app')
@section('title')
    @lang('models/stats.singular')  @lang('crud.details')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>@lang('models/stats.singular') @lang('crud.details')</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('stats.index') }}"
                 class="btn btn-primary form-btn float-right">@lang('back')</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('stats.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection

