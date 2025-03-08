

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('calendars.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
