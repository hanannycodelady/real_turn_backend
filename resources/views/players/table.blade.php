<div class="table-responsive">
    <table class="table" id="players-table">
        <thead>
            <tr>
                <th>@lang('First_name')</th>
        <th>@lang('Second_name')</th>
        <th>@lang('gender')</th>
        <th>@lang('Player_image')</th>
        <th>@lang('Flag_image')</th>
        <th>@lang('ranking')</th>
        <th>@lang('Points')</th>
        <th>@lang('Category')</th>
        <th>@lang('Nationality')</th> 
                <th colspan="3">@lang('action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($players as $players)
            <tr>
                       <td>{{ $players->First_name }}</td>
            <td>{{ $players->Second_name }}</td>
            <td>{{ $players->gender }}</td>
            <td>{{ $players->Player_image }}</td>
            <td>{{ $players->Flag_image }}</td>
            <td>{{ $players->ranking }}</td>
            <td>{{ $players->Points }}</td>
            <td>{{ $players->Category }}</td>
            <td>{{ $players->nationality }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['players.destroy', $players->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('players.show', [$players->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('players.edit', [$players->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
