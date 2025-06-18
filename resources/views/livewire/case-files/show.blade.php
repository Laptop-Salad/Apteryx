<div class="container">
    <div class="flex space-x-6">
        <flux:button href="{{route('case-files')}}" size="sm">
            <i class="fa-regular fa-arrow-left me-2"></i>
            Back
        </flux:button>

        <div>
            <flux:heading size="lg">{{$this->case_file->name}}</flux:heading>
            <flux:subheading>{{$this->case_file->description}}</flux:subheading>
            <flux:subheading size="sm" class="mt-2">Unique ID: {{$this->case_file->id}}</flux:subheading>
        </div>
    </div>

    <flux:navbar class="mt-8">
        <flux:navbar.item current>Overview</flux:navbar.item>
        <flux:navbar.item>People</flux:navbar.item>
        <flux:navbar.item>Timeline</flux:navbar.item>
        <flux:navbar.item>Notes</flux:navbar.item>
        <flux:navbar.item>Access Log</flux:navbar.item>
    </flux:navbar>

    <div class="mt-8">
        <div class="grid grid-cols-4 gap-3">
            <x-card>
                <i class="fa-regular {{$this->case_file->type->icon()}} me-2"></i>
                {{$this->case_file->type->display()}}
                <flux:subheading size="sm" class="mt-2">Case type</flux:subheadingi>
            </x-card>
            <x-card>
                {{$this->case_file->opened_at_status}}
                <flux:subheading size="sm" class="mt-2">Opened</flux:subheading>
            </x-card>
            <x-card>
                None
                <flux:subheading size="sm" class="mt-2">Current Objective</flux:subheading>
            </x-card>
            <x-card>
                No
                <flux:subheading size="sm" class="mt-2">Recent Activity</flux:subheading>
            </x-card>
        </div>
    </div>
</div>
