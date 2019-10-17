<div class="table-responsive">
    <table class="mv-table">
        <thead class="text-primary">
            <tr>
            @foreach($columns as $column)
                <th>{{ $column }}</th>
            @endforeach
                <th>{{ __('string.edit')}}</th>
            </tr>
        </thead>
        <tbody>
        @for ($i = 0 ; $i < count($rows) ; $i ++)
            <tr>
            @for ($j = 0 ; $j < count($keys) ; $j ++)
                @if (is_array($keys[$j]))
                    @if (count($keys[$j]) > 2)
                        <td>{!! Html::image('storage/' . $rows[$i][$keys[$j][0]], null, ['width' => $keys[$j][1], 'height' => $keys[$j][2]]) !!}</td>                    
                    @else
                        <td>{{ $rows[$i][$keys[$j][0]][$keys[$j][1]] }}
                    @endif
                @else
                    <td>{{ $rows[$i][$keys[$j]] }}</td>
                @endif
            @endfor
                <td class="w-150">
                    {!! Form::open(['route' => [$route . '.destroy', $rows[$i]['id']], 'method' => 'DELETE']) !!}
                        {!! Form::token() !!}
                        {!! link_to_route($route . '.edit', __('string.edit'), [$rows[$i]['id']], ['class' => 'btn btn-info small w-60']) !!}
                        {!! Form::submit(__('string.delete'), ['class' => 'btn btn-danger small w-60']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endfor
        </tbody>
    </table>
</div>
