<!-- School Name Field -->
<div class="form-group">
    {!! Form::label('School_name', __('models/schools.fields.School_name').':') !!}
    <p>{{ $schools->School_name }}</p>
</div>

<!-- Location Field -->
<div class="form-group">
    {!! Form::label('location', __('models/schools.fields.location').':') !!}
    <p>{{ $schools->location }}</p>
</div>

<!-- School Image Field -->
<div class="form-group">
    {!! Form::label('school_image', __('models/schools.fields.school_image').':') !!}
    <p>{{ $schools->school_image }}</p>
</div>

<!-- School Description Field -->
<div class="form-group">
    {!! Form::label('School_description', __('models/schools.fields.School_description').':') !!}
    <p>{{ $schools->School_description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/schools.fields.created_at').':') !!}
    <p>{{ $schools->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/schools.fields.updated_at').':') !!}
    <p>{{ $schools->updated_at }}</p>
</div>

