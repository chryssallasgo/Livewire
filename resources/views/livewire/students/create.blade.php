<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-blue-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    

                    {{-- Create content --}}

                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col gap-y-1">
                            <h1 class="text-xl font-bold">Student Information</h1>
                            <p class="text-sm text-gray-300">Fill out this form to create a new student</p>
                        </div>

                        {{-- Create Student Form --}}
                        <form wire:submit='store'>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium dark:text-white">Name</label>
                                    <input 
                                    type="text" 
                                    id="name" 
                                    wire:model.blur="form.name" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 
                                    @error('form.name')
                                        text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                    @enderror
                                    ">
                                    @error('form.name')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium dark:text-white">Email</label>
                                    <input 
                                    type="email" 
                                    id="email"
                                    wire:model.blur="form.email" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500                                     
                                    @error('form.email')
                                        text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                    @enderror
                                    ">
                                    @error('form.email')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="class_id" class="block mb-2 text-sm font-medium dark:text-white">Class</label>
                                    <select 
                                    id="class_id" 
                                    wire:model.live="form.class_id"
                                    class="block w-full px-4 py-3 text-sm rounded-lg pe-9 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                                        @error('form.class_id')
                                            text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                        @enderror
                                    ">
                                        <option value="">Select a class</option>
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                        @endforeach
                                    </select>
                                        @error('form.class_id')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div>
                                    <label for="section" class="block mb-2 text-sm font-medium dark:text-white">Section</label>
                                    <select 
                                    id="section" 
                                    wire:model.live="form.section_id"
                                    class="block w-full px-4 py-3 text-sm rounded-lg pe-9 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600                                    
                                        @error('form.section_id')
                                            text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                        @enderror
                                    ">
                                    <option value="">Select a section</option>
                                        @foreach ($sections as $section)
                                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                                        @endforeach
                                    </select>
                                        @error('form.section_id')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                </div>
                                
                            </div>
                            <div class="flex justify-end mt-4 gap-x-3">
                                <a href="{{ route('students.index') }}" class="inline-flex items-center px-4 py-3 text-sm font-medium text-gray-100 bg-blue-900 border border-transparent rounded-lg gap-x-2 hover:bg-indigo-200 focus:outline-none focus:bg-indigo-200 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-blue-600 dark:focus:bg-blue-900">
                                    Cancel
                                </a>
                                <button type="submit" class="px-4 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    Save
                                </button>
                            </div>
                        </form>
                        {{-- End of Create Student Form --}}
                    </div>

                    {{-- End of Create content --}}

                </div>
            </div>
        </div>
    </div>
</div>

