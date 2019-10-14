<div class="table-responsive">
    <table class="table">
        <thead class="text-primary">
            <tr>
            @foreach($columns as $column)
                <th>{{ $column }}</th>
            @endforeach
                <th>{{ __('string.edit')}}</th>
                <th>{{ __('string.delete')}}</th>
            </tr>
        </thead>
        <tbody>
        @for ($i = 0 ; $i < count($rows) ; $i ++)
            <tr>
            @for ($j = 0 ; $j < count($keys) ; $j ++)
                @if (is_array($keys[$j]))
                    <td>{{ $rows[$i][$keys[$j][0]][$keys[$j][1]] }}
                @else
                    <td>{{ $rows[$i][$keys[$j]] }}</td>
                @endif
            @endfor
                <td>
                    {!! link_to_route($route . '.edit', __('string.edit'), [$rows[$i]['id']], ['class' => 'btn btn-success']) !!}
                </td>
                <td>
                    {!! Form::open(['route' => [$route . '.destroy', $rows[$i]['id']], 'method' => 'DELETE']) !!}
                        {!! Form::token() !!}
                        {!! Form::submit(__('string.delete'), ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endfor
        </tbody>
    </table>
</div>
