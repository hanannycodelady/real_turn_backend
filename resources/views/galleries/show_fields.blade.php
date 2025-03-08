<!-- Image File Field -->
<div class="form-group">
    {!! Form::label('Image_file', __('models/galleries.fields.Image_file').':') !!}
    <p>{{ $gallery->Image_file }}</p>
</div>

<!-- Image Description Field -->
<div class="form-group">
    {!! Form::label('image_description', __('models/galleries.fields.image_description').':') !!}
    <p>{{ $gallery->image_description }}</p>
</div>

<!-- Image Date Field -->
<div class="form-group">
    {!! Form::label('image_date', __('models/galleries.fields.image_date').':') !!}
    <p>{{ $gallery->image_date }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/galleries.fields.created_at').':') !!}
    <p>{{ $gallery->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/galleries.fields.updated_at').':') !!}
    <p>{{ $gallery->updated_at }}</p>
</div>

