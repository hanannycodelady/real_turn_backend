<div class="table-responsive">
    <table class="table" id="bios-table">
        <thead>
            <tr>
                <th>@lang('player_id')</th>
        <th>@lang('more_about_player')</th>
        <th>@lang('sub_heading')</th>
        <th>@lang('paragraph')</th>
        <th>@lang('Career')</th>
        <th>@lang('paragraph')</th>
        <th>@lang('career')</th>
        <th>@lang('paragraph')</th>
                <th colspan="3">@lang('action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bios as $bio)
            <tr>
                       <td>{{ $bio->player_id }}</td>
            <td>{{ $bio->more_about_player }}</td>
            <td>{{ $bio->sub_heading }}</td>
            <td>{{ $bio->paragraph }}</td>
            <td>{{ $bio->Career }}</td>
            <td>{{ $bio->paragraph }}</td>
            <td>{{ $bio->career }}</td>
            <td>{{ $bio->paragraph }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['bio.destroy', $bio->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('bio.show', [$bio->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('bio.edit', [$bio->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
