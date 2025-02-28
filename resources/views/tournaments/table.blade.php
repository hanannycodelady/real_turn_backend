<div class="table-responsive">
    <table class="table" id="tournaments-table">
        <thead>
            <tr>
                <th>@lang('models/tournaments.fields.Tournament_name')</th>
        <th>@lang('models/tournaments.fields.tournament_category')</th>
        <th>@lang('models/tournaments.fields.Start_date')</th>
        <th>@lang('models/tournaments.fields.end_date')</th>
        <th>@lang('models/tournaments.fields.Venue')</th>
        <th>@lang('models/tournaments.fields.Location')</th>
        <th>@lang('models/tournaments.fields.surface')</th>
        <th>@lang('models/tournaments.fields.Prize_money')</th>
        <th>@lang('models/tournaments.fields.certificate')</th>
        <th>@lang('models/tournaments.fields.status')</th>
        <th>@lang('models/tournaments.fields.sponsor_name')</th>
        <th>@lang('models/tournaments.fields.Draw_size')</th>
        <th>@lang('models/tournaments.fields.Tournament_logo')</th>
        <th>@lang('models/tournaments.fields.Tournament_director')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tournaments as $tournament)
            <tr>
                       <td>{{ $tournament->Tournament_name }}</td>
            <td>{{ $tournament->tournament_category }}</td>
            <td>{{ $tournament->Start_date }}</td>
            <td>{{ $tournament->end_date }}</td>
            <td>{{ $tournament->Venue }}</td>
            <td>{{ $tournament->Location }}</td>
            <td>{{ $tournament->surface }}</td>
            <td>{{ $tournament->Prize_money }}</td>
            <td>{{ $tournament->certificate }}</td>
            <td>{{ $tournament->status }}</td>
            <td>{{ $tournament->sponsor_name }}</td>
            <td>{{ $tournament->Draw_size }}</td>
            <td>{{ $tournament->Tournament_logo }}</td>
            <td>{{ $tournament->Tournament_director }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['tournaments.destroy', $tournament->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('tournaments.show', [$tournament->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('tournaments.edit', [$tournament->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
