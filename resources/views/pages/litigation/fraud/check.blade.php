@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Fraud</h1>
        
        <div class="grid grid-cols-1 gap-16 mb-4">
            <div class="flex flex-col gap-4">
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor Kasus</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tanggal</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jenis Kasus</label>
                    <div class="flex-[4]">
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>-- Pilih --</option>
                            <option>Penggelapan</option>
                            <option>Pencurian</option>
                            <option>Pemalsuan</option>
                            <option>Penipuan</option>
                            <option>Perusakan Barang</option>
                            <option>Penganiayaan</option>
                            <option>Konflik Kepentingan</option>
                            <option>Suap</option>
                            <option>Pemberian Ilegal</option>
                            <option>Cybercrime</option>
                            <option>Dll</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Faktor Penyebab</label>
                    <div class="flex-[4]">
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>-- Pilih --</option>
                            <option>Keserakahan</option>
                            <option>Kesempatan</option>
                            <option>Kebutuhan</option>
                            <option>Tekanan</option>
                            <option>Pembenaran</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300"></label>
                    <div class="flex-[4]">
                        <textarea id="message" rows="4" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
                    </div>
                    <div class="w-[5.8rem]"></div>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Pelaku</label>
                    <div class="flex-[4]">
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>-- Pilih --</option>
                            <option>Internal</option>
                            <option>Eksternal</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Unit/Departemen/Divisi</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Total Kerugian</label>
                    <div class="flex flex-[4]">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                          Rp
                        </span>
                        <input type="text" id="website-admin" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tanggal Kejadian</label>
                    <div class="flex-[4]">
                        <input type="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tempat Kejadian</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col mb-4">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Kronologis Singkat Kejadian:</label>
            <textarea id="message" rows="4" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
        </div>

        <div class="flex flex-col gap-4 mb-4">
            <div class="flex">
                <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Klasifikasi Fraud</label>
                <div class="flex-[4]">
                    <select id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>-- Pilih --</option>
                        <option>Kecurangan Laporan Keuangan</option>
                        <option>Penyalahgunaan Aset</option>
                        <option>Kecurangan Berkaitan Dengan Komputer</option>
                    </select>
                </div>
                <div class="grid grid-cols-2 ml-4 gap-2">
                    <form action="" class="">
                        <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <i class="fas fa-check"></i>
                        </button>
                    </form>

                    <form action="" class="">
                        <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <i class="fas fa-times"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="grid grid-rows-3 grid-flow-col gap-4 mb-4">
                <div class="row-span-4 font-medium">Alat Bukti :</div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Saksi 1</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="grid grid-cols-2 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
    
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Departemen/Unit</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="grid grid-cols-2 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
    
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Saksi 2</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="grid grid-cols-2 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
    
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Departemen/Unit</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="grid grid-cols-2 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
    
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-rows-4 grid-flow-col gap-4 mb-4">
                <div class="row-span-4 font-medium"></div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti Dokumen Surat</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
    
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Keterangan Pelaku</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
    
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Keterangan Saksi</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
    
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Lain-lain</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
    
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4 mb-4">
                <div class="flex">
                    <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Dokumentasi Barang Bukti</label>
                    <div class="flex-[4]">
                        <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>
                    <div class="grid grid-cols-3 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                <i class="fas fa-download"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Dokumen Investigasi</label>
                    <div class="flex-[4]">
                        <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>
                    <div class="grid grid-cols-3 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                <i class="fas fa-download"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti Lainnya</label>
                    <div class="flex-[4]">
                        <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    </div>
                    <div class="grid grid-cols-3 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                <i class="fas fa-download"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end items-center">
            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Submit</button>
        </div>
    </div>
@endsection