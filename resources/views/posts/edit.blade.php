<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if ($errors->any())
                    {!! implode('', $errors->all('<div class="bg-yellow text-primary p-2">:message</div>')) !!}
                @endif
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('post.update', $post->id) }}">
                        @method('patch')
                        @csrf
                        <div class="flex flex-row space-x-4 relative py-2">
                            <input type="text" id="simple-email" name="title" value="{{ $post->title }}"
                                class=" flex-1 rounded appearance-none border border-gray-300 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:border-transparent"
                                placeholder="Title" />
                            <input type="text" id="mintes" name="minutes" value="{{ $post->minutes }}"
                                class=" flex-none rounded appearance-none border border-gray-300 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:border-transparent"
                                placeholder="Minutes" />
                        </div>
                        <x-forms.tinymce-editor :body="$post->body" />
                        {{-- <input type="checkbox" value="true" name="visible" @checked($post->visible) checked />
                        <span class="ml-3 text-sm font-medium text-gray-900">Visible</span> --}}
                        <div class="mt-5">
                            <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                <input type="checkbox" name="visible" id="Blue" @checked($post->visible)
                                    value="1"
                                    class="checked:bg-secondary outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                <label for="Blue"
                                    class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer">
                                </label>
                            </div>
                            <span class="text-gray-400 font-medium">
                                Visible
                            </span>
                        </div>
                        <br>
                        <button type="submit"
                            class="py-2 px-2 mr-2 my-2 bg-secondary text-white rounded">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
