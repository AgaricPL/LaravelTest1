
<tr>
    @if (isset($loop) && is_object($loop))
        <td>{{ $loop->index }}</td>
        <td>{{ $loop->iteration }}</td>
    @else
        {{ var_dump($userData) }}
        <td colspan="2"></td>
    @endif

    <td>{{ $userData['id'] }}</td>
    <td>{{ $userData['name'] }}</td>
    <td><a href="{{ route('get.user.show', ['userId' => $userData['id']]) }}">Details</a></td>
</tr>
