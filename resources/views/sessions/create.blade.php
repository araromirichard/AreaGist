<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 rounded-xl border border-gray-200 p-6">
            <h1 class="text-center font-bold text-xl">Log In!</h1>
            <form action="/sessions" method="post" class="mt-10">
                @csrf
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="email">
                        Email
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded" type="email" id="email" name="email"
                        value="{{old('email')}}" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="password">
                        password
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded" type="password" id="password"
                        name="password" value="" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Log In
                    </button>
                </div>

            </form>
        </main>
    </section>
</x-layout>