<x-layout>
    <form action="{{ route('register') }}" method="POST">
  @csrf

  <h2>Register for an Account</h2>

  <label for="name">Name:</label>
  <input 
    type="text"
    name="name"
    required
    value="{{ old('name') }}"
  >

  <label for="email">Email:</label>
  <input 
    type="email"
    name="email"
    required
    value="{{ old('email') }}"
  >

  <label for="password">Password:</label>
  <input 
    type="password"
    name="password"
    required
  >

  <label for="password_confirmation">Confirm Password:</label>
  <input 
    type="password"
    name="password_confirmation"
    required
  >

  <button type="submit" class="btn mt-4">Log in</button>

  <!-- validation errors -->
  
</form>
    
</x-layout>