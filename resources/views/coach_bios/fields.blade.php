<!-- Heading Field -->
<div class="form-group col-sm-6">
    {!! Form::label('heading', __('coachBios.heading').':') !!}
    {!! Form::text('heading', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', __('coachBios.content').':') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Heading Field -->
<div class="form-group col-sm-6">
    {!! Form::label('heading', __('coachBios.heading').':') !!}
    {!! Form::text('heading', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', __('coachBios.content').':') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Heading Field -->
<div class="form-group col-sm-6">
    {!! Form::label('heading', __('coachBios.heading').':') !!}
    {!! Form::text('heading', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', __('coachBios.content').':') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Heading Field -->
<div class="form-group col-sm-6">
    {!! Form::label('heading', __('coachBios.heading').':') !!}
    {!! Form::text('heading', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', __('coachBios.content').':') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('coachBios.index') }}" class="btn btn-light">@lang('cancel')</a>
</div>
