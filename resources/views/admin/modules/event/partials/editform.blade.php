<!-- Title -->
<div class="form-group">
    {{ html()->label('Name', 'name') }}
    <x-required />
    {{ html()->text('name')->class('form-control ' . ($errors->has('name') ? 'is-invalid' : ''))->value(old('name', $event->name)) }}
    <!-- Use $project->name -->
    <x-validation-error :error="$errors->first('name')" />
</div>

<!-- Description -->
<div class="form-group mt-3">
    {{ html()->label('Description', 'description') }}
    <x-required />
    {{ html()->textarea('description')->class('form-control ' . ($errors->has('description') ? 'is-invalid' : ''))->value(old('description', $event->description))->rows(4) }}
    <x-validation-error :error="$errors->first('description')" />
</div>
<div class="form-group">
    {{html()->label('Project', 'project_id')}}
    <x-required />
    {{html()->select('project_id', $project)->class('form-control form-select'. ($errors->has('project_id') ? 'is-invalid' : ''))->placeholder(__('Select Project'))}}
    <x-validation-error :error="$errors->first('project_id')"/>
</div>
<div class="form-group mt-3">
    {{ html()->label('Event Time', 'event_date') }}
    <x-required />
    {{ html()->date('event_date')->class('form-control ' . ($errors->has('event_date') ? 'is-invalid' : ''))->value(old('event_date', $event->event_date->format('Y-m-d'))) }}
    <!-- Use $project->start_date -->
    <x-validation-error :error="$errors->first('event_date')" />
</div>
