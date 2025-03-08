<!-- Community Name Field -->
<div class="form-group">
    {!! Form::label('community_name', __('models/communities.fields.community_name').':') !!}
    <p>{{ $communities->community_name }}</p>
</div>

<!-- Venue Location Field -->
<div class="form-group">
    {!! Form::label('venue_location', __('models/communities.fields.venue_location').':') !!}
    <p>{{ $communities->venue_location }}</p>
</div>

<!-- Community Description Field -->
<div class="form-group">
    {!! Form::label('community_description', __('models/communities.fields.community_description').':') !!}
    <p>{{ $communities->community_description }}</p>
</div>

<!-- Community Image Field -->
<div class="form-group">
    {!! Form::label('community_image', __('models/communities.fields.community_image').':') !!}
    <p>{{ $communities->community_image }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/communities.fields.created_at').':') !!}
    <p>{{ $communities->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/communities.fields.updated_at').':') !!}
    <p>{{ $communities->updated_at }}</p>
</div>

