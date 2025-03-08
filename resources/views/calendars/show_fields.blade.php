<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/calendars.fields.created_at').':') !!}
    <p>{{ $calendar->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/calendars.fields.updated_at').':') !!}
    <p>{{ $calendar->updated_at }}</p>
</div>

