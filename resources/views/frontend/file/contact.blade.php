@extends('frontend.layout.main')
@section('main')
    <div class="herosection relative flex h-[70vh]">
        <img src="./homeimages/contact.avif" class="hero h-full w-full object-cover">
        <div class="hero2 absolute h-full w-full bg-black bg-opacity-30 flex flex-col justify-center items-center">
            <span class="text-5xl font-bold text-white text-center">Contact</span>

        </div>
    </div>
    <div class="contact form pt-10 px-20 max-sm:px-10">
        <div class="form pl-3 bg-sky-50 ">
            <div class="grid grid-cols-2 gap-10 h-[85vh] max-sm:h-[180vh] max-[600px]:grid-cols-1 ">
                <div class="gridcontent1">
                    <div class="touch pt-10">
                        <h1 class="font-bold text-blue-900 text-3xl">Get in touch with us.</h1>
                    </div>
                    <div class="1 pt-10">
                        <div class="officeaddress p-4 bg-white w-[60vh] flex items-center">
                            <span class="material-symbols-outlined text-blue-600 text-3xl ">
                                location_on
                            </span>
                            <div class="pl-5">
                                <h1 class="font-bold text-blue-900 text-2xl">Office Address</h1>
                                <p1>New Baneshwor Kathmandu, Nepal</p1>
                            </div>
                        </div>
                    </div>

                    <div class="2 pt-10">
                        <div class="telephone number p-4 bg-white w-[60vh] flex items-center">
                            <span class="material-symbols-outlined text-blue-600 text-3xl">
                                call
                            </span>
                            <div class="pl-5">
                                <h1 class="font-bold text-blue-900 text-2xl">Telephone Number</h1>
                                <p1>01-5125426, +977 9847281930</p1>
                            </div>
                        </div>
                    </div>

                    <div class="3 pt-10">
                        <div class="mailaddress p-4 bg-white w-[60vh] flex items-center">
                            <span class="material-symbols-outlined text-blue-600 text-3xl">
                                mail
                            </span>
                            <div class="pl-5">
                                <h1 class="font-bold text-blue-900 text-2xl">Mail Address</h1>
                                <p1>totalhomeservices@gmail.com</p1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gridcontent2">
                    <div class="touch pt-10">
                        <h1 class="font-bold text-blue-900 text-3xl">Let us be your guest.</h1>
                        <p>Register yourself.</p>
                    </div>
                    <form action="{{ route('ccc.store') }}" method="POST">
                        @csrf
                        <div class="flex gap-10 max-sm:flex-col max-sm:gap-3">
                            <div class="fullname pt-10">
                                <input type="text" name="fullname" id="input" placeholder="Full Name*"
                                    class="h-[8vh] border border-blue-900 rounded-xl text-[18px] text-left focus:outline-none">
                            </div>
                            @if ($errors->has('fullname'))
                                <div class="error">{{ $errors->first('fullname') }}</div>
                            @endif

                            <div class="phonenumber pt-10 max-sm:pt-5">
                                <input type="text" name="phonenumber" id="input" placeholder="Phone Number*"
                                    class="h-[8vh] border border-blue-900 rounded-xl text-[18px] text-left focus:outline-none">
                            </div>
                            @if ($errors->has('phonenumber'))
                                <div class="error">{{ $errors->first('phonenumber') }}</div>
                            @endif
                        </div>

                        <div class="chooseservices pt-10">
                            <input type="text" name="chooseservices" id="input" placeholder="Choose Services"
                                class="h-[8vh] w-[76vh] border border-blue-900 rounded-xl text-[18px] text-left focus:outline-none max-sm:w-[60vh]">
                        </div>
                        @if ($errors->has('chooseservices'))
                            <div class="error">{{ $errors->first('chooseservices') }}</div>
                        @endif

                        <div class="message pt-10">
                            <input type="text" name="message" id="input" placeholder="Message...."
                                class="h-[20vh] w-[76vh] border border-blue-900 rounded-xl text-[18px] text-left focus:outline-none max-sm:w-[60vh]">
                        </div>
                        @if ($errors->has('message'))
                            <div class="error">{{ $errors->first('message') }}</div>
                        @endif

                        <div class="pt-10">
                            <button type="submit"
                                class=" top-0 right-0 bg-blue-600 px-[10vh] py-[10px] text-white border rounded-xl">Submit</button>
                        </div>
                    </form>



                </div>
            </div>


        </div>

    </div>
@endsection
