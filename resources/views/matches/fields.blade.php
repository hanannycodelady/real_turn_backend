<!-- Match Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('match_date', __('models/matches.fields.Match_date').':') !!}
    {!! Form::date('match_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Opponent First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('opponent_first_name', __('models/matches.fields.opponent_First_name').':') !!}
    {!! Form::text('opponent_first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Opponent Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('opponent_last_name', __('models/matches.fields.opponent_last_name').':') !!}
    {!! Form::text('opponent_last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Tournament Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tournament', __('models/matches.fields.Tournament').':') !!}
    {!! Form::text('tournament', null, ['class' => 'form-control']) !!}
</div>

<!-- Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('score', __('models/matches.fields.Score').':') !!}
    {!! Form::text('score', null, ['class' => 'form-control']) !!}
</div>

<!-- Match Round Field -->
<div class="form-group col-sm-6">
    {!! Form::label('match_round', __('models/matches.fields.match_round').':') !!}
    {!! Form::select('match_round', [
        'Round of 128' => 'Round of 128',
        'Round of 64' => 'Round of 64',
        'Round of 32' => 'Round of 32',
        'Round of 16' => 'Round of 16',
        'Quarter_finals' => 'Quarter Finals',
        'Semi_final' => 'Semi Final',
        'Final' => 'Final'
    ], null, ['class' => 'form-control', 'placeholder' => 'Select Round']) !!}
</div>

<!-- Result Field -->
<div class="form-group col-sm-6">
    {!! Form::label('result', __('models/matches.fields.Result').':') !!}
    {!! Form::select('result', [
        'W' => 'Win',
        'L' => 'Loss'
    ], null, ['class' => 'form-control', 'placeholder' => 'Select Result']) !!}
</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', __('models/matches.fields.duration').':') !!}
    {!! Form::time('duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Surface Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surface', __('models/matches.fields.Surface').':') !!}
    {!! Form::select('surface', [
        'clay' => 'Clay',
        'hard' => 'Hard',
        'indoor' => 'Indoor',
        'grass' => 'Grass'
    ], null, ['class' => 'form-control', 'placeholder' => 'Select Surface']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', __('models/matches.fields.Location').':') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Prize Money Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prize_money', __('models/matches.fields.Prize_money').':') !!}
    {!! Form::number('prize_money', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Opponent Ranking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('opponent_ranking', __('models/matches.fields.opponent_ranking').':') !!}
    {!! Form::number('opponent_ranking', null, ['class' => 'form-control', 'min' => '1']) !!}
</div>

<!-- Opponent Flag Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oppo_flag_image', __('models/matches.fields.oppo_flage_image').':') !!}
    {!! Form::file('oppo_flag_image', ['class' => 'form-control']) !!}
</div>

<!-- Opponent Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oppo_country', __('models/matches.fields.oppo_country').':') !!}
    {!! Form::text('oppo_country', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __('models/matches.fields.Status').':') !!}
    {!! Form::select('status', [
        'completed' => 'Completed',
        'ongoing' => 'Ongoing',
        'canceled' => 'Canceled'
    ], null, ['class' => 'form-control', 'placeholder' => 'Select Status']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('matches.index') }}" class="btn btn-light">@lang('cancel')</a>
</div>
