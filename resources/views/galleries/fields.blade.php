<!-- Image File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Image_file', __('models/galleries.fields.Image_file').':') !!}
    {!! Form::file('Image_file') !!}
</div>
<div class="clearfix"></div>

<!-- Image Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('image_description', __('models/galleries.fields.image_description').':') !!}
    {!! Form::textarea('image_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_date', __('models/galleries.fields.image_date').':') !!}
    {!! Form::date('image_date', null, ['class' => 'form-control','id'=>'image_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#image_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('galleries.index') }}" class="btn btn-light">@lang('cancel')</a>
</div>
