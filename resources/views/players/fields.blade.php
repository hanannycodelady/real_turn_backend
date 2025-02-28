<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', __('First Name').':') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Second Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('second_name', __('Second Name').':') !!}
    {!! Form::text('second_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', __('Gender').':') !!}
    {!! Form::select('gender', ['male' => 'Male', 'female' => 'Female'], null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Player Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_image', __('Player Image').':') !!}
    @if(isset($players) && $players->player_image)
        <div class="mb-2">
            <img src="{{ asset('storage/' . $players->player_image) }}" alt="Player Image" class="img-thumbnail" width="100">
        </div>
    @endif
    {!! Form::file('player_image', ['class' => 'form-control', 'accept' => 'image/jpeg,image/png,image/jpg']) !!}
</div>

<!-- Flag Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flag_image', __('Flag Image').':') !!}
    @if(isset($players) && $players->flag_image)
        <div class="mb-2">
            <img src="{{ asset('storage/' . $players->flag_image) }}" alt="Flag Image" class="img-thumbnail" width="100">
        </div>
    @endif
    {!! Form::file('flag_image', ['class' => 'form-control', 'accept' => 'image/jpeg,image/png,image/jpg']) !!}
</div>

<!-- Ranking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ranking', __('Ranking').':') !!}
    {!! Form::number('ranking', null, ['class' => 'form-control', 'required', 'min' => 1]) !!}
</div>

<!-- Points Field -->
<div class="form-group col-sm-6">
    {!! Form::label('points', __('Points').':') !!}
    {!! Form::number('points', null, ['class' => 'form-control', 'required', 'min' => 0]) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', __('Category').':') !!}
    {!! Form::select('category', ['Singles' => 'Singles', 'Doubles' => 'Doubles', 'Mixed_doubles' => 'Mixed Doubles'], null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', __('Nationality').':') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('players.index') }}" class="btn btn-light">@lang('Cancel')</a>
</div>




{{-- <!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', __('First Name').':') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Second Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('second_name', __('Second Name').':') !!}
    {!! Form::text('second_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', __('Gender').':') !!}
    {!! Form::select('gender', ['male' => 'Male', 'female' => 'Female'], null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Player Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_image', __('Player Image').':') !!}
    {!! Form::file('player_image', ['class' => 'form-control', 'accept' => 'image/jpeg,image/png,image/jpg']) !!}
</div>

<!-- Flag Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flag_image', __('Flag Image').':') !!}
    {!! Form::file('flag_image', ['class' => 'form-control', 'accept' => 'image/jpeg,image/png,image/jpg']) !!}
</div>

<!-- Ranking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ranking', __('Ranking').':') !!}
    {!! Form::number('ranking', null, ['class' => 'form-control', 'required', 'min' => 1]) !!}
</div>

<!-- Points Field -->
<div class="form-group col-sm-6">
    {!! Form::label('points', __('Points').':') !!}
    {!! Form::number('points', null, ['class' => 'form-control', 'required', 'min' => 0]) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', __('Category').':') !!}
    {!! Form::select('category', ['Singles' => 'Singles', 'Doubles' => 'Doubles', 'Mixed_doubles' => 'Mixed Doubles'], null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', __('Nationality').':') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('players.index') }}" class="btn btn-light">@lang('Cancel')</a>
</div> --}}
