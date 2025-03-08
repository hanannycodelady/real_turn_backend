<div class="table-responsive">
    <table class="table" id="scores-table">
        <thead>
            <tr>
                <th>@lang('models/scores.fields.tournament_id')</th>
        <th>@lang('models/scores.fields.stage')</th>
        <th>@lang('models/scores.fields.player1_id')</th>
        <th>@lang('models/scores.fields.player2_id')</th>
        <th>@lang('models/scores.fields.player1_score')</th>
        <th>@lang('models/scores.fields.player2_score')</th>
        <th>@lang('models/scores.fields.winner_id')</th>
        <th>@lang('models/scores.fields.round')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($scores as $score)
            <tr>
                       <td>{{ $score->tournament_id }}</td>
            <td>{{ $score->stage }}</td>
            <td>{{ $score->player1_id }}</td>
            <td>{{ $score->player2_id }}</td>
            <td>{{ $score->player1_score }}</td>
            <td>{{ $score->player2_score }}</td>
            <td>{{ $score->winner_id }}</td>
            <td>{{ $score->round }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['scores.destroy', $score->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('scores.show', [$score->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('scores.edit', [$score->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
