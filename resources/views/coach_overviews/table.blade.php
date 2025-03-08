<div class="table-responsive">
    <table class="table" id="coachOverviews-table">
        <thead>
            <tr>
                <th>@lang('models/coachOverviews.fields.player_id')</th>
        <th>@lang('models/coachOverviews.fields.First_name')</th>
        <th>@lang('models/coachOverviews.fields.Last_name')</th>
        <th>@lang('models/coachOverviews.fields.profile_image')</th>
        <th>@lang('models/coachOverviews.fields.nationality')</th>
        <th>@lang('models/coachOverviews.fields.country_flag')</th>
        <th>@lang('models/coachOverviews.fields.latest_video')</th>
        <th>@lang('models/coachOverviews.fields.latest_video_description')</th>
        <th>@lang('models/coachOverviews.fields.latest_image')</th>
        <th>@lang('models/coachOverviews.fields.latest_image_description')</th>
        <th>@lang('models/coachOverviews.fields.player_name')</th>
        <th>@lang('models/coachOverviews.fields.player_image')</th>
                <th colspan="3">@lang('action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($coachOverviews as $coachOverview)
            <tr>
                       <td>{{ $coachOverview->player_id }}</td>
            <td>{{ $coachOverview->First_name }}</td>
            <td>{{ $coachOverview->Last_name }}</td>
            <td>{{ $coachOverview->profile_image }}</td>
            <td>{{ $coachOverview->nationality }}</td>
            <td>{{ $coachOverview->country_flag }}</td>
            <td>{{ $coachOverview->latest_video }}</td>
            <td>{{ $coachOverview->latest_video_description }}</td>
            <td>{{ $coachOverview->latest_image }}</td>
            <td>{{ $coachOverview->latest_image_description }}</td>
            <td>{{ $coachOverview->player_name }}</td>
            <td>{{ $coachOverview->player_image }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['coachOverviews.destroy', $coachOverview->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('coachOverviews.show', [$coachOverview->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('coachOverviews.edit', [$coachOverview->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
