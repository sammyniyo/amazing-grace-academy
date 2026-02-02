@extends('layouts.admin')

@section('title', 'Orders — Admin')
@section('page', 'Orders')

@section('content')
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
        <form method="GET" action="{{ route('admin.orders.index') }}" class="flex flex-wrap items-center gap-2">
            <label class="text-sm font-medium text-slate-600">Status</label>
            <select name="status" onchange="this.form.submit()"
                class="rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                <option value="">All</option>
                @foreach (['pending', 'paid', 'shipped', 'delivered', 'cancelled'] as $s)
                    <option value="{{ $s }}" @selected(request('status') === $s)>{{ ucfirst($s) }}</option>
                @endforeach
            </select>
        </form>
    </div>

    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-slate-50 text-slate-700">
                    <tr>
                        <th class="px-4 py-3 text-left">Order</th>
                        <th class="px-4 py-3 text-left">Customer</th>
                        <th class="px-4 py-3 text-left">Product</th>
                        <th class="px-4 py-3 text-left">Qty</th>
                        <th class="px-4 py-3 text-left">Total</th>
                        <th class="px-4 py-3 text-left">Payment</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($orders as $order)
                        <tr>
                            <td class="px-4 py-3">
                                <span class="font-mono text-xs text-slate-500">#{{ $order->id }}</span>
                                <div class="text-xs text-slate-500">{{ $order->created_at->format('M j, Y H:i') }}</div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="font-semibold text-slate-900">{{ $order->name }}</div>
                                <div class="text-xs text-slate-500">{{ $order->phone ?? '—' }}</div>
                                @if ($order->email)
                                    <div class="text-xs text-slate-500">{{ $order->email }}</div>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <div class="font-medium text-slate-900">{{ $order->product?->title ?? '—' }}</div>
                            </td>
                            <td class="px-4 py-3 text-slate-700">{{ $order->quantity }}</td>
                            <td class="px-4 py-3 font-medium text-slate-900">{{ number_format($order->total_price) }} RWF
                            </td>
                            <td class="px-4 py-3">
                                @if ($order->payment_provider)
                                    <span
                                        class="rounded-full bg-amber-50 text-amber-700 border border-amber-200 px-2 py-1 text-xs font-semibold">{{ ucfirst($order->payment_provider) }}</span>
                                    @if ($order->payment_reference)
                                        <div class="text-xs text-slate-500 mt-1">
                                            {{ \Illuminate\Support\Str::limit($order->payment_reference, 12) }}</div>
                                    @endif
                                @else
                                    <span class="text-slate-400">—</span>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <form action="{{ route('admin.orders.update', $order) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" onchange="this.form.submit()"
                                        class="rounded-lg border border-slate-200 text-xs px-2 py-1.5 focus:border-emerald-300">
                                        @foreach (['pending', 'paid', 'shipped', 'delivered', 'cancelled'] as $s)
                                            <option value="{{ $s }}" @selected($order->status === $s)>
                                                {{ ucfirst($s) }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="notes" value="{{ $order->notes }}">
                                </form>
                            </td>
                            <td class="px-4 py-3 text-right">
                                <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Delete this order?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-xs font-semibold text-rose-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-4 py-8 text-center text-slate-500">No orders yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $orders->links() }}
    </div>
@endsection
