@extends('layouts.admin')

@section('content')
    <div class="container mx-auto my-5">
        <div class="flex gap-4 py-4 px-4">
            <div class="flex-[2] flex flex-col gap-4">
                <a onclick="myFunction()"
                    class="text-3xl uppercase w-full text-white bg-[#0D2B70] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Customer
                    Dispute</a>
                <div id="myDIV">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="p-4 mt-5 border-b border-gray-200 shadow">
                                <!-- <table> -->
                                <table id="crudTable" class="p-4">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="text-xs text-gray-500">
                                                ID
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Name
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Status
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a onclick="myFunction2()"
                    class="text-3xl uppercase w-full text-white bg-[#D0391C] hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Fraud</a>
                <div id="myDIV2">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="p-4 mt-5 border-b border-gray-200 shadow">
                                <!-- <table> -->
                                <table id="crudTable2" class="p-4">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="text-xs text-gray-500">
                                                ID
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Name
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Status
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a onclick="myFunction3()"
                    class="text-3xl uppercase w-full text-white bg-[#808080] hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-gray-600 dark:gray:bg-gray-700 dark:focus:ring-gray-900">Outstanding</a>
                <div id="myDIV3">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="p-4 mt-5 border-b border-gray-200 shadow">
                                <!-- <table> -->
                                <table id="crudTable3" class="p-4">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="text-xs text-gray-500">
                                                ID
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Name
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Status
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a onclick="myFunction4()"
                    class="text-3xl uppercase w-full text-white bg-[#3D8116] hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-green-600 dark:gray:bg-green-700 dark:focus:ring-green-900">Other</a>
                <div id="myDIV4">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="p-4 mt-5 border-b border-gray-200 shadow">
                                <!-- <table> -->
                                <table id="crudTable4" class="p-4">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="text-xs text-gray-500">
                                                ID
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Name
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Status
                                            </th>
                                            <th class="text-xs text-gray-500">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

        });
    </script> --}}

    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction2() {
            var x = document.getElementById("myDIV2");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction3() {
            var x = document.getElementById("myDIV3");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction4() {
            var x = document.getElementById("myDIV4");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{{ route('team-cs-dashboard') }}",
            columns: [
                // // { data: 'id', name:'id' }

                {
                    data: 'id',
                    name: 'id',
                    "className": "text-center"
                },
                {
                    data: 'user_id',
                    name: 'user_id',
                    "className": "text-center"
                },
                {
                    data: 'status',
                    name: 'status',
                    "className": "text-center"
                },

                // { data: 'user.fraud.tanggal', name:'user.fraud.tanggal' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%',
                    "className": "text-center"
                },
            ]


        })
        var datatable = $('#crudTable2').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{{ route('team-cs-table-fraud') }}",
            columns: [
                // // { data: 'id', name:'id' }

                {
                    data: 'id',
                    name: 'id',
                    "className": "text-center"
                },
                {
                    data: 'user_id',
                    name: 'user_id',
                    "className": "text-center"
                },
                {
                    data: 'status',
                    name: 'status',
                    "className": "text-center"
                },

                // { data: 'user.fraud.tanggal', name:'user.fraud.tanggal' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%',
                    "className": "text-center"
                },
            ]


        })
        var datatable = $('#crudTable3').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{{ route('team-cs-table-outstanding') }}",
            columns: [
                // // { data: 'id', name:'id' }

                {
                    data: 'id',
                    name: 'id',
                    "className": "text-center"
                },
                {
                    data: 'user_id',
                    name: 'user_id',
                    "className": "text-center"
                },
                {
                    data: 'status',
                    name: 'status',
                    "className": "text-center"
                },

                // { data: 'user.fraud.tanggal', name:'user.fraud.tanggal' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%',
                    "className": "text-center"
                },
            ]


        })
        var datatable = $('#crudTable4').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{{ route('team-cs-table-other') }}",
            columns: [
                // // { data: 'id', name:'id' }

                {
                    data: 'id',
                    name: 'id',
                    "className": "text-center"
                },
                {
                    data: 'user_id',
                    name: 'user_id',
                    "className": "text-center"
                },
                {
                    data: 'status',
                    name: 'status',
                    "className": "text-center"
                },

                // { data: 'user.fraud.tanggal', name:'user.fraud.tanggal' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%',
                    "className": "text-center"
                },
            ]


        })
    </script>
@endsection
