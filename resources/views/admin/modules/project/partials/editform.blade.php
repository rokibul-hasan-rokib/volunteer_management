<!-- Title -->
<div class="form-group">
    {{ html()->label('Name', 'name') }}
    <x-required />
    {{ html()->text('name')->class('form-control ' . ($errors->has('name') ? 'is-invalid' : ''))->value(old('name', $project->name)) }}
    <!-- Use $project->name -->
    <x-validation-error :error="$errors->first('name')" />
</div>

<!-- Description -->
<div class="form-group mt-3">
    {{ html()->label('Description', 'description') }}
    <x-required />
    {{ html()->textarea('description')->class('form-control ' . ($errors->has('description') ? 'is-invalid' : ''))->value(old('description', $project->description))->rows(4) }}
    <x-validation-error :error="$errors->first('description')" />
</div>


<!-- Start Time -->
<div class="form-group mt-3">
    {{ html()->label('Start Time', 'start_date') }}
    <x-required />
    {{ html()->date('start_date')->class('form-control ' . ($errors->has('start_date') ? 'is-invalid' : ''))->value(old('start_date', $project->start_date->format('Y-m-d'))) }}
    <!-- Use $project->start_date -->
    <x-validation-error :error="$errors->first('start_date')" />
</div>

<!-- End Time -->
<div class="form-group mt-3">
    {{ html()->label('End Time', 'end_date') }}
    <x-required />
    {{ html()->date('end_date')->class('form-control ' . ($errors->has('end_date') ? 'is-invalid' : ''))->value(old('end_date', $project->end_date->format('Y-m-d'))) }}
    <!-- Use $project->end_date -->
    <x-validation-error :error="$errors->first('end_date')" />
</div>

<!-- Status -->
<div class="form-group">
    {{ html()->label('Status', 'status') }}
    <x-required />

    {{ html()->select('status', \App\Models\Project::STATUS_LIST)->class('form-select ' . ($errors->has('status') ? 'is-invalid' : ''))->placeholder(__('Select Status')) }}
    <x-validation-error :error="$errors->first('status')" />
</div>
<div class="form-group mb-2">
    <label for="image">Image:</label>
    <input type="file" name="image" class="form-control">
    @if ($project->image)
        <div class="mt-2">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}"
                width="150" class="img-thumbnail">
        </div>
        <small>Current image: {{ $project->image }}</small>
    @endif
    <x-validation-error :error="$errors->first('image')" />
</div>
