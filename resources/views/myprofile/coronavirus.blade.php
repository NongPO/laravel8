<th>#</th>
@foreach($reports as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->date }}</td>
    @switch($item->country)
    @case("Thailand")
    <img src="https://spng.pngfind.com/pngs/s/637-6378530_thailand-flag-logo-vector-thailand-flag-hd-png.png" width=20>
    @break
    @case("China")
    <img src="https://cdn.countryflags.com/thumbs/china/flag-400.png" width=20>
    @break
    @endswitch

    <td>{{ $item->country }}</td>
    <td>{{ $item->t otal }}</td>
    <td>{{ $item->active }}</td>
    <td>{{ $item->death }}</td>
    <td>{{ $item->recovered }}</td>
</tr>
@endforeach