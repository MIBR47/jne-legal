@extends('layouts.admin')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-col">
            <h1 class="mx-2 my-2"> costumer </h1>
            <div class="w-full">
                <div class="p-4 mt-5 border-b border-gray-200 shadow">

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
            <h1 class="mx-2 my-2"> Vendor & Supplier </h1>
            <div class="w-full">
                <div class="p-4 mt-5 border-b border-gray-200 shadow">

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


    {{-- <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

        });
    </script> --}}

    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{{ route('cd-dashboard') }}",
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
            ajax: "{{ route('table-vendor') }}",
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
