<!-- Tournament Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tournament_id', __('models/scores.fields.tournament_id').':') !!}
    {!! Form::select('tournament_id', $tournaments, null, ['class' => 'form-control']) !!}
</div>

<!-- Stage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stage', __('models/scores.fields.stage').':') !!}
    {!! Form::text('stage', null, ['class' => 'form-control']) !!}
</div>

<!-- Player1 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player1_id', __('models/scores.fields.player1_id').':') !!}
    {!! Form::select('player1_id', $players, null, ['class' => 'form-control']) !!}
</div>

<!-- Player2 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player2_id', __('models/scores.fields.player2_id').':') !!}
    {!! Form::select('player2_id', $players, null, ['class' => 'form-control']) !!}
</div>

<!-- Player1 Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player1_score', __('models/scores.fields.player1_score').':') !!}
    {!! Form::text('player1_score', null, ['class' => 'form-control']) !!}
</div>

<!-- Player2 Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player2_score', __('models/scores.fields.player2_score').':') !!}
    {!! Form::text('player2_score', null, ['class' => 'form-control']) !!}
</div>

<!-- Winner Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('winner_id', __('models/scores.fields.winner_id').':') !!}
    {!! Form::select('winner_id', $players, null, ['class' => 'form-control']) !!}
</div>

<!-- Round Field -->
<div class="form-group col-sm-6">
    {!! Form::label('round', __('models/scores.fields.round').':') !!}
    {!! Form::select('round', ['1' => 'Round 1', '2' => 'Round 2', '3' => 'Round 3'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('scores.index') }}" class="btn btn-light">@lang('cancel')</a>
</div>
