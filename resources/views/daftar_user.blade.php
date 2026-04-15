<ul>
    @foreach($users as $user)
        <li>Nama: {{ $user->name }} - Email: {{ $user->email }}</li>
    @endforeach
</ul>