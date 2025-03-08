<!-- Tournament Id Field -->
<div class="form-group">
    {!! Form::label('tournament_id', __('models/scores.fields.tournament_id').':') !!}
    <p>{{ $score->tournament_id }}</p>
</div>

<!-- Stage Field -->
<div class="form-group">
    {!! Form::label('stage', __('models/scores.fields.stage').':') !!}
    <p>{{ $score->stage }}</p>
</div>

<!-- Player1 Id Field -->
<div class="form-group">
    {!! Form::label('player1_id', __('models/scores.fields.player1_id').':') !!}
    <p>{{ $score->player1_id }}</p>
</div>

<!-- Player2 Id Field -->
<div class="form-group">
    {!! Form::label('player2_id', __('models/scores.fields.player2_id').':') !!}
    <p>{{ $score->player2_id }}</p>
</div>

<!-- Player1 Score Field -->
<div class="form-group">
    {!! Form::label('player1_score', __('models/scores.fields.player1_score').':') !!}
    <p>{{ $score->player1_score }}</p>
</div>

<!-- Player2 Score Field -->
<div class="form-group">
    {!! Form::label('player2_score', __('models/scores.fields.player2_score').':') !!}
    <p>{{ $score->player2_score }}</p>
</div>

<!-- Winner Id Field -->
<div class="form-group">
    {!! Form::label('winner_id', __('models/scores.fields.winner_id').':') !!}
    <p>{{ $score->winner_id }}</p>
</div>

<!-- Round Field -->
<div class="form-group">
    {!! Form::label('round', __('models/scores.fields.round').':') !!}
    <p>{{ $score->round }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/scores.fields.created_at').':') !!}
    <p>{{ $score->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/scores.fields.updated_at').':') !!}
    <p>{{ $score->updated_at }}</p>
</div>

