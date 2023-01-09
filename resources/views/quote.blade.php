<x-layout-app>

    @section('title', 'Get your FREE Quote')

    <div class="wrapper my-36">
        <div class="flex flex-col text-center w-full my-12">
            <h1 class="heading-2">
                <span class="relative z-10">GET YOUR</span>
                <span class="relative">
                    <strong class="relative z-10  text-white hero-title">FREE</strong>
                    <span aria-hidden="true" class="absolute -skew-x-6 -inset-4 bg-primary-200 z-0 -rotate-2 rounded-md"></span>
                </span>
                <span class="relative z-10">QUOTE</span>
            </h1>
        </div>

        @if(session('status'))
            <div class="rounded-md bg-green-100 shadow p-4 mb-4 lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/check-circle -->
                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800">Email Delivered</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p>{{session('status')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if(session('errors'))
            <div class="rounded-md bg-red-100 shadow p-4 mb-4 lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                             fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                  clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Error</h3>
                        <div class="mt-2 text-sm text-red-700">
                            <p>Oops! something went wrong.</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div id="form-quote"></div>

        <noscript>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
                <form  id="form-quote" class="flex flex-wrap" method="POST" action="{{ route('quote.send') }}">
                    @csrf
                    @method('POST')
                    <div class="p-2 w-full md:w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600 font-semibold">Name</label>
                            <input type="text" id="name" name="name" value="{{old('name')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border	border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('name') border-red-500   @enderror">
                            @error('name')
                            <span class="text-red-500 block py-1 text-sm">
								{{$message}}
							</span>
                            @enderror

                        </div>
                    </div>

                    <div class="p-2 w-full md:w-1/2">
                        <div class="relative">
                            <label for="email" class="leading-7 text-sm text-gray-600 font-semibold">Email</label>
                            <input type="email" id="email" name="email"
                                   value="{{old('email')}}"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('email') border-red-500   @enderror">
                            @error('email')
                            <span class="text-red-500 block py-1 text-sm">
								{{$message}}
							</span>
                            @enderror
                        </div>
                    </div>

                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="phone" class="leading-7 text-sm text-gray-600 font-semibold">Phone</label>
                            <input type="tel" id="phone" name="phone"
                                   value="{{old('phone')}}"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('phone') border-red-500   @enderror">
                            @error('phone')
                            <span class="text-red-500 block py-1 text-sm">
								{{$message}}
							</span>
                            @enderror
                        </div>
                    </div>

                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="message" class="leading-7 text-sm text-gray-600 font-semibold">Message</label>
                            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200	min-h-[15rem] text-base	outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200	ease-in-out resize-y @error('name') border-red-500 @enderror">{{old('message')}}</textarea>
                            @error('message')
                            <span class="text-red-500 block py-1 text-sm">
								{{$message}}
							</span>
                            @enderror
                        </div>
                    </div>

                    <div class="p-2 w-full">
                        <button type="submit" class="flex mx-auto text-white bg-primary-500 border-0 py-2 px-8 focus:outline-none hover:bg-primary-600 disabled:bg-gray-200 disabled:text-gray-400	rounded text-lg">SUBMIT
                        </button>
                    </div>
                </form>

            </div>
        </div>
        </noscript>

    </div>


</x-layout-app>
