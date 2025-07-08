
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Cuit App</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Welcome Back</h2>
    @if (session("error"))
        <p style="color: red">{{ session("error") }}</p>
    @endif
    <form method="POST">
     @csrf
      <div class="mb-4">
        <label class="block text-sm mb-1">Email or Username</label>
        <input type="text" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="you@example.com" />
      </div>
      <div class="mb-4">
        <label class="block text-sm mb-1">Password</label>
        <input type="password" name="password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="********" />
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Login</button>
    </form>

    <p class="text-sm text-center mt-4 text-gray-500">
      Don't have an account?
      <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Sign up</a>
    </p>
  </div>

</body>
</html>