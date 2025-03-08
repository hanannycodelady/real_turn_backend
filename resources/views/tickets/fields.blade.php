<!-- Calendar Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calendar_id', __('models/tickets.fields.calendar_id').':') !!}
    {!! Form::select('calendar_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Ticket Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_type', __('models/tickets.fields.ticket_type').':') !!}
    {!! Form::text('ticket_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency', __('models/tickets.fields.currency').':') !!}
    {!! Form::select('currency', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __('models/tickets.fields.status').':') !!}
    {!! Form::select('status', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Is Available Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_available', __('models/tickets.fields.is_available').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_available', 0) !!}
        {!! Form::checkbox('is_available', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tickets.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
