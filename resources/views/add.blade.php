@include('home')

<head>

    <title>Add staff</title>
</head>
    <form action="{{ route('addstaff') }}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card bg-light mb-3 mt-3">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">

                            </div>
                            <div class="form-group">
                                <label for="Surname" class="form-label">Surname</label>
                                <input type="text" name="Surname" value="{{ old('Surname') }}" class="form-control" id="Surname">
                            </div>
                            <div class="form-group">
                                <label for="dateBirth" class="form-label">Date birth:</label>
                                <input type="date" name="dateBirth" value="{{ old('dateBirth') }}" class="form-control" id="dateBirth">
                            </div>
                            <div class="form-group">
                                <label for="Education" class="form-label">Education</label>
                                <input type="text" name="Education" value="{{ old('Education') }}" class="form-control" id="Education">
                            </div>
                            <div class="form-group">
                                <label for="Post" class="form-label">Post</label>
                                <input type="text" name="Post" value="{{ old('Post') }}" class="form-control" id="Post">
                            </div>
                            <div class="form-group">
                                <label for="Salary" class="form-label">Salary</label>
                                <input type="text" name="Salary" value="{{ old('Salary') }}" class="form-control" id="Salary">
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
