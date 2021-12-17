<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('fix.add-style')
    <title>Document</title>
</head>
<body>

Update task
<form action="{{route('update-task',$item->id)}}" method="post">
    @csrf

    <div class="form-group">
        <label for="executor"> Enter name's executor </label>
        <input class="form-control" id="executor" type="text" name="executor" placeholder="Name's executor" value="{{$item->executor}}">
    </div>
    <div class="form-group">
        <label for="leader"> Enter name's leader </label>
        <input class="form-control" id="leader" type="text" name="leader" placeholder="Name's leader" value="{{$item->leader}}">
    </div>
    <div class="form-group">
        Choose area of visibility
        <br>
        Private
        <input type="radio" name="visibility" value='private'>
        Public
        <input type="radio" name="visibility" value='public'>
    </div>
    <div class="form-group">
        <label for="desc"> Enter description </label>
        <textarea class="form-control" name="desc" id="desc" placeholder="Enter description">{{$item->desc}}</textarea>
    </div>
    <button type="submit" value="Add task" class="btn btn-success">Update</button>
</form>


</body>
</html>


