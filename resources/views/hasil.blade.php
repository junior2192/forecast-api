@if (isset($datas))
<h2>Response:</h2>
<table>
    <thead>
        <tr>
            <th>Timestamp</th>
            <th>Wind U-Surface</th>
            <th>Wind V-Surface</th>
            <th>Unit (Wind U-Surface)</th>
            <th>Unit (Wind V-Surface)</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($datas['ts']); $i++)
            <tr style="text-align: center">
                <td>{{ $datas['ts'][$i] }}</td>
                <td>{{ $datas['wind_u-surface'][$i] }}</td>
                <td>{{ $datas['wind_v-surface'][$i] }}</td>
                <td>{{ $datas['units']['wind_u-surface'] }}</td>
                <td>{{ $datas['units']['wind_v-surface'] }}</td>
            </tr>
        @endfor
    </tbody>
</table>
@endif