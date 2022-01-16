@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Laravel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</head>
<body>

<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered">
            <thread>
                <tr>
                    <td>ID</td>
                    <td>Song Name</td>
                    <td>Description</td>
                    <td>Artist</td>
                    <td>Music Type</td>
                    <td>Lyrics</td>
                    <td>Duration</td>
                    <td>Action</td>
                </tr>
            </thread>
            <tbody>
                @foreach($songs as $song)
                <tr>
                    <td>{{$song->id}}</td>
                    <td>{{$song->name}}</td>
                    <td>{{$song->description}}</td>
                    <td>{{$song->arName}}</td>
                    <td>{{$song->mType}}</td>
                    <td>{{$song->lyrics}}</td>
                    <td>{{$song->duration}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    </div>
</div>
@endsection