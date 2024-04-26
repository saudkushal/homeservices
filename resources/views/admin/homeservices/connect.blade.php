@extends('admin.layout.main')
@section('main')


    <div class="tbl py-10 flex flex-col justify-center items-center">
        <table class="">
            <tr>
                <th class="border border-black">Customer_ID</th>
                <th class="border border-black">Customer_Name</th>
                <th class="border border-black">Phone_Number</th>
                <th class="border border-black">Choose_Services</th>
                <th class="border border-black">Message</th>
                <th class="border border-black">Actions</th>
            </tr>

            @foreach ($connect as $key => $connect)
                <tr class="text-center">
                    <td class="border border-black">{{ $connect->id }}</td>
                    <td class="border border-black">{{ $connect->fullname }}</td>
                    <td class="border border-black">{{ $connect->phonenumber }}</td>
                    <td class="border border-black">{{ $connect->chooseservices }}</td>
                    <td class="border border-black">{{ $connect->message }}</td>
                    <td class="border border-black"></td>

                </tr>
            @endforeach

        </table>
    </div>
@endsection
