{{-- @extends('layouts.app')
@section('title')
    @lang('edit') @lang('overviews.singular')
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">@lang('edit') @lang('overviews.singular')</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('overviews.index') }}"  class="btn btn-primary">@lang('back')</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    {!! Form::model($overview, ['route' => ['overviews.update', $overview->id], 'method' => 'patch', 'files' => true]) !!}
                                        <div class="row">
                                            @include('overviews.fields')
                                        </div>

                                    {!! Form::close() !!}
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection --}}
@extends('layouts.app')
@section('title')
    @lang('edit') @lang('overviews.singular')
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading m-0">@lang('edit') @lang('overviews.singular')</h3>
        <div class="filter-container section-header-breadcrumb row justify-content-md-end">
            <a href="{{ route('overviews.index') }}" class="btn btn-primary">@lang('back')</a>
        </div>
    </div>
    <div class="content">
        @include('stisla-templates::common.errors')
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {!! Form::model($overview, ['route' => ['overviews.update', $overview->id], 'method' => 'patch', 'files' => true]) !!}
                                <div class="row">
                                    @include('overviews.fields')
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
