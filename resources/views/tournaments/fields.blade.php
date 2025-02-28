{{-- <!-- Tournament Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tournament_name', 'Tournament Name:') !!}
    {!! Form::text('tournament_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Tournament Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tournament_category', 'Tournament Category:') !!}
    {!! Form::text('tournament_category', null, ['class' => 'form-control', 'placeholder' => 'e.g., Under 14, 14-18, Pro']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Venue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venue', 'Venue:') !!}
    {!! Form::text('venue', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Surface Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surface', 'Surface Type:') !!}
    {!! Form::select('surface', ['Clay' => 'Clay', 'Grass' => 'Grass', 'Hard' => 'Hard'], null, ['class' => 'form-control']) !!}
</div>

<!-- Prize Money Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prize_money', 'Prize Money:') !!}
    {!! Form::number('prize_money', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Certificate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certificate', 'Certificate Type:') !!}
    {!! Form::select('certificate', [
        'Gold' => 'Gold',
        'Silver' => 'Silver',
        'Bronze' => 'Bronze',
        'Merit' => 'Merit',
        'Participation' => 'Participation',
        'Both' => 'Both Medals and Certificates'
    ], null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Tournament Status:') !!}
    {!! Form::select('status', ['Upcoming' => 'Upcoming', 'Ongoing' => 'Ongoing', 'Completed' => 'Completed'], null, ['class' => 'form-control']) !!}
</div>

<!-- Sponsor Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sponsor_name', 'Sponsor Name:') !!}
    {!! Form::text('sponsor_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Draw Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('draw_size', 'Draw Size:') !!}
    {!! Form::number('draw_size', null, ['class' => 'form-control', 'min' => 0, 'max' => 128]) !!}
</div>

<!-- Tournament Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tournament_logo', 'Tournament Logo:') !!}
    {!! Form::file('tournament_logo', ['class' => 'form-control']) !!}
</div>

<!-- Tournament Director Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tournament_director', 'Tournament Director:') !!}
    {!! Form::text('tournament_director', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tournaments.index') }}" class="btn btn-light">Cancel</a>
</div> --}}

<!-- Tournament Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tournament_name', 'Tournament Name:') !!}
    {!! Form::text('tournament_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Tournament Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tournament_category', 'Tournament Category:') !!}
    {!! Form::text('tournament_category', null, ['class' => 'form-control', 'placeholder' => 'e.g., Under 14, 14-18, Pro']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Venue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venue', 'Venue:') !!}
    {!! Form::text('venue', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>

<!-- Surface Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surface', 'Surface Type:') !!}
    {!! Form::select('surface', ['Clay' => 'Clay', 'Grass' => 'Grass', 'Hard' => 'Hard'], null, ['class' => 'form-control']) !!}
</div>

<!-- Prize Money Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prize_money', 'Prize Money:') !!}
    {!! Form::number('prize_money', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Prize Money Currency Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prize_money_currency', 'Prize Money Currency:') !!}
    {!! Form::select('prize_money_currency', [
        'USD' => 'USD ($)',
        'EUR' => 'EUR (€)',
        'GBP' => 'GBP (£)',
        'INR' => 'INR (₹)',
        'AUD' => 'AUD (A$)',
        'CAD' => 'CAD (C$)',
        'JPY' => 'JPY (¥)',
        'ZAR' => 'ZAR (R)',
        'UGX' => 'UGX (USh)',
        'KES' => 'KES (KSh)',
        'TZS' => 'TZS (TSh)',
        'RWF' => 'RWF (FRw)'
    ], null, ['class' => 'form-control']) !!}
</div>

<!-- Certificate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certificate', 'Certificate Type:') !!}
    {!! Form::select('certificate', [
        'Gold' => 'Gold',
        'Silver' => 'Silver',
        'Bronze' => 'Bronze',
        'Merit' => 'Merit',
        'Participation' => 'Participation',
        'Both' => 'Both Medals and Certificates'
    ], null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Tournament Status:') !!}
    {!! Form::select('status', ['Upcoming' => 'Upcoming', 'Ongoing' => 'Ongoing', 'Completed' => 'Completed'], null, ['class' => 'form-control']) !!}
</div>

<!-- Sponsor Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sponsor_name', 'Sponsor Name:') !!}
    {!! Form::text('sponsor_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Draw Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('draw_size', 'Draw Size:') !!}
    {!! Form::number('draw_size', null, ['class' => 'form-control', 'min' => 0, 'max' => 128]) !!}
</div>

<!-- Tournament Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tournament_logo', 'Tournament Logo:') !!}
    {!! Form::file('tournament_logo', ['class' => 'form-control']) !!}
</div>

<!-- Tournament Director Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tournament_director', 'Tournament Director:') !!}
    {!! Form::text('tournament_director', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tournaments.index') }}" class="btn btn-light">Cancel</a>
</div>
