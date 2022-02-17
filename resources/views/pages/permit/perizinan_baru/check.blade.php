@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Perizinan Baru</h1>

        <form class="mt-4" method="POST" enctype="multipart/form-data"
            action="{{ route('perizinan-baru-check-post', $data->id) }}">
            @csrf

            <div class="grid grid-cols-1 gap-16 mb-4">
                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tipe
                            Perizinan</label>
                        <div class="flex-[7]">
                            <input type="text" id="text" value="{{ $data->permit_type }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" readonly>
                        </div>
                        {{-- <div class="grid grid-cols-2 ml-4 gap-2">
                            <select name="status_permit_type" id="">
                                <option value="APPROVE">APPROVE</option>
                                <option value="REJECT">REJECT</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Lokasi</label>
                        <div class="flex-[7]">
                            <input type="text" id="text" value="{{ $data->location }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" readonly>
                        </div>
                        {{-- <div class="grid grid-cols-2 ml-4 gap-2">
                            <select name="status_location" id="">
                                <option value="APPROVE">APPROVE</option>
                                <option value="REJECT">REJECT</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Spesifikasi</label>
                        <div class="flex-[7]">
                            <input type="text" id="text" value="{{ $data->specification }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" readonly>
                        </div>
                        {{-- <div class="grid grid-cols-2 ml-4 gap-2">
                            <select name="status_specification" id="">
                                <option value="APPROVE">APPROVE</option>
                                <option value="REJECT">REJECT</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alasan
                            Permohonan</label>
                        <div class="flex-[7]">
                            <input type="text" id="text" value="{{ $data->application_reason }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" readonly>
                        </div>
                        {{-- <div class="grid grid-cols-2 ml-4 gap-2">
                            <select name="status_application_reason" id="">
                                <option value="APPROVE">APPROVE</option>
                                <option value="REJECT">REJECT</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="flex">
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4 mb-4">
                <div class="flex mb-4">
                </div>

                <div class="grid grid-rows-1 grid-flow-col gap-4 mb-4">
                    <div class="row-span-4 font-medium">Dokumen Pendukung :</div>
                </div>

                <div class="flex flex-col gap-4 mb-4">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Disposisi</label>
                        <div class="flex-[4]">
                            {{-- <input value="{{ URL::asset('' . $data->file_disposition) }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    readonly type="text"> --}}
                            {{-- <a class="btn" type="submit" href="/storage/{{ $data->file_disposition }}">
                                Download</a> --}}
                            <div class="flex flex-row">

                                <a class="btn place-content-center" type="submit"
                                    href="{{ route('download', substr($data->file_disposition, 14)) }}">
                                    <i class="fa-solid fa-file-arrow-down fa-3x"></i>
                                    {{-- <i class="fa-solid fa-download fa-2x"></i> --}}
                                </a>

                                {{-- {{ substr($data->file_disposition, 14) }} --}}
                            </div>


                            {{-- <form class="mt-4" method="get" enctype="multipart/form-data"
                                action="{{ route('download', $data->file_disposition) }}">
                                @method('get')
                                @csrf
                                <button type="submit"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    <i class=" fa fa-download"></i>Input</button>
                            </form> --}}
                        </div>
                        {{-- <div class="grid grid-cols-2 ml-4 gap-2">
                            <select name="status_file_disposition" id="">
                                <option value="APPROVE">APPROVE</option>
                                <option value="REJECT">REJECT</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Dokumen
                            1</label>
                        <div class="flex-[4]">
                            <input value="{{ substr($data->file_document1, 14) }}"
                                class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                readonly type="text">
                        </div>
                        {{-- <div class="grid grid-cols-2 ml-4 gap-2">
                            <select name="status_file_document1" id="">
                                <option value="APPROVE">APPROVE</option>
                                <option value="REJECT">REJECT</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Dokumen
                            2</label>
                        <div class="flex-[4]">
                            <input value="{{ URL::asset('/files/' . $data->file_document2) }}"
                                class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                readonly type="text">
                        </div>
                        {{-- <div class="grid grid-cols-2 ml-4 gap-2">
                            <select name="status_file_document2" id="">
                                <option value="APPROVE">APPROVE</option>
                                <option value="REJECT">REJECT</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Dokumen
                            3</label>
                        <div class="flex-[4]">
                            <input value="{{ URL::asset('/files/' . $data->file_document3) }}"
                                class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                readonly type="text">
                        </div>
                        {{-- <div class="grid grid-cols-2 ml-4 gap-2">
                            <select name="status_file_document3" id="">
                                <option value="APPROVE">APPROVE</option>
                                <option value="REJECT">REJECT</option>
                            </select>
                        </div> --}}
                    </div>
                </div>
            </div>

            {{-- <div class="flex">
                <label for="text"
                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Manager
                    Pemohon</label>
                <div class="flex-[7]">
                    <textarea id="message" rows="4"
                        class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </div>
            </div> --}}

            {{-- <div class="flex">
                <label for="text"
                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kepala
                    Divisi
                    Pemohon</label>
                <div class="flex-[7]">
                    <textarea id="message" rows="4"
                        class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </div>
            </div> --}}

            {{-- <div class="flex">
                <label for="text"
                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Risk
                    Management</label>
                <div class="flex-[7]">
                    <textarea id="message" rows="4"
                        class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </div>
            </div> --}}

            {{-- <div class="flex">
                <label for="text"
                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Purchasing</label>
                <div class="flex-[7]">
                    <textarea id="message" rows="4"
                        class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </div>
            </div> --}}

            {{-- <div class="flex">
                <label for="text"
                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">General
                    Affairs</label>
                <div class="flex-[7]">
                    <textarea id="message" rows="4"
                        class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </div>
            </div> --}}

            {{-- <div class="flex">
                <label for="text"
                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Manager
                    Legal
                    Service</label>
                <div class="flex-[7]">
                    <textarea id="message" rows="4"
                        class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </div>
            </div> --}}

            <div class="flex flex-col gap-4 mb-4">
                <div class="block">
                    <label for="date"
                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Note
                        :</label>
                    <div class="flex-[4]">
                        <textarea id="message" rows="4"
                            class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" readonly>{{ $data->note }}</textarea>
                    </div>
                </div>
            </div>

            {{-- <div class="flex justify-end items-center">
                <button type="submit" value="return" name="action"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Return</button>
                <button type="submit" value="approve" name="action"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Approve</button>
            </div> --}}
        </form>
    </div>

    <script>
        $('select').change(function() {
            if ($('select option:selected').text() == "Other") {
                $('label').show();
            } else {
                $('label').hide();
            }
        });
    </script>
@endsection
