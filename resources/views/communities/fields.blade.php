<!-- Community Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('community_name', __('models/communities.fields.community_name').':') !!}
    {!! Form::text('community_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Venue Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venue_location', __('models/communities.fields.venue_location').':') !!}
    {!! Form::text('venue_location', null, ['class' => 'form-control']) !!}
</div>

<!-- Community Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('community_description', __('models/communities.fields.community_description').':') !!}
    {!! Form::textarea('community_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Community Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('community_image', __('models/communities.fields.community_image').':') !!}
    {!! Form::file('community_image') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('communities.index') }}" class="btn btn-light">@lang('cancel')</a>
</div>
