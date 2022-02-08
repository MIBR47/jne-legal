@extends('layouts.main')

@section('content')
    <div class="flex gap-4 py-4 px-4">
        <div class="flex-[2] flex flex-col gap-4">
            <a href="{{ route('customer-dispute-index') }}"
                class="text-3xl uppercase w-full text-white bg-[#0D2B70] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Customer
                Dispute</a>
            <a href="{{ route('fraud-index') }}"
                class="text-3xl uppercase w-full text-white bg-[#D0391C] hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Fraud</a>
            <a href="{{ route('outstanding-index') }}"
                class="text-3xl uppercase w-full text-white bg-[#808080] hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-gray-600 dark:gray:bg-gray-700 dark:focus:ring-gray-900">Outstanding</a>
            <a href="{{ route('other-index') }}"
                class="text-3xl uppercase w-full text-white bg-[#3D8116] hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-green-600 dark:gray:bg-green-700 dark:focus:ring-green-900">Other</a>
        </div>
        <div class="flex-[3]">

        </div>
        <div class="flex-[2] flex flex-col gap-4">
            <div class="bg-red-600 p-4 rounded-lg">
                <h3 class="text-xl mb-4 text-white uppercase">Penelusuran Permohonan/Pelaporan</h3>
                <div class="flex gap-4">
                    <input type="text" id="text"
                        class="flex-[4] shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="" required>
                    <button type="button"
                        class="flex-[1] text-sm text-black bg-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg px-5 py-2 text-center dark:bg-white dark:hover:bg-gray-50 dark:focus:ring-gray-900">Cari</button>
                </div>
            </div>
        </div>
    </div>
@endsection
