@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Basic Table</h2>            
            <table class="table">
                <thead>
                    <tr>
                        <th><strong>Id</strong></th>
                        <th><strong>Name</strong></th>
                        <th><strong>Email Address</strong></th>
                        <th><strong>Password</strong></th>
                    </tr>
                </thead>
                @foreach ($users as $user)
                <tbody>
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>  
                    </tr>
                </tbody>
                @endforeach
            </table>

            <a href="{{ url('/user/add') }}" class="btn btn-primary">Add Fields</a>

        </div>
    </body>
</html>
