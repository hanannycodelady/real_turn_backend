<!-- Video URL Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_url', __('videos.video_url').':') !!}
    {!! Form::text('video_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video', __('videos.video').':') !!}
    {!! Form::text('video', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_date', __('videos.video_date').':') !!}
    {!! Form::date('video_date', null, ['class' => 'form-control','id'=>'video_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#video_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('videos.index') }}" class="btn btn-light">@lang('cancel')</a>
</div>
