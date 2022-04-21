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
        <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Name</label>
                <input style="color: blue;" type="text" name="name" placeholder="Enter Name" required>
            </div>
            <div class="mb-3">
                <label>Speciality</label>
                <input style="color: blue;" type="text" name="speciality" placeholder="Enter the Speciality" required>
            </div>
            <div class="mb-3 form-check">
                <input type="file" name="image" required>
            </div>
            <button style="color: blue;" type="submit" value="SAVE">SAVE</button>
        </form>
        <table bgcolor="black">
            <tr>
                <th style="padding: 30px;">Name</th>
                <th style="padding: 30px;">Speciality</th>
                <th style="padding: 30px;">Image</th>
                <th style="padding: 30px;">Action</th>
            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->speciality}}</td>
                <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
                <td><a href="{{url('/updatechef',$data->id)}}">Update</a>
                <a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    @include('admin.adminscript')
</body>

</html>