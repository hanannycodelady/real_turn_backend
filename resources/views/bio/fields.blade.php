<!-- Player Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_id', __('player_id').':') !!}
    {!! Form::select('player_id', $players, null, ['class' => 'form-control', 'placeholder' => 'Select Player']) !!}
</div>

<!-- More About Player Field -->
<div class="form-group col-sm-6">
    {!! Form::label('more_about_player', __('more_about_player').':') !!}
    {!! Form::text('more_about_player', null, ['class' => 'form-control']) !!}
</div>

<!-- Sub Heading 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_heading1', __('sub_heading1').':') !!}
    {!! Form::text('sub_heading1', null, ['class' => 'form-control']) !!}
</div>

<!-- Paragraph 1 Field -->
<div class="form-group col-sm-12">
    {!! Form::label('paragraph1', __('paragraph1').':') !!}
    {!! Form::textarea('paragraph1', null, ['class' => 'form-control']) !!}
</div>

<!-- Career Highlights Field -->
<div class="form-group col-sm-6">
    {!! Form::label('career_highlights', __('career_highlights').':') !!}
    {!! Form::text('career_highlights', null, ['class' => 'form-control']) !!}
</div>

<!-- Paragraph 2 Field -->
<div class="form-group col-sm-12">
    {!! Form::label('paragraph2', __('paragraph2').':') !!}
    {!! Form::textarea('paragraph2', null, ['class' => 'form-control']) !!}
</div>

<!-- Career Review Field -->
<div class="form-group col-sm-6">
    {!! Form::label('career_review', __('career_review').':') !!}
    {!! Form::text('career_review', null, ['class' => 'form-control']) !!}
</div>

<!-- Paragraph 3 Field -->
<div class="form-group col-sm-12">
    {!! Form::label('paragraph3', __('paragraph3').':') !!}
    {!! Form::textarea('paragraph3', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bio.index') }}" class="btn btn-light">@lang('cancel')</a>
</div>
