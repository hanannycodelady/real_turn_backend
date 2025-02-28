<!-- Player Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_id', __('models/ranks.fields.player_id').':') !!}
    {!! Form::select('player_id', $players ?? [], null, ['class' => 'form-control']) !!}
</div>

<!-- Rank Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rank', __('models/ranks.fields.rank').':') !!}
    {!! Form::number('rank', null, ['class' => 'form-control']) !!}
</div>

<!-- Ranking Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ranking_date', __('models/ranks.fields.ranking_date').':') !!}
    {!! Form::date('ranking_date', null, ['class' => 'form-control','id'=>'ranking_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#ranking_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endpush

<!-- Previous Rank Field -->
<div class="form-group col-sm-6">
    {!! Form::label('previous_rank', __('models/ranks.fields.previous_rank').':') !!}
    {!! Form::number('previous_rank', null, ['class' => 'form-control']) !!}
</div>

<!-- Single Career Highest Rank Field -->
<div class="form-group col-sm-6">
    {!! Form::label('single_career_highest_rank', __('models/ranks.fields.single_career_highest_rank').':') !!}
    {!! Form::number('single_career_highest_rank', null, ['class' => 'form-control']) !!}
</div>

<!-- Single Career Highest Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('single_career_highest_date', __('models/ranks.fields.single_career_highest_date').':') !!}
    {!! Form::date('single_career_highest_date', null, ['class' => 'form-control','id'=>'single_career_highest_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#single_career_highest_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endpush

<!-- Double Career Highest Rank Field -->
<div class="form-group col-sm-6">
    {!! Form::label('double_career_highest_rank', __('models/ranks.fields.double_career_highest_rank').':') !!}
    {!! Form::number('double_career_highest_rank', null, ['class' => 'form-control']) !!}
</div>

<!-- Double Career Highest Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('double_career_highest_date', __('models/ranks.fields.double_career_highest_date').':') !!}
    {!! Form::date('double_career_highest_date', null, ['class' => 'form-control','id'=>'double_career_highest_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#double_career_highest_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endpush

<!-- Mixed Doubles Highest Rank Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mixed_doubles_highest_rank', __('models/ranks.fields.mixed_doubles_highest_rank').':') !!}
    {!! Form::number('mixed_doubles_highest_rank', null, ['class' => 'form-control']) !!}
</div>

<!-- Mixed Doubles Highest Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mixed_doubles_highest_date', __('models/ranks.fields.mixed_doubles_highest_date').':') !!}
    {!! Form::date('mixed_doubles_highest_date', null, ['class' => 'form-control','id'=>'mixed_doubles_highest_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#mixed_doubles_highest_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endpush

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', __('models/ranks.fields.year').':') !!}
    {!! Form::select('year', array_combine(range(date('Y')-3, date('Y')+5), range(date('Y')-3, date('Y')+5)), null, ['class' => 'form-control']) !!}
</div>

<!-- Year End Rank Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year_end_rank', __('models/ranks.fields.year_end_rank').':') !!}
    {!! Form::number('year_end_rank', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ranks.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
