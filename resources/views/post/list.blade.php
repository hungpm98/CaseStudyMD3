<table border="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>User_id</th>
            <th colspan="4">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->user_id}}</td>
           <td><a href="">Update</a></td>
            <td><a href="{{route('post.detail',$post->id)}}">Detail</a></td>
            <td><a onclick="confirm('Are u sure ?')" href="{{route('post.delete',$post->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
