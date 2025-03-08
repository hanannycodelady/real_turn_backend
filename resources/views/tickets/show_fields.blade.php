<!-- Calendar Id Field -->
<div class="form-group">
    {!! Form::label('calendar_id', __('models/tickets.fields.calendar_id').':') !!}
    <p>{{ $tickets->calendar_id }}</p>
</div>

<!-- Ticket Type Field -->
<div class="form-group">
    {!! Form::label('ticket_type', __('models/tickets.fields.ticket_type').':') !!}
    <p>{{ $tickets->ticket_type }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', __('models/tickets.fields.price').':') !!}
    <p>{{ $tickets->price }}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', __('models/tickets.fields.quantity').':') !!}
    <p>{{ $tickets->quantity }}</p>
</div>

<!-- Available Tickets Field -->
<div class="form-group">
    {!! Form::label('available_tickets', __('models/tickets.fields.available_tickets').':') !!}
    <p>{{ $tickets->available_tickets }}</p>
</div>

<!-- Sold Tickets Field -->
<div class="form-group">
    {!! Form::label('sold_tickets', __('models/tickets.fields.sold_tickets').':') !!}
    <p>{{ $tickets->sold_tickets }}</p>
</div>

<!-- Currency Field -->
<div class="form-group">
    {!! Form::label('currency', __('models/tickets.fields.currency').':') !!}
    <p>{{ $tickets->currency }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('models/tickets.fields.status').':') !!}
    <p>{{ $tickets->status }}</p>
</div>

<!-- Is Available Field -->
<div class="form-group">
    {!! Form::label('is_available', __('models/tickets.fields.is_available').':') !!}
    <p>{{ $tickets->is_available }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/tickets.fields.created_at').':') !!}
    <p>{{ $tickets->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/tickets.fields.updated_at').':') !!}
    <p>{{ $tickets->updated_at }}</p>
</div>

