<x-app-layout>
    <title>{{ $pageTitle }} | {{ config('app.name', 'Laravel') }}</title>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- start form galeri photo --}}
                    <!-- Modal content -->
                    <div class="relative bg-black rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal body -->
                        <form method="POST" action="{{ route('admin-store-galeri-photo') }}" entype="multiple/form-data"
                            class="p-4 md:p-5">
                            @csrf
                            <div class="grid gap-4 mb-4 grid-cols-1 sm:grid-cols-2">
                                <div class="col-span-1">
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Album</label>
                                    <input type="text" name="title" id="title"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Type album name">
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>
                                <div class="col-span-1">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="file_input">Upload file</label>
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="file_input" type="file">
                                </div>
                                <div class="col-span-1">
                                    <label for="category"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                    <select id="category", name="category"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected>Select category</option>
                                        @foreach ($listCategory as $key => $value)
                                            <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-1 sm:col-span-2">
                                    <label for="description"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Keterangan
                                        Album</label>
                                    <textarea input type="text" name="description" id="description" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Write album description here"></textarea>
                                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>
                            </div>
                            <button type="submit"
                            class="text-white inline-flex items-center bg-gradient-to-r from-teal-500 to-teal-700 hover:from-teal-600 hover:to-teal-800 border border-teal-700 hover:border-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-xl text-base px-8 py-4 transition-transform transform hover:scale-105 active:scale-95 shadow-lg dark:bg-teal-500 dark:focus:ring-teal-600">
                            <svg class="me-2 -ms-1 w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2v20m10-10H2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Tambah Album
                        </button>                        
                        </form>
                    </div>
                    {{-- end form galeri photo --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
