<!-- Very little is needed to make a happy life. - Marcus Aurelius -->
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Login Form --}}
    <div class="flex items-center justify-center min-h-[60vh] my-10">
        <div class="w-full max-w-md bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg p-8">
            <div class="mb-4">
                <a href="/" class="inline-flex items-center gap-2 text-sm text-blue-600 hover:underline hover:bg-blue-50 dark:hover:bg-gray-700 px-3 py-1 rounded-md transition">
                    &laquo; Back to Home
                </a>
            </div>

            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6 text-center">Welcome back</h1>

            <form action="" method="post" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
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
                        required
                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 px-3 py-2 text-gray-900 dark:text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                    >
                    @error('password') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="inline-flex items-center gap-2">
                        <input type="checkbox" name="remember" class="h-4 w-4 rounded border-gray-300 focus:ring-blue-500 cursor-pointer">
                        <span class="text-gray-600 dark:text-gray-300 cursor-pointer">Remember me</span>
                    </label>
                    <a href="#" class="text-blue-600 hover:underline">Forgot?</a>
                </div>

                <div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 cursor-pointer text-white font-semibold py-2 rounded-md shadow-sm transition">
                        Login
                    </button>
                </div>

                <p class="text-center text-sm text-gray-600 dark:text-gray-300">
                    Don't have an account?
                    <a href="#" class="text-blue-600 hover:underline">Create one</a>
                </p>
            </form>
        </div>
    </div>
</x-layout>