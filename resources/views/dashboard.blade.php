<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5"> --}}
            <a href="{{ route('post.create') }}">
                <button type="button" class="py-6 px-4 bg-secondary text-white rounded mt-6 shadow-md sm:rounded-lg">
                    Create New Post
                </button>
            </a>
            {{-- </div> --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-10 p-5">
                <h1 class="mb-5 text-2xl font-black">Posts</h1>

                @forelse ($posts as $post)
                    <div class="flex flex-row items-center space-x-4 ">
                        <a href="{{ route('post.edit', $post->id) }}" class="flex-grow">
                            <div
                                class="bg-white mx-auto flex flex-row justify-between overflow-hidden shadow-md sm:rounded-lg my-2 p-5">
                                <div class="flex items-center">
                                    <p class="font-bold">{{ $post->title }}</p>
                                    @if ($post->visible)
                                        <div class="ml-5 bg-sky-200 rounded-full">
                                            <p class="text-blue py-1 px-2">visible</p>
                                        </div>
                                    @else
                                        <div class="ml-5 bg-gray-200 rounded-full">
                                            <p class="text-gray py-1 px-2">hidden</p>
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </a>

                        <button type="button"
                            class="rounded bg-red-200 text-red-600 p-5 shadow-md sm:rounded-lg flex-none"
                            onclick="Popup()">Delete</button>

                    </div>
                    <div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title"
                        role="dialog" aria-modal="true" id="interestModal">
                        <div
                            class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true">
                            </div>
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
                            <div
                                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div
                                            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                            <svg @click="toggleModal" class="h-6 w-6 text-red-600"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                        </div>
                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                                Deactivate Post
                                            </h3>
                                            <div class="mt-2">
                                                <p class="text-sm text-gray-500">
                                                    Are you sure you want to delete this post?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                                    <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                            Deactivate
                                        </button>
                                    </form>

                                    <button type="button" onclick="Close()"
                                        class="closeModal mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty <h3>No Posts.</h3>
                @endforelse

            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script>
            function Popup() {
                $("#interestModal").removeClass('invisible');
            }

            function Close() {
                $("#interestModal").addClass('invisible');
            }
        </script>
    @endpush


</x-app-layout>
