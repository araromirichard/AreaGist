
                    @auth

                    <x-panel>
                        <form action="/posts/{{$post->slug}}/comments" method="POST">
                            @csrf

                            <header class="flex items-center">
                                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40" alt=""
                                    class="rounded-full">
                                <h2 class="ml-6">want to participate?</h2>
                            </header>

                            <div class="mt-6">
                                <textarea name="body"
                                    class="w-full focus:outline-none focus:ring text-xs placeholder:px-4 p-2" rows="5"
                                    placeholder="Drop your comments..."
                                    required></textarea>
                                    
                                @error('body')
                                 <span class="text-xs text-red-500">{{$message}}</span>
                                
                                @enderror
                            </div>
                            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                                <button type="submit"
                                    class="bg-blue-500 text-white px-10 p-2 text-sm font-semibold uppercase rounded-full hover:bg-blue-600">Post</button>
                            </div>

                        </form>
                    </x-panel>
                    @else
                    
                    <p class="font-bold">
                        <a class="hover:underline" href="/register">Register</a> or <a class="hover:underline" href="/login">Login</a> to leave a comment...
                    </p>
                    
                    @endauth