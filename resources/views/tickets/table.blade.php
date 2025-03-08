<div class="table-responsive">
    <table class="table" id="tickets-table">
        <thead>
            <tr>
                <th>@lang('models/tickets.fields.calendar_id')</th>
        <th>@lang('models/tickets.fields.ticket_type')</th>
        <th>@lang('models/tickets.fields.price')</th>
        <th>@lang('models/tickets.fields.quantity')</th>
        <th>@lang('models/tickets.fields.available_tickets')</th>
        <th>@lang('models/tickets.fields.sold_tickets')</th>
        <th>@lang('models/tickets.fields.currency')</th>
        <th>@lang('models/tickets.fields.status')</th>
        <th>@lang('models/tickets.fields.is_available')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tickets as $tickets)
            <tr>
                       <td>{{ $tickets->calendar_id }}</td>
            <td>{{ $tickets->ticket_type }}</td>
            <td>{{ $tickets->price }}</td>
            <td>{{ $tickets->quantity }}</td>
            <td>{{ $tickets->available_tickets }}</td>
            <td>{{ $tickets->sold_tickets }}</td>
            <td>{{ $tickets->currency }}</td>
            <td>{{ $tickets->status }}</td>
            <td>{{ $tickets->is_available }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['tickets.destroy', $tickets->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('tickets.show', [$tickets->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('tickets.edit', [$tickets->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
