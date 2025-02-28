<!-- Player Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_id', __('player_id').':') !!}
    {!! Form::select('player_id', $players ?? [], null, ['class' => 'form-control']) !!}
</div>

<!-- Match Played Field -->
<div class="form-group col-sm-6">
    {!! Form::label('match_played', __('match_played').':') !!}
    {!! Form::number('match_played', null, ['class' => 'form-control']) !!}
</div>

<!-- Match Won Field -->
<div class="form-group col-sm-6">
    {!! Form::label('match_won', __('match_won').':') !!}
    {!! Form::number('match_won', null, ['class' => 'form-control']) !!}
</div>

<!-- Match Lost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('match_lost', __('match_lost').':') !!}
    {!! Form::number('match_lost', null, ['class' => 'form-control']) !!}
</div>

<!-- Aces Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aces', __('aces').':') !!}
    {!! Form::number('aces', null, ['class' => 'form-control']) !!}
</div>

<!-- Double Faults Field -->
<div class="form-group col-sm-6">
    {!! Form::label('double_faults', __('double_faults').':') !!}
    {!! Form::number('double_faults', null, ['class' => 'form-control']) !!}
</div>

<!-- First Serve Percentage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_serve_percentage', __('first_serve_percentage').':') !!}
    {!! Form::number('first_serve_percentage', null, ['class' => 'form-control']) !!}
</div>

<!-- Second Serve Points Won Field -->
<div class="form-group col-sm-6">
    {!! Form::label('second_serve_points_won', __('second_serve_points_won').':') !!}
    {!! Form::number('second_serve_points_won', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Break Points Saved Field -->
<div class="form-group col-sm-6">
    {!! Form::label('break_points_saved', __('break_points_saved').':') !!}
    {!! Form::number('break_points_saved', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Service Game Won Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_game_won', __('service_game_won').':') !!}
    {!! Form::number('service_game_won', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Service Points Won Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_points_won', __('service_points_won').':') !!}
    {!! Form::number('service_points_won', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Tournaments Played Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tournaments_played', __('tournaments_played').':') !!}
    {!! Form::number('tournaments_played', null, ['class' => 'form-control']) !!}
</div>

<!-- Winning On First Serve Field -->
<div class="form-group col-sm-6">
    {!! Form::label('winning_on_first_serve', __('winning_on_first_serve').':') !!}
    {!! Form::number('winning_on_first_serve', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Rank Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rank', __('rank').':') !!}
    {!! Form::number('rank', null, ['class' => 'form-control']) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', __('year').':') !!}
    {!! Form::select('year', array_combine(range(date('Y')-3, date('Y')+5), range(date('Y')-3, date('Y')+5)), null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('stats.index') }}" class="btn btn-light">@lang('cancel')</a>
</div>
