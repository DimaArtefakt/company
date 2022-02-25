@include('home')

<head>

    <title>Update staff</title>
</head>
@if (empty($staff->id) != null)
<form action="{{ route('staffUpdate',$staff->id)  }}" method="post">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-light mb-3 mt-3">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" value="{{ $staff->name }}" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Surname" class="form-label">Surname</label>
                            <input type="text" name="Surname" value="{{ $staff->surename }}" id="Surname"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dateBirth" class="form-label">Date birth:</label>
                            <input type="date" name="dateBirth" value="{{ $staff->date_of_birth }}" class="form-control"
                                id="dateBirth">
                        </div>
                        <div class="form-group">
                            <label for="Education" class="form-label">Education</label>
                            <input type="text" name="Education" value="{{ $staff->education }}" class="form-control"
                                id="Education">
                        </div>
                        <div class="form-group">
                            <label for="Post" class="form-label">Post</label>
                            <input type="text" name="Post" value="{{ $staff->post }}" class="form-control" id="Post">
                        </div>
                        <div class="form-group">
                            <label for="Salary" class="form-label">Salary</label>
                            <input type="text" name="Salary" value="{{ $staff->salary }}" class="form-control"
                                id="Salary">
                        </div>

                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </div>
            </div>
        </div>
</form>

@else
  your else code
@endif


</html>
