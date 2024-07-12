@extends('home')



@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Permission Form</title>
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
               <a href="/addpermissions">Add Permissions</a>
            </div>
            <div class="card-body">
                <form aaction="/update/{{$user->id}}" method="post">
                    <input type="hidden" value="put" name="_method" />
                    @csrf

                    <div class="form-group">
                        <label for="permissionGroup">Select Permission Group</label>
                        <select class="form-control" id="permissionGroup" name="permissionGroupName" value="{{$user->permissionGroupName}}" required>
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
                        <label for="permissionName">Update Permission Name</label>
                        <input type="text" class="form-control" value="{{$user->PermissionName}}" id="permissionName" name="permissionName" placeholder="Enter permission name" required>
                    </div>
                    <div class="form-group">
                        <input type="radio" class="btn-check" name="status" id="active" value="active" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="active">ACTIVE</label>
                    
                        <input type="radio" class="btn-check" name="status" value="inactive" id="inactive" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="inactive">INACTIVE</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">BACK</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html>
@endsection
