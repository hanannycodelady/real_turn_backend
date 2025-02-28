{{-- <!-- Player Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_id', __('overviews.fields.player_id').':') !!}
    {!! Form::select('player_id', $players, null, ['class' => 'form-control']) !!}
</div>

<!-- Ranking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ranking', __('overviews.fields.ranking').':') !!}
    {!! Form::number('ranking', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', __('overviews.fields.category').':') !!}
    {!! Form::select('category', ['Grand Slam' => 'Grand Slam', 'WTA 1000' => 'WTA 1000', 'WTA 500' => 'WTA 500', 'WTA 250' => 'WTA 250'], null, ['class' => 'form-control']) !!}
</div>

<!-- Player Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_image', __('overviews.fields.player_image').':') !!}
    {!! Form::file('player_image', ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', __('overviews.fields.first_name').':') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', __('overviews.fields.last_name').':') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Height Field -->
<div class="form-group col-sm-6">
    {!! Form::label('height', __('overviews.fields.height').':') !!}
    {!! Form::number('height', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Plays Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plays', __('overviews.fields.plays').':') !!}
    {!! Form::select('plays', ['Right-Handed' => 'Right-Handed', 'Left-Handed' => 'Left-Handed'], null, ['class' => 'form-control']) !!}
</div>

<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age', __('overviews.fields.age').':') !!}
    {!! Form::number('age', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birth', __('overviews.fields.date_of_birth').':') !!}
    {!! Form::date('date_of_birth', null, ['class' => 'form-control', 'id'=>'date_of_birth']) !!}
</div>

@push('scripts')
<script type="text/javascript">
    $('#date_of_birth').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    })
</script>
@endpush

<!-- Coach Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coach_name', __('overviews.fields.coach_name').':') !!}
    {!! Form::text('coach_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Win Lose Ratio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('win_lose_ratio', __('overviews.fields.win_lose_ratio').':') !!}
    {!! Form::number('win_lose_ratio', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Current Ranking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_ranking', __('overviews.fields.current_ranking').':') !!}
    {!! Form::number('current_ranking', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_url', __('overviews.fields.video_url').':') !!}
    {!! Form::text('video_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('video_description', __('overviews.fields.video_description').':') !!}
    {!! Form::textarea('video_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_order', __('overviews.fields.video_order').':') !!}
    {!! Form::number('video_order', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_year', __('overviews.fields.title_year').':') !!}
    {!! Form::number('title_year', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_image', __('overviews.fields.title_image').':') !!}
    {!! Form::file('title_image', ['class' => 'form-control']) !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('overviews.index') }}" class="btn btn-light">@lang('cancel')</a>
</div> --}}
<!-- Player Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('player_id', __('overviews.fields.player_id').':') !!}
    {!! Form::select('player_id', $players ?? [], old('player_id'), ['class' => 'form-control', 'placeholder' => __('Select Player')]) !!}
</div> --}}


<!-- Player Id Field -->
<div class="form-group">
    {!! Form::label('player_id', 'Player') !!}
    {!! Form::select('player_id', $players->pluck('first_name', 'id'), null, ['class' => 'form-control select2']) !!}
</div>

<!-- Ranking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ranking', __('ranking').':') !!}
    {!! Form::number('ranking', old('ranking'), ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', __('category').':') !!}
    {!! Form::select('category', ['Grand Slam' => 'Grand Slam', 'WTA 1000' => 'WTA 1000', 'WTA 500' => 'WTA 500', 'WTA 250' => 'WTA 250'], old('category'), ['class' => 'form-control', 'placeholder' => __('Select Category')]) !!}
</div>

<!-- Player Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_image', __('player_image').':') !!}
    {!! Form::file('player_image', ['class' => 'form-control']) !!}
    @if(isset($overview) && $overview->player_image)
        <img src="{{ asset('storage/'.$overview->player_image) }}" alt="Player Image" width="100">
    @endif
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', __('first_name').':') !!}
    {!! Form::text('first_name', old('first_name'), ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', __('last_name').':') !!}
    {!! Form::text('last_name', old('last_name'), ['class' => 'form-control']) !!}
</div>

<!-- Height Field -->
<div class="form-group col-sm-6">
    {!! Form::label('height', __('height').':') !!}
    {!! Form::number('height', old('height'), ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Plays Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plays', __('plays').':') !!}
    {!! Form::select('plays', ['Right-Handed' => 'Right-Handed', 'Left-Handed' => 'Left-Handed'], old('plays'), ['class' => 'form-control', 'placeholder' => __('Select Play Style')]) !!}
</div>

<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age', __('age').':') !!}
    {!! Form::number('age', old('age'), ['class' => 'form-control']) !!}
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birth', __('date_of_birth').':') !!}
    {!! Form::date('date_of_birth', old('date_of_birth'), ['class' => 'form-control', 'id' => 'date_of_birth']) !!}
</div>

@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#date_of_birth').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        });
    });
</script>
@endpush

<!-- Coach Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coach_name', __('coach_name').':') !!}
    {!! Form::text('coach_name', old('coach_name'), ['class' => 'form-control']) !!}
</div>

<!-- Win Lose Ratio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('win_lose_ratio', __('win_lose_ratio').':') !!}
    {!! Form::number('win_lose_ratio', old('win_lose_ratio'), ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Current Ranking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_ranking', __('current_ranking').':') !!}
    {!! Form::number('current_ranking', old('current_ranking'), ['class' => 'form-control']) !!}
</div>

<!-- Video Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_url', __('video_url').':') !!}
    {!! Form::text('video_url', old('video_url'), ['class' => 'form-control']) !!}
</div>

<!-- Video Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('video_description', __('video_description').':') !!}
    {!! Form::textarea('video_description', old('video_description'), ['class' => 'form-control']) !!}
</div>

<!-- Video Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_order', __('video_order').':') !!}
    {!! Form::number('video_order', old('video_order'), ['class' => 'form-control']) !!}
</div>

<!-- Title Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_year', __('title_year').':') !!}
    {!! Form::number('title_year', old('title_year'), ['class' => 'form-control']) !!}
</div>

<!-- Title Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_image', __('title_image').':') !!}
    {!! Form::file('title_image', ['class' => 'form-control']) !!}
    @if(isset($overview) && $overview->title_image)
        <img src="{{ asset('storage/'.$overview->title_image) }}" alt="Title Image" width="100">
    @endif
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('overviews.index') }}" class="btn btn-light">@lang('cancel')</a>
</div>
