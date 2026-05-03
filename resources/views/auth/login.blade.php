<x-guest-layout>

<div class="min-h-screen flex items-center justify-center bg-gray-100">

    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow">

        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label class="text-sm">Email</label>
                <input type="email" name="email" class="w-full border p-2 rounded" required>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="text-sm">Password</label>
                <input type="password" name="password" class="w-full border p-2 rounded" required>
            </div>

            <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Login
            </button>

        </form>

        <p class="text-sm text-center mt-4">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-blue-600">Register</a>
        </p>

    </div>

</div>

</x-guest-layout>