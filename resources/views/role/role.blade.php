<form action="{{ route('roles.store') }}" method="post">
    @csrf
    @foreach($roles as $role)
        <select name="roles" id="roles">
            <option value="">{{ $role -> id }}</option>
        </select>
    @endforeach
    @foreach($users as $user)
        <select name="users" id="users">
            <option value=""> {{ $user -> id }} </option>
        </select>
    @endforeach
        <input type="submit" value="submit">
</form>

