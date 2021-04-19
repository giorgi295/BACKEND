
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        @foreach($posts as $post);
        <form action="{{route('delete', $post->id)}}" method="POST">
            @csrf{{method_field('delete')}}
            <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
        </form>
        <div class="ml-4 text-lg leading-7 font-semibold">
            <a href="{{route('update', $post->id)}}" class="underline text-gray-900 dark:text-white">
                <i class="fa fa-pencil-scuare">edit</i>
            </a>
        </div>

{{--        <div class="ml-4 text-lg leading-7 font-semibold">--}}
{{--            <a href="{{route('delete', $post->id)}}" class="underline text-gray-900 dark:text-white">--}}
{{--                <i class="fa fa-pencil-scuare">delete</i>--}}
{{--            </a>--}}
{{--        </div>--}}

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <a href="#" class="underline text-gray-900 dark:text-white">
                                {{$post->title}}
                            </a>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            {{$post->text}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
