<!-- School Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('School_name', __('models/schools.fields.School_name').':') !!}
    {!! Form::text('School_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', __('models/schools.fields.location').':') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- School Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school_image', __('models/schools.fields.school_image').':') !!}
    {!! Form::file('school_image') !!}
</div>
<div class="clearfix"></div>

<!-- School Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('School_description', __('models/schools.fields.School_description').':') !!}
    {!! Form::textarea('School_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('schools.index') }}" class="btn btn-light">@lang('cancel')</a>
</div>
