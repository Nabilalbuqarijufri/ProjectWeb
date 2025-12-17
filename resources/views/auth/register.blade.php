<!-- When there is no desire, all things are at peace. - Laozi -->
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Register Form --}}
    <div class="flex items-center justify-center min-h-[60vh] my-10">
        <div class="w-full max-w-md bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg p-8">
            <div class="mb-4">
                <a href="/" class="inline-flex items-center gap-2 text-sm text-blue-600 hover:underline hover:bg-blue-50 dark:hover:bg-gray-700 px-3 py-1 rounded-md transition">
                    &laquo; Back to Home
                </a>
            </div>

            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6 text-center">Create your account</h1>

            <form action="/register" method="post" class="space-y-5">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        value="{{ old('name') }}"
                        placeholder="Jane Doe"
                        required
                        autofocus
                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 px-3 py-2 text-gray-900 dark:text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                    >
                    @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        placeholder="username@example.com"
                        required
                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 px-3 py-2 text-gray-900 dark:text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                    >
                    @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="••••••••"
                        required
                        minlength="8"
                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 px-3 py-2 text-gray-900 dark:text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                    >
                    @error('password') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="••••••••"
                        required
                        minlength="8"
                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 px-3 py-2 text-gray-900 dark:text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                    >
                    @error('password_confirmation') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center text-sm">
                    <label class="inline-flex items-center gap-2">
                        <input type="checkbox" name="terms" value="1" class="h-4 w-4 rounded border-gray-300 focus:ring-blue-500 cursor-pointer" {{ old('terms') ? 'checked' : '' }}>
                        <span class="text-gray-600 dark:text-gray-300 cursor-pointer">I agree to the <a href="/terms" class="text-blue-600 hover:underline">Terms</a></span>
                    </label>
                </div>

                <div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 cursor-pointer text-white font-semibold py-2 rounded-md shadow-sm transition">
                        Register
                    </button>
                </div>

                <p class="text-center text-sm text-gray-600 dark:text-gray-300">
                    Already have an account?
                    <a href="/login" class="text-blue-600 hover:underline">Login</a>
                </p>
            </form>
        </div>
    </div>
</x-layout>