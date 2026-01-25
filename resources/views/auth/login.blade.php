<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Amazing Grace Academy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gradient-to-br from-emerald-50 via-white to-amber-50 text-slate-900 flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="rounded-3xl border border-emerald-100 bg-white/95 backdrop-blur shadow-xl shadow-emerald-100/60 p-8">
            <div class="flex items-center justify-center mb-4">
                <div
                    class="grid h-12 w-12 place-items-center rounded-2xl bg-gradient-to-br from-emerald-500 via-green-500 to-amber-400 text-white shadow-lg ring-1 ring-white/30">
                    <span class="text-lg font-semibold tracking-tight">A<span class="mx-[2px] text-xl leading-none">𝄞</span>A</span>
                </div>
            </div>
            <h1 class="text-center text-lg font-semibold text-slate-900">Amazing Grace Admin</h1>

            <div class="mt-2 text-center">
                <a href="{{ route('home') }}" class="text-xs font-semibold text-emerald-700 hover:text-emerald-800">← Back to website</a>
            </div>

            <div class="mt-6 text-center space-y-1">
                <h2 class="text-base font-semibold text-slate-900">Sign in</h2>
                <p class="text-sm text-slate-600">Welcome back. Access the choir admin portal.</p>
            </div>

            @if ($errors->any())
                <div class="mt-4 rounded-xl border border-rose-200 bg-rose-50 px-3 py-2 text-sm text-rose-700">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.attempt') }}" class="mt-4 space-y-4">
                @csrf
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-800" for="email">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}"
                        class="w-full rounded-xl border border-emerald-200 bg-white px-3 py-3 text-sm focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-100"
                        placeholder="choir.admin@example.com" required autofocus>
                </div>

                <div class="space-y-2">
                    <div class="flex items-center justify-between text-sm font-semibold text-slate-800">
                        <label for="password">Password</label>
                        <a href="#" class="text-slate-500 hover:text-slate-700 text-xs">Forgot password?</a>
                    </div>
                    <input id="password" name="password" type="password"
                        class="w-full rounded-xl border border-emerald-200 bg-white px-3 py-3 text-sm focus:border-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-100"
                        placeholder="••••••••" required>
                </div>

                <button type="submit"
                    class="w-full rounded-xl bg-emerald-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-emerald-200/60 hover:bg-emerald-700 transition inline-flex items-center justify-center gap-2">
                    <x-ui.icon name="lock" class="h-4 w-4 text-white" /> Sign in to Admin
                </button>
            </form>

            <p class="mt-6 text-xs text-slate-500 text-center">
                Need help? Contact the Amazing Grace Academy ICT team.
            </p>
        </div>
    </div>
</body>
</html>
