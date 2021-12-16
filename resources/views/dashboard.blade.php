<x-app-layout>
    <x-slot name="header">
        @include('fix.add-style')
    </x-slot>


{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}

{{--    Add task--}}
{{--    <form action="{{route('add-task')}}" method="post">--}}
{{--        @csrf--}}

{{--        <div class="form-group">--}}
{{--            <label for="desc"> Enter name's executor </label>--}}
{{--            <input class="form-control" id="executor" type="text" name="executor" placeholder="Name's executor">--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="leader"> Enter name's leader </label>--}}
{{--            <input class="form-control" id="leader" type="text" name="leader" placeholder="Name's leader">--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--             Choose area of visibility--}}
{{--            <br>--}}
{{--            <label for="contactChoice3">Public</label>--}}
{{--            <input type="radio" name="visibility" value=1>--}}
{{--            <label for="contactChoice3">Private</label>--}}
{{--            <input type="radio" name="visibility" value=2>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="desc"> Enter description </label>--}}
{{--            <textarea class="form-control" name="desc" id="desc" placeholder="Enter description"></textarea>--}}
{{--        </div>--}}
{{--        <button type="submit" value="Add task" class="btn btn-success"></button>--}}
{{--    </form>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Tasks {{ Auth::user()->name }}
                    @foreach($items as $item)
                        <div class="alert alert-info">
                            <h3>{{$item->desc}}</h3>
                            <a href="{{route('delete-task',$item->id)}}"> <button class="btn btn-primary">Delete</button></a>
                            <a href="{{route('edit-task',$item->id)}}"> <button class="btn btn-primary">Edit</button></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Tasks assigned by {{ Auth::user()->name }}
                    @foreach($assigned_items as $item)
                        <div class="alert alert-info">
                            <h3>{{$item->desc}}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
