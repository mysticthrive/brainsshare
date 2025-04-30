@props([
  'label',
  'name',
  'type' => 'checkbox',
  'id' => $name,
  'checked' => false,
  'tip' => null
])

<x-ui.forms.field 
  :$name
  :label="false"
  :$tip
>
  <input
    type="{{ $type }}"
    id="{{ $id }}"
    name="{{ $name }}"
    @checked($checked)
  >
  <x-ui.forms.label :$label :$name class="mb-0! ml-1"/>
</x-ui.forms.field>