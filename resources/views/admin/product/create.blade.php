<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Add Product</h1>
                    <br>

                    @if(session()->has('error'))
                        <div>
                            {{session('error')}}
                        </div>
                    @endif
                    <p><a href="{{route('admin/products')}}" class="inline-flex cursor-pointer items-center gap-1 rounded border border-slate-300 bg-gradient-to-b from-slate-50 to-slate-200 px-4 py-2 font-semibold hover:opacity-90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-300 focus-visible:ring-offset-2 active:opacity-100">Go Back</a></p>

                    <form action="{{route('admin/products/save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label block text-sm font-bold mb-2">Title</label>
                                <input
                                    class="bg-[#222630] px-4 py-3 outline-none w-[280px] text-black rounded-lg border-2 transition-colors duration-100 border-solid focus:border-[#596A95] border-[#2B3040] form-control"
                                    name="title"
                                    type="text"
                                />
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label block text-sm font-bold mb-2">Category</label>
                                <input
                                    class="bg-[#222630] px-4 py-3 outline-none w-[280px] text-black rounded-lg border-2 transition-colors duration-100 border-solid focus:border-[#596A95] border-[#2B3040] form-control"
                                    name="category"
                                    type="text"
                                />
                                @error('category')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label block text-sm font-bold mb-2">Price</label>
                                <input
                                    class="bg-[#222630] px-4 py-3 outline-none w-[280px] text-black rounded-lg border-2 transition-colors duration-100 border-solid focus:border-[#596A95] border-[#2B3040] form-control"
                                    name="price"
                                    type="text"
                                />
                                @error('price')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label block text-sm font-bold mb-2">Description</label>
                                <input
                                    class="bg-[#222630] px-4 py-3 outline-none w-[280px] text-black rounded-lg border-2 transition-colors duration-100 border-solid focus:border-[#596A95] border-[#2B3040] form-control"
                                    name="description"
                                    type="text"
                                />
                                @error('description')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-grid">
                                <button class="inline-flex cursor-pointer items-center gap-1 rounded border border-slate-300 bg-gradient-to-b from-slate-50 to-slate-200 px-4 py-2 font-semibold hover:opacity-90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-300 focus-visible:ring-offset-2 active:opacity-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
