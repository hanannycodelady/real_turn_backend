<div class="table-responsive">
    <table class="table" id="overviews-table">
        <thead>
            <tr>
                <th>@lang('player_id')</th>
        <th>@lang('ranking')</th>
        <th>@lang('Category')</th>
        <th>@lang('player_image')</th>
        <th>@lang('First_name')</th>
        <th>@lang('Last_name')</th>
        <th>@lang('Height')</th>
        <th>@lang('Plays')</th>
        <th>@lang('age')</th>
        <th>@lang('date_of_birth')</th>
        <th>@lang('coach_name')</th>
        <th>@lang('win_lose_ratio')</th>
        <th>@lang('current_ranking')</th>
        <th>@lang('video_url')</th>
        <th>@lang('video_description')</th>
        <th>@lang('video_order')</th>
        <th>@lang('title_year')</th>
        <th>@lang('title_image')</th>
                <th colspan="3">@lang('action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($overviews as $overview)
            <tr>
                       <td>{{ $overview->player_id }}</td>
            <td>{{ $overview->ranking }}</td>
            <td>{{ $overview->Category }}</td>
            <td>{{ $overview->player_image }}</td>
            <td>{{ $overview->First_name }}</td>
            <td>{{ $overview->Last_name }}</td>
            <td>{{ $overview->Height }}</td>
            <td>{{ $overview->Plays }}</td>
            <td>{{ $overview->age }}</td>
            <td>{{ $overview->date_of_birth }}</td>
            <td>{{ $overview->coach_name }}</td>
            <td>{{ $overview->win_lose_ratio }}</td>
            <td>{{ $overview->current_ranking }}</td>
            <td>{{ $overview->video_url }}</td>
            <td>{{ $overview->video_description }}</td>
            <td>{{ $overview->video_order }}</td>
            <td>{{ $overview->title_year }}</td>
            <td>{{ $overview->title_image }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['overviews.destroy', $overview->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('overviews.show', [$overview->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('overviews.edit', [$overview->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
