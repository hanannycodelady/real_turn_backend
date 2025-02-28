<div class="table-responsive">
    <table class="table" id="stats-table">
        <thead>
            <tr>
                <th>@lang('player_id')</th>
        <th>@lang('match_played')</th>
        <th>@lang('match_won')</th>
        <th>@lang('match_lost')</th>
        <th>@lang('aces')</th>
        <th>@lang('double_faults')</th>
        <th>@lang('First_serve_percentage')</th>
        <th>@lang('First_serve_percentage_won')</th>
        <th>@lang('First_serve_points_won')</th>
        <th>@lang('second_serve_points_won')</th>
        <th>@lang('break_points_saved')</th>
        <th>@lang('service_game_won')</th>
        <th>@lang('service_points_won')</th>
        <th>@lang('return_point_won')</th>
        <th>@lang('break_points_converted')</th>
        <th>@lang('return_ponts_won')</th>
        <th>@lang('total_points')</th>
        <th>@lang('tournaments_played')</th>
        <th>@lang('winning_on_first_serve')</th>
        <th>@lang('winninning')</th>
        <th>@lang('rank')</th>
        <th>@lang('second_return_points_won')</th>
        <th>@lang('return_games_played')</th>
        <th>@lang('year')</th>
                <th colspan="3">@lang('action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($stats as $stats)
            <tr>
                       <td>{{ $stats->player_id }}</td>
            <td>{{ $stats->match_played }}</td>
            <td>{{ $stats->match_won }}</td>
            <td>{{ $stats->match_lost }}</td>
            <td>{{ $stats->aces }}</td>
            <td>{{ $stats->double_faults }}</td>
            <td>{{ $stats->First_serve_percentage }}</td>
            <td>{{ $stats->First_serve_percentage_won }}</td>
            <td>{{ $stats->First_serve_points_won }}</td>
            <td>{{ $stats->second_serve_points_won }}</td>
            <td>{{ $stats->break_points_saved }}</td>
            <td>{{ $stats->service_game_won }}</td>
            <td>{{ $stats->service_points_won }}</td>
            <td>{{ $stats->return_point_won }}</td>
            <td>{{ $stats->break_points_converted }}</td>
            <td>{{ $stats->return_ponts_won }}</td>
            <td>{{ $stats->total_points }}</td>
            <td>{{ $stats->tournaments_played }}</td>
            <td>{{ $stats->winning_on_first_serve }}</td>
            <td>{{ $stats->winninning }}</td>
            <td>{{ $stats->rank }}</td>
            <td>{{ $stats->second_return_points_won }}</td>
            <td>{{ $stats->return_games_played }}</td>
            <td>{{ $stats->year }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['stats.destroy', $stats->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('stats.show', [$stats->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('stats.edit', [$stats->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
