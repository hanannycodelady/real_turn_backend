<div class="table-responsive">
    <table class="table" id="ranks-table">
        <thead>
            <tr>
                <th>@lang('models/ranks.fields.player_id')</th>
        <th>@lang('models/ranks.fields.rank')</th>
        <th>@lang('models/ranks.fields.ranking_date')</th>
        <th>@lang('models/ranks.fields.previous_rank')</th>
        <th>@lang('models/ranks.fields.single_career_highest_rank')</th>
        <th>@lang('models/ranks.fields.single_career_highest_date')</th>
        <th>@lang('models/ranks.fields.double_career_highest_rank')</th>
        <th>@lang('models/ranks.fields.double_career_highest_date')</th>
        <th>@lang('models/ranks.fields.mixed_doubles_highest_rank')</th>
        <th>@lang('models/ranks.fields.mixed_doubles_highest_date')</th>
        <th>@lang('models/ranks.fields.year')</th>
        <th>@lang('models/ranks.fields.year_start_rank')</th>
        <th>@lang('models/ranks.fields.year_end_rank')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ranks as $rank)
            <tr>
                       <td>{{ $rank->player_id }}</td>
            <td>{{ $rank->rank }}</td>
            <td>{{ $rank->ranking_date }}</td>
            <td>{{ $rank->previous_rank }}</td>
            <td>{{ $rank->single_career_highest_rank }}</td>
            <td>{{ $rank->single_career_highest_date }}</td>
            <td>{{ $rank->double_career_highest_rank }}</td>
            <td>{{ $rank->double_career_highest_date }}</td>
            <td>{{ $rank->mixed_doubles_highest_rank }}</td>
            <td>{{ $rank->mixed_doubles_highest_date }}</td>
            <td>{{ $rank->year }}</td>
            <td>{{ $rank->year_start_rank }}</td>
            <td>{{ $rank->year_end_rank }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['ranks.destroy', $rank->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('ranks.show', [$rank->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('ranks.edit', [$rank->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
