@php
    $name = $getName();
    $uploadUrl = $getUploadUrl();
    $placeholder = $getPlaceholder();
    $isConcealed = $isConcealed();
@endphp

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <x-filament::input.wrapper :valid="$errors->count() === 0">
        <div wire:ignore>
            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
            <script type="text/javascript">



            </script>
            <div
                x-data="{
                    state: $wire.$entangle('{{ $getStatePath() }}'),
                    init() {
                        createCKEditor();

                        Livewire.on('contentUpdated', (payload) => {
                            this.state = payload.content;
                        });
                    }
                }"
            >
                <textarea
                    id="ckeditor-{{ $name }}"
                    name="{{ $name }}"
                    x-model="state"
                ></textarea>
            </div>
        </div>
    </x-filament::input.wrapper>
</x-dynamic-component>
