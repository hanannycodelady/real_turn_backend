<!-- Player Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_id', __('models/coachOverviews.fields.player_id').':') !!}
    {!! Form::select('player_id', $players ?? [], null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('First_name', __('models/coachOverviews.fields.First_name').':') !!}
    {!! Form::text('First_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Last_name', __('models/coachOverviews.fields.Last_name').':') !!}
    {!! Form::text('Last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Profile Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_image', __('models/coachOverviews.fields.profile_image').':') !!}
    {!! Form::file('profile_image') !!}
</div>
<div class="clearfix"></div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', __('models/coachOverviews.fields.nationality').':') !!}
    {!! Form::select('nationality', $nationalities ?? [], null, ['class' => 'form-control']) !!}
</div>

<!-- Country Flag Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_flag', __('models/coachOverviews.fields.country_flag').':') !!}
    {!! Form::file('country_flag') !!}
</div>
<div class="clearfix"></div>

<!-- Videos Section -->
<div id="videos-container">
    <div class="video-group">
        <div class="form-group col-sm-6">
            {!! Form::label('latest_video[]', __('models/coachOverviews.fields.latest_video').':') !!}
            {!! Form::file('latest_video[]') !!}
        </div>
        <div class="clearfix"></div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('latest_video_description[]', __('models/coachOverviews.fields.latest_video_description').':') !!}
            {!! Form::textarea('latest_video_description[]', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group col-sm-12">
    <button type="button" class="btn btn-info" id="add-video">+ Add More Videos</button>
</div>

<!-- Images Section -->
<div id="images-container">
    <div class="image-group">
        <div class="form-group col-sm-6">
            {!! Form::label('latest_image[]', __('models/coachOverviews.fields.latest_image').':') !!}
            {!! Form::file('latest_image[]') !!}
        </div>
        <div class="clearfix"></div>

        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('latest_image_description[]', __('models/coachOverviews.fields.latest_image_description').':') !!}
            {!! Form::textarea('latest_image_description[]', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group col-sm-12">
    <button type="button" class="btn btn-info" id="add-image">+ Add More Images</button>
</div>

<!-- Player Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_name', __('models/coachOverviews.fields.player_name').':') !!}
    {!! Form::text('player_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Player Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('player_image', __('models/coachOverviews.fields.player_image').':') !!}
    {!! Form::file('player_image') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('coachOverviews.index') }}" class="btn btn-light">@lang('cancel')</a>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('#add-video').click(function() {
            let videoGroup = $('.video-group:first').clone();
            videoGroup.find('input').val('');
            videoGroup.find('textarea').val('');
            $('#videos-container').append(videoGroup);
        });

        $('#add-image').click(function() {
            let imageGroup = $('.image-group:first').clone();
            imageGroup.find('input').val('');
            imageGroup.find('textarea').val('');
            $('#images-container').append(imageGroup);
        });
    });
</script>
@endpush
