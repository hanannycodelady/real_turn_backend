<div class="table-responsive">
    <table class="table" id="schools-table">
        <thead>
            <tr>
                <th>@lang('models/schools.fields.School_name')</th>
        <th>@lang('models/schools.fields.location')</th>
        <th>@lang('models/schools.fields.school_image')</th>
        <th>@lang('models/schools.fields.School_description')</th>
                <th colspan="3">@lang('action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($schools as $schools)
            <tr>
                       <td>{{ $schools->School_name }}</td>
            <td>{{ $schools->location }}</td>
            <td>{{ $schools->school_image }}</td>
            <td>{{ $schools->School_description }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['schools.destroy', $schools->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('schools.show', [$schools->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('schools.edit', [$schools->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
