<div class="table-responsive">
    <table class="table" id="matches-table">
        <thead>
            <tr>
                <th>@lang('models/matches.fields.Match_date')</th>
        <th>@lang('models/matches.fields.opponent_First_name')</th>
        <th>@lang('models/matches.fields.opponent_last_name')</th>
        <th>@lang('models/matches.fields.Tournament')</th>
        <th>@lang('models/matches.fields.Score')</th>
        <th>@lang('models/matches.fields.match_round')</th>
        <th>@lang('models/matches.fields.Result')</th>
        <th>@lang('models/matches.fields.duration')</th>
        <th>@lang('models/matches.fields.Surface')</th>
        <th>@lang('models/matches.fields.Location')</th>
        <th>@lang('models/matches.fields.Prize_money')</th>
        <th>@lang('models/matches.fields.opponent_ranking')</th>
        <th>@lang('models/matches.fields.oppo_flage_image')</th>
        <th>@lang('models/matches.fields.oppo_country')</th>
        <th>@lang('models/matches.fields.Status')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)
            <tr>
                       <td>{{ $match->Match_date }}</td>
            <td>{{ $match->opponent_First_name }}</td>
            <td>{{ $match->opponent_last_name }}</td>
            <td>{{ $match->Tournament }}</td>
            <td>{{ $match->Score }}</td>
            <td>{{ $match->match_round }}</td>
            <td>{{ $match->Result }}</td>
            <td>{{ $match->duration }}</td>
            <td>{{ $match->Surface }}</td>
            <td>{{ $match->Location }}</td>
            <td>{{ $match->Prize_money }}</td>
            <td>{{ $match->opponent_ranking }}</td>
            <td>{{ $match->oppo_flage_image }}</td>
            <td>{{ $match->oppo_country }}</td>
            <td>{{ $match->Status }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['matches.destroy', $match->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('matches.show', [$match->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('matches.edit', [$match->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
