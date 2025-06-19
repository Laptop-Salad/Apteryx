<x-slot:title>Case Files</x-slot:title>

<div class="container">
    <div class="flex items-center justify-between">
        <flux:heading size="lg">Case files</flux:heading>

        <flux:button wire:click="$dispatch('show-case-file-form')" size="sm">
            <i class="fa-regular fa-folder-open w-8"></i>
            New Case File
        </flux:button>
    </div>

    <div class="mt-10">
        <table class="table-fixed w-full">
            <thead>
            <tr class="border-b">
                <th class="text-start font-normal p-2">Name</th>
                <th class="text-start font-normal p-2">Status</th>
                <th class="w-8"></th>
            </tr>
            </thead>
            <tbody>
                @foreach($this->case_files as $case_file)
                    <tr class="hover:bg-neutral-50">
                        <td class="p-2">
                            <flux:tooltip content="{{$case_file->type->display()}}">
                                <i class="fa-regular {{$case_file->type->icon()}} me-2 cursor-pointer"></i>
                            </flux:tooltip>

                            <a href="{{route('case-files.show', $case_file->id)}}" class="hover:underline">
                                {{$case_file->name}}
                            </a>

                            <p class="text-muted text-sm mt-2">{{$case_file->description}}</p>
                            <p class="text-muted text-xs">Case ID: {{$case_file->id}}</p>
                        </td>
                        <td class="p-2">{{$case_file->status->display()}}</td>
                        <td>
                            <flux:dropdown>
                                <flux:button icon:trailing="ellipsis-horizontal" size="sm" />

                                <flux:menu>
                                    <flux:menu.item>
                                        <i class="fa-regular fa-eye w-8"></i>
                                        View
                                    </flux:menu.item>
                                    <flux:menu.item>
                                        <i class="fa-regular fa-print w-8"></i>
                                        Print
                                    </flux:menu.item>
                                    <flux:menu.item>
                                        <i class="fa-regular fa-copy w-8"></i>
                                        Copy Case ID
                                    </flux:menu.item>

                                    <flux:separator />

                                    <flux:menu.item variant="danger">
                                        <i class="fa-regular fa-folder-closed w-8"></i>
                                        Close Case
                                    </flux:menu.item>
                                </flux:menu>
                            </flux:dropdown>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <livewire:case-file.creator />
</div>
