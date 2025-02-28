
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th class="w-25">@lang('First_name')</th>
            <td>{{ $players->First_name }}</td>
        </tr>

        <tr>
            <th>@lang('Second_name')</th>
            <td>{{ $players->Second_name }}</td>
        </tr>

        <tr>
            <th>@lang('gender')</th>
            <td>{{ ucfirst($players->gender) }}</td>
        </tr>

        <tr>
            <th>@lang('Player_image')</th>
            <td>
                <img src="{{ asset('storage/' . $players->Player_image) }}"
                     alt="{{ $players->First_name }}'s photo"
                     class="img-thumbnail"
                     style="max-width: 300px; height: auto;">
            </td>
        </tr>

        <tr>
            <th>@lang('Flag_image')</th>
            <td>
                <img src="{{ asset('storage/' . $players->Flag_image) }}"
                     alt="{{ $players->First_name }}'s photo"
                     class="img-thumbnail"
                     style="max-width: 300px; height: auto;">
            </td>
        </tr>

        <tr>
            <th>@lang('ranking')</th>
            <td>{{ $players->ranking }}</td>
        </tr>

        <tr>
            <th>@lang('Points')</th>
            <td>{{ $players->Points }}</td>
        </tr>

        <tr>
            <th>@lang('Category')</th>
            <td>{{ str_replace('_', ' ', $players->Category) }}</td>
        </tr>

        <tr>
            <th>@lang('Nationality')</th>
            <td>{{ $players->nationality }}</td>
        </tr>

        <tr>
            <th>@lang('created_at')</th>
            <td>{{ $players->created_at->format('d M Y H:i:s') }}</td>
        </tr>

        <tr>
            <th>@lang('updated_at')</th>
            <td>{{ $players->updated_at->format('d M Y H:i:s') }}</td>
        </tr>
    </table>
</div>
