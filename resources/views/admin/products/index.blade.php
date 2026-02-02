@extends('layouts.admin')

@section('title', 'Products — Admin')
@section('page', 'Albums & Shop')

@section('content')
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-xl font-semibold text-slate-900">Shop (Products)</h1>
        <a href="{{ route('admin.products.create') }}"
            class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-emerald-700">New
            product</a>
    </div>
    <div class="grid gap-6 lg:grid-cols-[2fr_1fr]">
        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
            <table class="min-w-full text-sm">
                <thead class="bg-slate-50 text-slate-700">
                    <tr>
                        <th class="px-4 py-3 text-left">Title</th>
                        <th class="px-4 py-3 text-left">Type</th>
                        <th class="px-4 py-3 text-left">Price</th>
                        <th class="px-4 py-3 text-left">Active</th>
                        <th class="px-4 py-3 text-right"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($products as $product)
                        <tr>
                            <td class="px-4 py-3">
                                <a href="{{ route('admin.products.edit', $product) }}"
                                    class="font-semibold text-slate-900 hover:text-emerald-700">{{ $product->title }}</a>
                                <div class="text-xs text-slate-500">{{ $product->slug }}</div>
                            </td>
                            <td class="px-4 py-3 text-slate-700">{{ ucfirst($product->type) }} •
                                {{ $product->format ?? 'n/a' }}</td>
                            <td class="px-4 py-3 text-slate-700">{{ number_format($product->price) }} RWF</td>
                            <td class="px-4 py-3">
                                @if ($product->is_active)
                                    <span
                                        class="rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 px-3 py-1 text-xs font-semibold">Active</span>
                                @else
                                    <span
                                        class="rounded-full bg-slate-50 text-slate-600 border border-slate-200 px-3 py-1 text-xs font-semibold">Hidden</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-right">
                                <a href="{{ route('admin.products.edit', $product) }}"
                                    class="text-sm font-semibold text-emerald-700 hover:underline">Edit</a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                    class="inline-block ml-2" onsubmit="return confirm('Delete this product?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-xs font-semibold text-rose-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-6 text-center text-sm text-slate-500">No products yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="rounded-2xl border border-slate-200 bg-white shadow-sm p-5">
            <h3 class="text-sm font-semibold text-slate-900 mb-3">Quick add</h3>
            <form method="POST" action="{{ route('admin.products.store') }}" class="space-y-3">
                @csrf
                <input name="title"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="Title" required>
                <input name="slug"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="Slug (optional)">
                <select name="type"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                    @foreach (['album', 'hymnal', 'workbook', 'bundle'] as $type)
                        <option value="{{ $type }}">{{ ucfirst($type) }}</option>
                    @endforeach
                </select>
                <input name="format"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="MP3, PDF, Print">
                <input type="number" name="price"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="Price (RWF)" min="0" required>
                <label class="inline-flex items-center gap-2 text-sm text-slate-700">
                    <input type="checkbox" name="is_active" value="1" checked> Active
                </label>
                <textarea name="description" rows="3"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    placeholder="Description"></textarea>
                <button
                    class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">Add
                    product</button>
            </form>
            <p class="mt-3 text-xs text-slate-500">Or <a href="{{ route('admin.products.create') }}"
                    class="text-emerald-600 hover:underline">create with full form</a>.</p>
        </div>
    </div>
    <div class="mt-4">
        {{ $products->links() }}
    </div>
@endsection
