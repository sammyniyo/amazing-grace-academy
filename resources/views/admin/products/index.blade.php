@extends('layouts.admin')

@section('title', 'Products — Admin')
@section('page', 'Albums & Shop')

@section('content')
    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <div>
            <h1 class="text-xl font-semibold text-slate-900">Shop products</h1>
            <p class="mt-1 text-sm text-slate-500">{{ $products->total() }} item(s) in catalog</p>
        </div>
        <a href="{{ route('admin.products.create') }}" class="admin-btn-primary">New product</a>
    </div>

    <div class="grid gap-6 lg:grid-cols-[2fr_1fr]">
        <div class="admin-table-wrap">
            <div class="admin-table-scroll">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th class="w-20">Cover</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>
                                @if ($product->cover_url)
                                    <img src="{{ $product->cover_url }}" alt=""
                                        class="h-12 w-12 rounded-lg object-cover border border-slate-200" loading="lazy">
                                @else
                                    <div
                                        class="h-12 w-12 rounded-lg bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400 text-xs">
                                        No
                                    </div>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.products.edit', $product) }}"
                                    class="font-semibold text-slate-900 hover:text-emerald-700">{{ $product->title }}</a>
                                <div class="text-xs text-slate-500">{{ $product->slug }}</div>
                            </td>
                            <td class="text-slate-700">{{ ucfirst($product->type) }} • {{ $product->format ?? 'n/a' }}</td>
                            <td class="text-slate-700">{{ number_format($product->price) }} RWF</td>
                            <td>
                                @if ($product->is_active)
                                    <span class="admin-pill border-emerald-200 bg-emerald-50 text-emerald-700">Active</span>
                                @else
                                    <span class="admin-pill border-slate-200 bg-slate-50 text-slate-600">Hidden</span>
                                @endif
                            </td>
                            <td class="text-right">
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
                            <td colspan="6" class="py-10 text-center text-sm text-slate-500">No products yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
        </div>

        <div class="admin-card p-5">
            <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-700 mb-3">Quick add</h3>
            <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" class="space-y-3">
                @csrf
                <div>
                    <label class="text-xs font-medium text-slate-600">Cover (optional)</label>
                    <input type="file" name="cover_image" accept="image/jpeg,image/png,image/jpg,image/webp" class="mt-0.5 w-full text-xs text-slate-600 file:rounded file:border-0 file:bg-emerald-50 file:px-2 file:py-1 file:text-xs file:font-semibold file:text-emerald-700">
                </div>
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
                <button class="admin-btn-primary">Add product</button>
            </form>
            <p class="mt-3 text-xs text-slate-500">Or <a href="{{ route('admin.products.create') }}"
                    class="text-emerald-600 hover:underline">create with full form</a>.</p>
        </div>
    </div>
    <div class="mt-4">
        {{ $products->links() }}
    </div>
@endsection
