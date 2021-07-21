<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Featured Image</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            $i=1;
                        ?>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                   <img width="100px" width="100px" src="{{$blog->featured_image_url}}">

                                </td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->created_at}}</td>
                                <td>

                                    <a href="#" class="text-primary">preview</a>
                                    <a href="#" class="text-primary">Edit</a>
                                    <a href="{{route('destroyblog',$blog->id)}}" class="text-danger" onclick="return confirm('Do you want to delete this blog')">Delete</a>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{$blogs->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
