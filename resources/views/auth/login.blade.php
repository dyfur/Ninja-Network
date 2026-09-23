<x-layout>
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <h2>Log In to Your Account</h2>

        <label for="email">Email:</label>
        <input 
            type="email"
            name="email"
            id="email"
            required
            value="{{ old('email') }}"
        >

        <label for="password">Password:</label>
        <input 
            type="password"
            name="password"
            id="password"
            required
        >

        <button type="submit" class="btn mt-4">Log in</button>

        <!-- validation errors -->
    </form>
</x-layout>
