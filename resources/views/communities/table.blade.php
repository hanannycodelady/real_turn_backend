<div class="table-responsive">
    <table class="table" id="communities-table">
        <thead>
            <tr>
                <th>@lang('models/communities.fields.community_name')</th>
        <th>@lang('models/communities.fields.venue_location')</th>
        <th>@lang('models/communities.fields.community_description')</th>
        <th>@lang('models/communities.fields.community_image')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($communities as $communities)
            <tr>
                       <td>{{ $communities->community_name }}</td>
            <td>{{ $communities->venue_location }}</td>
            <td>{{ $communities->community_description }}</td>
            <td>{{ $communities->community_image }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['communities.destroy', $communities->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('communities.show', [$communities->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('communities.edit', [$communities->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
