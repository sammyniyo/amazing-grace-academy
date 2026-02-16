<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password — Amazing Grace Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gradient-to-br from-emerald-50 via-white to-amber-50 text-slate-900 flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="rounded-3xl border border-emerald-100 bg-white/95 backdrop-blur shadow-xl shadow-emerald-100/60 p-8">
            <div class="flex items-center justify-center mb-4">
                <div class="grid h-12 w-12 place-items-center rounded-2xl bg-gradient-to-br from-emerald-500 via-green-500 to-amber-400 text-white shadow-lg ring-1 ring-white/30">
                    <span class="text-lg font-semibold tracking-tight">A<span class="mx-[2px] text-xl leading-none">𝄞</span>A</span>
                </div>
            </div>
            <h1 class="text-center text-lg font-semibold text-slate-900">Reset password</h1>
            <p class="mt-1 text-center text-sm text-slate-600">Enter your admin email and we’ll send a reset link.</p>

            <div class="mt-2 text-center">
                <a href="{{ route('login') }}" class="text-xs font-semibold text-emerald-700 hover:text-emerald-800">← Back to sign in</a>
            </div>

            @if (session('status'))
                <div class="mt-4 rounded-xl border border-emerald-200 bg-emerald-50 px-3 py-2 text-sm text-emerald-800">
                    {{ session('status') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="mt-4 rounded-xl border border-rose-200 bg-rose-50 px-3 py-2 text-sm text-rose-700">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="mt-4 space-y-4">
                @csrf
                <div>
                    <label class="text-sm font-semibold text-slate-800" for="email">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}"
                        class="mt-1 w-full rounded-xl border border-emerald-200 bg-white px-3 py-3 text-sm focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-100"
                        placeholder="admin@example.com" required autofocus>
                </div>
                <button type="submit"
                    class="w-full rounded-xl bg-emerald-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-emerald-200/60 hover:bg-emerald-700 transition">
                    Send reset link
                </button>
            </form>
        </div>
    </div>
</body>

</html>
