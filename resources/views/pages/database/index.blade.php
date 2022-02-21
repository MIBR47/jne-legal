@extends('layouts.admin')

@section('content')
    <div class="container mx-auto my-5">
        <div class="flex gap-4 py-4 px-4">
            <div class="flex-[2] flex flex-col gap-4">
                <a onclick="myFunction()"
                    class="text-3xl uppercase w-full text-white bg-[#0D2B70] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Customer
                </a>
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
                    class="text-3xl uppercase w-full text-white bg-[#c91313] hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Vendor
                    Supplier</a>
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
                    class="text-3xl uppercase w-full text-white bg-[#5e5e5f] hover:bg-grey-800 focus:ring-4 focus:ring-grey-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-grey-600 dark:hover:bg-grey-700 dark:focus:ring-grey-800">Lease</a>
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
                    class="text-3xl uppercase w-full text-white bg-[#0D2B70] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Customer
                    Dispute</a>
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
                <a onclick="myFunction5()"
                    class="text-3xl uppercase w-full text-white bg-[#D0391C] hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Fraud</a>
                <div id="myDIV5">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="p-4 mt-5 border-b border-gray-200 shadow">
                                <!-- <table> -->
                                <table id="crudTable5" class="p-4">
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
                <a onclick="myFunction6()"
                    class="text-3xl uppercase w-full text-white bg-[#808080] hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-gray-600 dark:gray:bg-gray-700 dark:focus:ring-gray-900">Outstanding</a>
                <div id="myDIV6">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="p-4 mt-5 border-b border-gray-200 shadow">
                                <!-- <table> -->
                                <table id="crudTable6" class="p-4">
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
                <a onclick="myFunction7()"
                    class="text-3xl uppercase w-full text-white bg-[#3D8116] hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-green-600 dark:gray:bg-green-700 dark:focus:ring-green-900">Other</a>
                <div id="myDIV7">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="p-4 mt-5 border-b border-gray-200 shadow">
                                <!-- <table> -->
                                <table id="crudTable7" class="p-4">
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
                <a onclick="myFunction8()"
                    class="text-3xl uppercase w-full text-white bg-[#7b7c7a] hover:bg-grey-500 focus:ring-4 focus:ring-grey-300 font-medium rounded-lg px-5 py-7 text-center dark:bg-grey-600 dark:gray:bg-grey-700 dark:focus:ring-grey-900">Perizinan
                    Baru</a>
                <div id="myDIV8">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="p-4 mt-5 border-b border-gray-200 shadow">
                                <!-- <table> -->
                                <table id="crudTable8" class="p-4">
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

    {{-- <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                // // { data: 'id', name:'id' }

                {
                    data: 'id',
                    name: 'id',
                    "className": "text-center",
                },
                {
                    data: 'permit_type',
                    name: 'permit_type',
                    "className": "text-center",
                },
                {
                    data: 'status',
                    name: 'status',
                    "className": "text-center",
                },

                // { data: 'user.fraud.tanggal', name:'user.fraud.tanggal' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%',
                    "className": "text-center",
                },
            ]


        })
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

        function myFunction5() {
            var x = document.getElementById("myDIV5");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction6() {
            var x = document.getElementById("myDIV6");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction7() {
            var x = document.getElementById("myDIV7");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function myFunction8() {
            var x = document.getElementById("myDIV8");
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
            ajax: "{{ route('database-customer') }}",
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
            ajax: "{{ route('database-vendor') }}",
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
            ajax: "{{ route('database-lease') }}",
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
            ajax: "{{ route('database-customer-dispute') }}",
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
                    data: 'cs.status',
                    name: 'cs.status',
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
        var datatable = $('#crudTable5').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{{ route('database-fraud') }}",
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
                    data: 'cs.status',
                    name: 'cs.status',
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
        var datatable = $('#crudTable6').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{{ route('database-outstanding') }}",
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
                    data: 'cs.status',
                    name: 'cs.status',
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
        var datatable = $('#crudTable7').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{{ route('database-other') }}",
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
                    data: 'cs.status',
                    name: 'cs.status',
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
        var datatable = $('#crudTable8').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{{ route('database-perizinan') }}",
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
