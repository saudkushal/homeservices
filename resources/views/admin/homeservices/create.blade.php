@extends('admin.layout.main')
@section('main')
    <div class="dashboard py-20 flex flex-col justify-center items-center">
        <div class="form items-center h-[60vh] w-[70vw] bg-blue-100 shadow-md">
            <h1 class="font-bold text-black text-3xl text-center">Image/Text Input</h1>

            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data"
                class="input pt-10 p-10 gap-10 flex flex-col items-left">
                @csrf
                <input type="text" name="servicename" id="input" placeholder="Input Your Text"
                    class="border border-black text-[20px] text-left bg-white focus:outline-none w-[40vw]">
                @if ($errors->has('servicename'))
                    <div class="error">{{ $errors->first('servicename') }}</div>
                @endif
                <input type="file" name="serviceimage" id="input" placeholder="Input Your Image"
                    class="border border-black text-[18px] text-left bg-white focus:outline-none w-[40vw]">
                @if ($errors->has('serviceimage'))
                    <div class="error">{{ $errors->first('serviceimage') }}</div>
                @endif
                <textarea id="content" placeholder="Enter your content" name="description" rows="4"
                    class="border border-black w-[63%] text-[20px] text-left bg-white focus:outline-none"></textarea>
                @if ($errors->has('description'))
                    <div class="error">{{ $errors->first('description') }}</div>
                @endif


                <button type="submit" class="bg-blue-800 text-white border h-9 w-[100px]">Submit</button>

            </form>
        </div>
    </div>
@endsection
