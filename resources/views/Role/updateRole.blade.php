@extends('home')



@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Role</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .mt-10 {
            margin-top: 10rem;
        }
    </style>
</head>
<body>
   
    <div class="container mt-10">
        <div class="card">
            <div class="card-header">
               <a href="/addpermissions">Add Role</a>
            </div>
            <div class="card-body">
                <form action="/roleupdate/{{$user->id}}" method="post">
                    <input type="hidden" value="put" name="_method" />
                    @csrf
                    <div class="form-group">
                        <label for="permissionGroup">Select User Type</label>
                        <select class="form-control" id="permissionGroup" name="User_Type" required>
                            <option value="">--Select--</option>
                            <option value="User">User</option>
                            <option value="User Management">User Management</option>
                            <option value="User List">User List</option>
                            <option value="add user">Add User</option>
                            <option value="User Snapshot">User Snapshot</option>
                            <option value="User Log">User Log</option>
                            <option value="User Plan Management">User Plan Management</option>
                            <option value="Add Plan Type">Add Plan Type</option>
                            <option value="Manage User Plan">Manage User Plan</option>
                            <option value="Plan Consumption Log">Plan Consumption Log</option>
                            <option value="New Plan Consumption Log">New Plan Consumption Log</option>
                            <option value="App User Management">App User Management</option>
                            <option value="App User">App User</option>
                            <option value="Add App User">Add App User</option>
                            <option value="Assisted Buying Listing">Assisted Buying Listing</option>
                            <option value="Campaign">Campaign</option>
                            <option value="Inventory Management">Inventory Management</option>
                            <option value="Inventory Listing">Inventory Listing</option>
                            <!-- Add other options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="permissionName">Role Name</label>
                        <input type="text" class="form-control" id="permissionName" name="Role_Name" placeholder="Enter permission name" required>
                    </div>
                    <div class="form-group">
                        <input type="radio" class="btn-check" name="Role_Status" id="active" value="active" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="active">ACTIVE</label>
                    
                        <input type="radio" class="btn-check" name="Role_Status" value="inactive" id="inactive" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="inactive">INACTIVE</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">SAVE</button>
                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">BACK</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    {{-- <script>
        document.getElementById('activeBtn').addEventListener('click', function() {
            document.getElementById('status').value = 'active';
            this.classList.add('btn-primary');
            this.classList.remove('btn-outline-primary');
            document.getElementById('inactiveBtn').classList.add('btn-outline-secondary');
            document.getElementById('inactiveBtn').classList.remove('btn-secondary');
        });

        document.getElementById('inactiveBtn').addEventListener('click', function() {
            document.getElementById('status').value = 'inactive';
            this.classList.add('btn-secondary');
            this.classList.remove('btn-outline-secondary');
            document.getElementById('activeBtn').classList.add('btn-outline-primary');
            document.getElementById('activeBtn').classList.remove('btn-primary');
        });
    </script> --}}
</body>
</html>
@endsection
