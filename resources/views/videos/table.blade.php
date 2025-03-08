<div class="table-responsive">
    <table class="table" id="videos-table">
        <thead>
            <tr>
                <th>@lang('videos.video_url')</th>
        <th>@lang('videos.video')</th>
        <th>@lang('videos.video_date')</th>
                <th colspan="3">@lang('action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($videos as $videos)
            <tr>
                       <td>{{ $videos->video_url }}</td>
            <td>{{ $videos->video }}</td>
            <td>{{ $videos->video_date }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['videos.destroy', $videos->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('videos.show', [$videos->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('videos.edit', [$videos->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
