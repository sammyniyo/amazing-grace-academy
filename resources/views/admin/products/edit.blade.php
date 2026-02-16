@extends('layouts.admin')

@section('title', 'Edit Product — Admin')
@section('page', 'Edit Product')

@section('content')
    <div class="max-w-3xl">
        <form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data"
            class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="text-sm font-semibold text-slate-900">Cover image</label>
                @if ($product->cover_url)
                    <div class="mt-1 flex items-center gap-4">
                        <img src="{{ $product->cover_url }}" alt="Current cover" class="h-24 w-24 rounded-xl object-cover border border-slate-200">
                        <span class="text-xs text-slate-500">Replace by choosing a new file below.</span>
                    </div>
                @endif
                <input type="file" name="cover_image" accept="image/jpeg,image/png,image/jpg,image/webp"
                    class="mt-2 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm file:mr-3 file:rounded-lg file:border-0 file:bg-emerald-50 file:px-3 file:py-1.5 file:text-sm file:font-semibold file:text-emerald-700 focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                <p class="mt-1 text-xs text-slate-500">JPEG, PNG or WebP, max 2MB. Optional.</p>
                @error('cover_image')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Title</label>
                <input name="title" value="{{ old('title', $product->title) }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                    required>
                @error('title')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Slug</label>
                    <input name="slug" value="{{ old('slug', $product->slug) }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                        required>
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Type</label>
                    <select name="type"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">
                        @foreach (['album', 'hymnal', 'workbook', 'bundle'] as $t)
                            <option value="{{ $t }}" @selected(old('type', $product->type) === $t)>{{ ucfirst($t) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label class="text-sm font-semibold text-slate-900">Format</label>
                    <input name="format" value="{{ old('format', $product->format) }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                        placeholder="MP3, PDF, Print">
                </div>
                <div>
                    <label class="text-sm font-semibold text-slate-900">Price (RWF)</label>
                    <input type="number" name="price" value="{{ old('price', $product->price) }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100"
                        min="0" required>
                    @error('price')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div>
                <label class="inline-flex items-center gap-2 text-sm font-semibold text-slate-900">
                    <input type="checkbox" name="is_active" value="1" @checked(old('is_active', $product->is_active))> Active (visible in
                    shop)
                </label>
            </div>
            <div>
                <label class="text-sm font-semibold text-slate-900">Description</label>
                <textarea name="description" rows="4"
                    class="mt-1 w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm focus:border-emerald-300 focus:ring focus:ring-emerald-100">{{ old('description', $product->description) }}</textarea>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <button
                        class="rounded-lg bg-emerald-600 px-4 py-2 text-sm font-semibold text-white hover:bg-emerald-700">Update
                        product</button>
                    <a href="{{ route('admin.products.index') }}" class="text-sm text-slate-600 hover:underline">Back to
                        list</a>
                </div>
                <form method="POST" action="{{ route('admin.products.destroy', $product) }}"
                    onsubmit="return confirm('Delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-sm font-semibold text-rose-600 hover:underline">Delete
                        product</button>
                </form>
            </div>
        </form>
    </div>
@endsection
