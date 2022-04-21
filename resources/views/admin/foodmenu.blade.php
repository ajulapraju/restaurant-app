<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.admincss')
</head>

<body>
<div class="container-scroller">
    @include('admin.navbar')

<div style="position: relative; top: 60px; right: -150px;">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Title</label>
            <input style="color: blue;" type="text" name="title" placeholder="Write a title" required>
        </div>
        <div>
            <label for="">Price</label>
            <input style="color: blue;" type="number" name="price" placeholder="Price" required>
        </div>
        <div>
            <label for="">Image</label>
            <input style="color: blue;" type="file" name="image" required>
        </div>
        <div>
            <label for="">Description</label>
            <input style="color: blue;" type="text" name="description" placeholder="Description" required>
        </div>
        <div align="center">
            <input type="submit" value="SAVE">
        </div>
    </form>

    <div>
        <table bgcolor="black">
            <tr>
                <th style="padding: 30px;">Food Name</th>
                <th style="padding: 30px;">Price</th>
                <th style="padding: 30px;">Description</th>
                <th style="padding: 30px;">Image</th>
                <th style="padding: 30px;">Action</th>
                
                
            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a>
                 <a href="{{url('/updateview',$data->id)}}">Update</a></td>

            </tr>
            @endforeach
        </table>
    </div>
</div>


</div>
    @include('admin.adminscript')
</body>

</html>