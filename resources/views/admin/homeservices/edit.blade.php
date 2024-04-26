@extends('admin.layout.main')
@section('main')
    <div class="dashboard py-20 flex flex-col justify-center items-center">
        <div class="form items-center h-[60vh] w-[70vw] bg-blue-100 shadow-md">
            <h1 class="font-bold text-black text-3xl text-center">Edit Image/Text</h1>

            <form action="{{ route('services.update', $resource->id) }}" method="POST"
                class="input pt-10 p-10 gap-10 flex flex-col items-left">
                @csrf
                @method('put')
                <input type="text" name="servicename" value="{{ $resource->servicename }}" id="input"
                    placeholder="Input Your Text"
                    class="border border-black text-[18px] text-left focus:outline-none w-[40vw]">
                <input type="text" name="serviceimage" value="{{ $resource->serviceimage }}" id="input"
                    placeholder="Input Your Image"
                    class="border border-black text-[18px] text-left focus:outline-none w-[40vw]">
                <textarea id="input" placeholder="Enter your content" name="description" value="{{ $resource->description }}" rows="4"
                    class="border border-black w-[63%] text-[20px] text-left bg-white focus:outline-none"></textarea>


                <button type="submit" class="bg-blue-800 text-white border h-9 w-[100px]">Submit</button>

            </form>
        </div>
    </div>
@endsection
