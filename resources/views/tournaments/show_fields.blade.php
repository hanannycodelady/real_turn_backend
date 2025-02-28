<!-- Tournament Name Field -->
<div class="form-group">
    {!! Form::label('Tournament_name', __('models/tournaments.fields.Tournament_name').':') !!}
    <p>{{ $tournament->Tournament_name }}</p>
</div>

<!-- Tournament Category Field -->
<div class="form-group">
    {!! Form::label('tournament_category', __('models/tournaments.fields.tournament_category').':') !!}
    <p>{{ $tournament->tournament_category }}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('Start_date', __('models/tournaments.fields.Start_date').':') !!}
    <p>{{ $tournament->Start_date }}</p>
</div>

<!-- End Date Field -->
<div class="form-group">
    {!! Form::label('end_date', __('models/tournaments.fields.end_date').':') !!}
    <p>{{ $tournament->end_date }}</p>
</div>

<!-- Venue Field -->
<div class="form-group">
    {!! Form::label('Venue', __('models/tournaments.fields.Venue').':') !!}
    <p>{{ $tournament->Venue }}</p>
</div>

<!-- Location Field -->
<div class="form-group">
    {!! Form::label('Location', __('models/tournaments.fields.Location').':') !!}
    <p>{{ $tournament->Location }}</p>
</div>

<!-- Surface Field -->
<div class="form-group">
    {!! Form::label('surface', __('models/tournaments.fields.surface').':') !!}
    <p>{{ $tournament->surface }}</p>
</div>

<!-- Prize Money Field -->
<div class="form-group">
    {!! Form::label('Prize_money', __('models/tournaments.fields.Prize_money').':') !!}
    <p>{{ $tournament->Prize_money }}</p>
</div>

<!-- Certificate Field -->
<div class="form-group">
    {!! Form::label('certificate', __('models/tournaments.fields.certificate').':') !!}
    <p>{{ $tournament->certificate }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('models/tournaments.fields.status').':') !!}
    <p>{{ $tournament->status }}</p>
</div>

<!-- Sponsor Name Field -->
<div class="form-group">
    {!! Form::label('sponsor_name', __('models/tournaments.fields.sponsor_name').':') !!}
    <p>{{ $tournament->sponsor_name }}</p>
</div>

<!-- Draw Size Field -->
<div class="form-group">
    {!! Form::label('Draw_size', __('models/tournaments.fields.Draw_size').':') !!}
    <p>{{ $tournament->Draw_size }}</p>
</div>

<!-- Tournament Logo Field -->
<div class="form-group">
    {!! Form::label('Tournament_logo', __('models/tournaments.fields.Tournament_logo').':') !!}
    <p>{{ $tournament->Tournament_logo }}</p>
</div>

<!-- Tournament Director Field -->
<div class="form-group">
    {!! Form::label('Tournament_director', __('models/tournaments.fields.Tournament_director').':') !!}
    <p>{{ $tournament->Tournament_director }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/tournaments.fields.created_at').':') !!}
    <p>{{ $tournament->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/tournaments.fields.updated_at').':') !!}
    <p>{{ $tournament->updated_at }}</p>
</div>

