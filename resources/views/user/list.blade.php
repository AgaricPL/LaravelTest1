@extends('layout.main')

@section('container')
<table>
<thead>
    <tr>
        <th>Index</th>
        <th>Iteration</th>
        <th>Id</th>
        <th>Name</th>
        <th>Option</th>
    </tr>
</thead>
<tbody>
    @foreach ( $users as $user)
        @include('user.listRow', ['userData' => $user])
    @endforeach

</tbody>
</thead>



</table>
<hr><hr>

<div>
    <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>Iteration</th>
                <th>Id</th>
                <th>Nick</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td colspan="5">@ foreach</td>
            </tr>
            @foreach ($users as $user )
                @include('user.listRow', ['userData' => $user])
            @endforeach

            <tr>
            <td colspan="5">@ forelse</td>
            </tr>
            @forelse ($users as $user)
                @include('user.listRow', ['userData' => $user])
            @empty
                <tr>
                    <td colspan="5">Empty @ forelse</td>
                </tr>
            @endforelse
            <tr>
            <td colspan="5">@ each</td>
            </tr>
            @each('user.listRow', $users, 'userData', 'view.empty')

        </tbody>
    </table>
</div>
@endsection
