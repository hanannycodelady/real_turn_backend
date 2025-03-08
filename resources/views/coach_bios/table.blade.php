<div class="table-responsive">
    <table class="table" id="coachBios-table">
        <thead>
            <tr>
                <th>@lang('coachBios.heading')</th>
        <th>@lang('coachBios.content')</th>
        <th>@lang('coachBios.heading')</th>
        <th>@lang('coachBios.content')</th>
        <th>@lang('coachBios.heading')</th>
        <th>@lang('coachBios.content')</th>
        <th>@lang('coachBios.heading')</th>
        <th>@lang('coachBios.content')</th>
                <th colspan="3">@lang('action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($coachBios as $coachBio)
            <tr>
                       <td>{{ $coachBio->heading }}</td>
            <td>{{ $coachBio->content }}</td>
            <td>{{ $coachBio->heading }}</td>
            <td>{{ $coachBio->content }}</td>
            <td>{{ $coachBio->heading }}</td>
            <td>{{ $coachBio->content }}</td>
            <td>{{ $coachBio->heading }}</td>
            <td>{{ $coachBio->content }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['coachBios.destroy', $coachBio->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('coachBios.show', [$coachBio->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('coachBios.edit', [$coachBio->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
