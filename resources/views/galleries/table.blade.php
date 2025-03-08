<div class="table-responsive">
    <table class="table" id="galleries-table">
        <thead>
            <tr>
                <th>@lang('models/galleries.fields.Image_file')</th>
        <th>@lang('models/galleries.fields.image_description')</th>
        <th>@lang('models/galleries.fields.image_date')</th>
                <th colspan="3">@lang('action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($galleries as $gallery)
            <tr>
                       <td>{{ $gallery->Image_file }}</td>
            <td>{{ $gallery->image_description }}</td>
            <td>{{ $gallery->image_date }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('galleries.show', [$gallery->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('galleries.edit', [$gallery->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
