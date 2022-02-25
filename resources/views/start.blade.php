@include('home')

<head>
    <title>Company</title>
</head>

<body>
    <a class="navbar-brand" href="{{ route('add') }}">
        <button type="submit" class="btn btn-outline-primary">Add</button>
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Date birth</th>
                <th>Education</th>
                <th>Post</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <div>
                @if (count($personal) == null)
                <tr>
                    <th scope="row">No records</th>
                </tr>

                @endif
                @foreach ($personal as $unit)
                <tr>
                    <th scope="row">{{ $unit->id }}</th>
                    <td>{{ $unit->name }}</td>
                    <td>{{ $unit->surename }}</td>
                    <td>{{ $unit->date_of_birth }}</td>
                    <td>{{ $unit->education }}</td>
                    <td>{{ $unit->post }}</td>
                    <td>{{ $unit->salary }}</td>
                    <th>
                        <a href="{{ route('staffUpdate', $unit->id) }}">
                            <button type="button" class="btn btn-outline-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
                                    </path>
                                </svg>
                                <span class="visually-hidden">Кнопка</span>
                            </button>
                        </a>
                        <a href="{{ route('staffDel', $unit->id) }}">
                            <button type="button" class="btn btn-outline-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z">
                                    </path>
                                </svg>
                                <span class="visually-hidden">Кнопка</span>
                            </button>
                        </a>
                    </th>
                </tr>
                @endforeach
            </div>
        </tbody>



    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
