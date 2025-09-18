@props(['labelText', 'for', 'id', 'type', 'placeholder'])
<label for={{ $for }} class="py-1 text-lg">
  {{ $labelText }}
</label>

<input
  id={{ $id }} 
  type={{ $type }}
  class="border border-slate-300/70 focus:outline-blue-400/70 px-3 py-1 rounded-xs"
  placeholder="{{ $placeholder }}"
/>
