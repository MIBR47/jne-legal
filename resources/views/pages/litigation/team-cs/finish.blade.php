@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Litigasi Team CS</h1>
        <form class="mt-4" method="post" enctype="multipart/form-data"
            action="{{ route('cs-finish-post', $data->id) }}">
            @csrf

            <div class="grid grid-cols-2 gap-16 mb-4">
                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">ID
                            Dokumen</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" value="{{ $data->id }}" name="id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" readonly>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                            Dokumen Litigasi</label>
                        <div class="flex-[4]">
                            <input type="text" id="date" name="form_id" value="{{ $data->form_id }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4">

                <div class="grid grid-rows-5 grid-flow-col gap-4">
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Form
                                Kasus Sengketa Konsumen</label>
                            <div class="flex-[4]">
                                {{-- <input value="{{ $data->file_consumer_dispute_case_form }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar"
                                    name="file_consumer_dispute_case_form" type="text"> --}}
                                <div class="flex flex-row">
                                    <a href="{{ route('download-litigation', substr($data->file_consumer_dispute_case_form, 18)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>
                                        </div>
                                    </a>
                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kronologis
                                Pengiriman Operasional</label>
                            <div class="flex-[4]">
                                {{-- <input value="{{ $data->file_operational_delivery_chronology }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar"
                                    name="file_operational_delivery_chronology" type="text"> --}}
                                <div class="flex flex-row">
                                    <a href="{{ route('download-litigation', substr($data->file_operational_delivery_chronology, 18)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>
                                        </div>
                                    </a>
                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kronologis
                                Penanganan CS</label>
                            <div class="flex-[4]">
                                {{-- <input value="{{ $data->file_cs_handling_chronology }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_cs_handling_chronology"
                                    type="text"> --}}
                                <div class="flex flex-row">
                                    <a href="{{ route('download-litigation', substr($data->file_cs_handling_chronology, 18)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>
                                        </div>
                                    </a>
                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti
                                POD</label>
                            <div class="flex-[4]">
                                {{-- <input value="{{ $data->file_pod_evidence }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_pod_evidence"
                                    type="text"> --}}
                                <div class="flex flex-row">
                                    <a href="{{ route('download-litigation', substr($data->file_pod_evidence, 18)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>
                                        </div>
                                    </a>
                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti
                                Tanda Terima</label>
                            <div class="flex-[4]">
                                {{-- <input value="{{ $data->file_receipt_proof }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_receipt_proof"
                                    type="text"> --}}
                                <div class="flex flex-row">
                                    <a href="{{ route('download-litigation', substr($data->file_receipt_proof, 18)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>
                                        </div>
                                    </a>
                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-rows-5 grid-flow-col gap-4">
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti
                                Dokumentasi 1</label>
                            <div class="flex-[4]">
                                {{-- <input value="{{ $data->file_proof_of_documentation1 }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_proof_of_documentation1"
                                    type="text"> --}}
                                <div class="flex flex-row">
                                    <a href="{{ route('download-litigation', substr($data->file_proof_of_documentation1, 18)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>
                                        </div>
                                    </a>
                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti
                                Dokumentasi 2</label>
                            <div class="flex-[4]">
                                {{-- <input value="{{ $data->file_proof_of_documentation2 }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_proof_of_documentation2"
                                    type="text"> --}}
                                <div class="flex flex-row">
                                    <a href="{{ route('download-litigation', substr($data->file_proof_of_documentation2, 18)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>
                                        </div>
                                    </a>
                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti
                                Dokumentasi 3</label>
                            <div class="flex-[4]">
                                {{-- <input value="{{ $data->file_proof_of_documentation3 }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_proof_of_documentation3"
                                    type="text"> --}}
                                <div class="flex flex-row">
                                    <a href="{{ route('download-litigation', substr($data->file_proof_of_documentation3, 18)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>
                                        </div>
                                    </a>
                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Dokumen
                                pendukung lainnya</label>
                            <div class="flex-[4]">
                                {{-- <input value="{{ $data->file_other_supporting_document }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar"
                                    name="file_other_supporting_document" type="text"> --}}
                                <div class="flex flex-row">
                                    <a href="{{ route('download-litigation', substr($data->file_other_supporting_document, 18)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>
                                        </div>
                                    </a>
                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nominal
                                penawaran ganti kerugian</label>
                            <div class="flex-[4]">
                                <input value="{{ $data->nominal_indemnity_offer }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="nominal_indemnity_offer"
                                    type="number" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Draft
                            Tanggapan Somasi</label>
                        <div class="flex-[4]">
                            {{-- <input value="{{ $data->file_subpoena_response }}"
                                class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="file_subpoena_response"
                                type="text"> --}}
                            <div class="flex flex-row">
                                <a href="{{ route('download-litigation', substr($data->file_subpoena_response, 18)) }}"
                                    style="font-size:24px ">
                                    <div class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                        Download
                                        <i class="fa fa-download"></i>
                                    </div>
                                </a>
                                {{-- {{ substr($data->file_disposition, 14) }} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Scan
                            Surat Tanggapan</label>
                        <div class="flex-[4]">
                            <input name="file_response_letter"
                                class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti
                            Pengiriman</label>
                        <div class="flex-[4]">
                            <input name="file_proof_shipment"
                                class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4 mb-4">
                    <div class="block">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Analisis
                            Kasus
                            :</label>
                        <div class="flex-[4]">
                            <textarea id="message" rows="4" name="case_analysis"
                                class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="">{{ $data->case_analysis }}</textarea>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flex justify-end items-center">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Approve</button>
            </div>
        </form>
    </div>
@endsection
