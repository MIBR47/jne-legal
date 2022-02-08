@extends('layouts.main')

@section('content')
    <div class="flex flex-col white">
        <div class="my-2"></div>
        <div class="mx-1 outline outline-offset-0 outline-2">
            <div class="static bg-[#D0391C] grid  grid-flow-row auto-rows-max grid-cols-3 gap-4 py-4">
                <div class="mx-6 col-span-2">
                    <h1 class="text-4 my-2 text-white font-normal capitalize ">PT TIKI JALUR NUGRAHA EKAKURIR</h1>
                    <h1 class="text-4xl my-2 text-white capitalize font-semibold">LITIGATION REPORT</h1>
                    <h1 class="text-4 my-2 text-white font-normal capitalize"> ……………………… (…………………………………………………)</h1>
                </div>
                <div class="grid grid-flow-row auto-rows-max place-content-center">
                    <div class="grid grid-cols-10 auto-cols-auto gap-4   ">
                        <div class="text-4 text-white font-normal col-span-4">Date</div>
                        <div class="text-4 text-white font-normal col-span-1">:</div>
                        <div class="text-4 text-white font-normal col-span-5 grid place-items-end">10 Januari 2022</div>
                    </div>
                    <div class="grid grid-cols-10 auto-cols-auto gap-4    ">
                        <div class="text-4 text-white  col-span-4">Business area</div>
                        <div class="text-4 text-white col-span-1">:</div>
                        <div class="text-4 text-white col-span-5 grid place-items-end">Depok</div>
                    </div>
                    <div class="grid grid-cols-10 auto-cols-auto gap-4    ">
                        <div class="text-4 text-white  col-span-4">Legal Operation</div>
                        <div class="text-4 text-white col-span-1">:</div>
                        <div class="text-4 text-white col-span-5 grid place-items-end">Litigation</div>
                    </div>
                </div>
            </div>

            <div class="bg-[#808080] grid grid-flow-row auto-rows-max grid grid-flow-col auto-cols-max py-1 ">
                <h1 class="text-white ml-10 mr-4">1</h1>
                <h1 class="text-white">CASE TYPE</h1>
            </div>
            <div class="grid grid-flow-row auto-rows-max  py-1 ">
                {{-- <h1 class="text-black ml-10 mr-5">&nbsp;</h1> --}}
                <h1 class="text-black grid place-items-center">test case</h1>
            </div>
            <div class="bg-[#808080] grid grid-flow-row auto-rows-max grid grid-flow-col auto-cols-max py-1">
                <h1 class="text-white ml-10 mr-4">2</h1>
                <h1 class="text-white">DAMAGE/LOSS</h1>
            </div>
            <div class="grid grid-flow-row auto-rows-max py-1">
                <h1 class="text-black grid place-items-center">test case</h1>
            </div>
            <div class="bg-[#808080] grid grid-flow-row auto-rows-max grid grid-flow-col auto-cols-max py-1">
                <h1 class="text-white ml-10 mr-4">3</h1>
                <h1 class="text-white">CHRONOLOGY</h1>
            </div>
            <div class="grid grid-flow-row auto-rows-max py-1">
                <h1 class="text-black grid place-items-center">test case</h1>
            </div>
            <div class="bg-[#808080] grid grid-flow-row auto-rows-max grid grid-flow-col auto-cols-max py-1">
                <h1 class="text-white ml-10 mr-4">4</h1>
                <h1 class="text-white">CRIMINALITY</h1>
            </div>
            <div class="grid grid-flow-row auto-rows-max py-1">
                <h1 class="text-black grid place-items-center">test case</h1>
            </div>
            <div class="bg-[#808080] grid grid-flow-row auto-rows-max grid grid-flow-col auto-cols-max py-1">
                <h1 class="text-white ml-10 mr-4">5</h1>
                <h1 class="text-white">SUSPECT/PARTIES</h1>
            </div>
            <div class="grid grid-flow-row auto-rows-max py-1">
                <h1 class="text-black grid place-items-center">test case</h1>
            </div>
            <div class="bg-[#808080] grid grid-flow-row auto-rows-max grid grid-flow-col auto-cols-max py-1">
                <h1 class="text-white ml-10 mr-4">6</h1>
                <h1 class="text-white">EVIDENCE</h1>
            </div>
            <div class="grid grid-flow-row auto-rows-max py-1">
                <h1 class="text-black grid place-items-center">test case</h1>
            </div>
            <div class="bg-[#808080] grid grid-flow-row auto-rows-max grid grid-flow-col auto-cols-max py-1">
                <h1 class="text-white ml-10 mr-4">7</h1>
                <h1 class="text-white">WITNESS</h1>
            </div>
            <div class="grid grid-flow-row auto-rows-max py-1">
                <h1 class="text-black grid place-items-center">test case</h1>
            </div>
            <div class="bg-[#808080] grid grid-flow-row auto-rows-max grid grid-flow-col auto-cols-max py-1">
                <h1 class="text-white ml-10 mr-4">8</h1>
                <h1 class="text-white">PROBLEM</h1>
            </div>
            <div class="grid grid-flow-row auto-rows-max py-1">
                <h1 class="text-black grid place-items-center">test case</h1>
            </div>
            <div class="bg-[#808080] grid grid-flow-row auto-rows-max grid grid-flow-col auto-cols-max py-1">
                <h1 class="text-white ml-10 mr-4">9</h1>
                <h1 class="text-white">REGULATION</h1>
            </div>
            <div class="grid grid-flow-row auto-rows-max py-1">
                <h1 class="text-black grid place-items-center">test case</h1>
            </div>
            <div class="bg-[#808080] grid grid-flow-row auto-rows-max grid grid-flow-col auto-cols-max py-1">
                <h1 class="text-white ml-10 mr-4">10</h1>
                <h1 class="text-white">ANALYSIS</h1>
            </div>
            <div class="grid grid-flow-row auto-rows-max py-1">
                <h1 class="text-black grid place-items-center">test case</h1>
            </div>
            <div class="bg-[#808080] grid grid-flow-row auto-rows-max grid grid-flow-col auto-cols-max py-1">
                <h1 class="text-white ml-10 mr-4">11</h1>
                <h1 class="text-white">SUGGESTION/OPINION/RECOMMENDATION</h1>
            </div>
            <div class="grid grid-flow-row auto-rows-max py-1">
                <h1 class="text-black grid place-items-center">test case</h1>
            </div>
        </div>
        <form action="" method="post">
            <div class="mx-20">
                <div class="flex my-5 place-items-center">
                    <label for="text"
                        class="flex items-center flex-[1] text-md font-medium text-gray-900 dark:text-gray-300 grid">Proses
                        Terakhir</label>
                    <div class="flex-[2]">
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-8/12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>-- Pilih --</option>
                            <option>Terlambat</option>
                            <option>Hilang</option>
                            <option>Rusak</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-rows-2 grid-flow-col gap-4 mb-4">
                    <div class="row-span-4 grid gap-4">
                        <div class="grid grid-cols-4 grid-flow-col">
                            <div class="font-medium col-span-1">Alat Bukti :</div>
                            <div class="grid grid-rows-5 grid-flow-col col-span-3">
                                <div class="col-span-2">
                                    <div class="flex my-2 place-items-center">
                                        <label for="text"
                                            class="flex  flex-initial w-15 mr-20  items-center text-md font-medium text-gray-900 dark:text-gray-300 grid">Keterangan
                                            Saksi</label>
                                        <a href="your link here"><i class="fas fa-arrow-alt-circle-down fa-3x"></i></a>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <div class="flex my-2 place-items-center">
                                        <label for="text"
                                            class="flex  flex-initial w-15 mr-20  items-center text-md font-medium text-gray-900 dark:text-gray-300 grid">Keterangan
                                            Ahli</label>
                                        <a href="your link here"><i class="fas fa-arrow-alt-circle-down fa-3x"></i></a>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <div class="flex my-2 place-items-center">
                                        <label for="text"
                                            class="flex flex-initial w-15 mr-20 items-center text-md font-medium text-gray-900 dark:text-gray-300 grid">Surat</label>
                                        <a href="your link here"><i class="fas fa-arrow-alt-circle-down fa-3x"></i></a>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <div class="flex my-2 place-items-center">
                                        <label for="text"
                                            class="flex flex-initial w-15 mr-20 items-center text-md font-medium text-gray-900 dark:text-gray-300 grid">Keterangan
                                            Pelaku</label>
                                        <a href="your link here"><i class="fas fa-arrow-alt-circle-down fa-3x"></i></a>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <div class="flex my-2 place-items-center">
                                        <label for="text"
                                            class="flex flex-initial w-15 mr-20 items-center text-md font-medium text-gray-900 dark:text-gray-300 grid">Lain-lain</label>
                                        <a href="your link here"><i class="fas fa-arrow-alt-circle-down fa-3x"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="flex flex-col gap-4 mb-4">
                    <div class="flex my-5 place-items-center">
                        <label for="text"
                            class="flex flex-initial w-15 mr-20 items-center text-md font-medium text-gray-900 dark:text-gray-300 grid">Barang
                            Bukti</label>
                        <a href="your link here"><i class="fas fa-arrow-alt-circle-down fa-3x"></i></a>
                    </div>

                    <div class="flex place-items-center">
                        <label for="text"
                            class="flex flex-initial w-15 mr-20 items-center text-md font-medium text-gray-900 dark:text-gray-300 grid">Kelengkapan
                            Dokumen</label>
                        <a href="your link here"><i class="fas fa-arrow-alt-circle-down fa-3x"></i></a>
                    </div>
                    <div class="flex my-5 place-items-center">
                        <label for="text"
                            class="flex flex-initial w-15 mr-20 items-center text-md font-medium text-gray-900 dark:text-gray-300 grid">Kronologis lengkap</label>
                        <a href="your link here"><i class="fas fa-arrow-alt-circle-down fa-3x"></i></a>
                    </div>
                </div>
                <div class="flex flex-col mb-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Update Progres:</label>
                    <textarea id="message" rows="4"
                        class="block p-2 w-5/6 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
                </div>

                <div class="flex justify-end items-center">
                    <button type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Submit</button>
                </div>
            </div>
        </form>


    </div>
@endsection
