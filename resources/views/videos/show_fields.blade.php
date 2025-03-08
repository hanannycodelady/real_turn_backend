<!-- Video Url Field -->
<div class="form-group">
    {!! Form::label('video_url', __('videos.video_url').':') !!}
    <p>{{ $videos->video_url }}</p>
</div>

<!-- Video Field -->
<div class="form-group">
    {!! Form::label('video', __('videos.video').':') !!}
    <p>{{ $videos->video }}</p>
</div>

<!-- Video Date Field -->
<div class="form-group">
    {!! Form::label('video_date', __('videos.video_date').':') !!}
    <p>{{ $videos->video_date }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('videos.fields.created_at').':') !!}
    <p>{{ $videos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('videos.fields.updated_at').':') !!}
    <p>{{ $videos->updated_at }}</p>
</div>

