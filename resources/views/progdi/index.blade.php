<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prodi Mahasiswa</title>
    @vite('resources/css/app.css')

</head>

<body>
    <h2 class="text-2xl flex justify-center p-4">
        Halaman Data Program Studi
    </h2>
    <div class="mb-2">
    </div>
    <table>
        <tr>
            <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        No.</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Nama Fakultas</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium leading-4  text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        Nama Program Studi</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50">Action</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">
                                <tr>
                                    <td class=" whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                            </div>

                                            <div>
                                                <div class="text-sm font-medium text-gray-900">John Doe
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>

                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                                    </td>

                                    <td
                                        class="px-6 py-4 text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 ">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
</body>

</html>
