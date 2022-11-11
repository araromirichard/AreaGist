@if (session()->has('success'))
<div x-data="{show:true}" x-init="setTimeout(()=>show = false, 4000)" x-show="show"
    class="fixed bg-blue-900 text-white rounded-xl py-4 px-4 bottom-3 right-3 text-sm">
    <p>{{ session('success') }}</p>
</div>

@endif