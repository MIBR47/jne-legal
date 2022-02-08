@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Our Information</h1>
        
        <div class="flex gap-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.645435895614!2d106.79559171417662!3d-6.178193995527179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f68a594d549b%3A0xdba97eb6a3c336ac!2sJNE%20Express!5e0!3m2!1sen!2sid!4v1643086112322!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="flex flex-col gap-4">
                <h1 class="font-normal text-4xl">Legal Service Department</h1>

                <ul class="flex flex-col gap-4">
                    <li>JNE Express Building, Level 3 Jalan Tomang Raya No. 11, Jakarta Barat, 11440 Indonesia</li>
                    <li>
                        <div>Hunting : 021 566 5262</div>
                        <div class="grid grid-rows-2 grid-flow-col">
                            <div class="row-span-3">Ext : </div>
                            <div class="col-span-2">10320 - Drafting</div>
                            <div class="col-span-2">10355 - Litigation</div>
                            <div class="col-span-2">10356 - Permit</div>
                        </div>
                    </li>
                    <li>Email : lsd@jne.co.id</li>
                </ul>
            </div>
        </div>
    </div>
@endsection