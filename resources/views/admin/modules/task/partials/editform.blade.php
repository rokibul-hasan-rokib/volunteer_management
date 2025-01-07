<div class="form-group">
    {{html()->label('Event', 'event_id')}}
    <x-required />
    {{html()->select('event_id', $event)->class('form-control form-select'. ($errors->has('event_id') ? 'is-invalid' : ''))->placeholder(__('Select Event'))}}
    <x-validation-error :error="$errors->first('event_id')"/>
</div>

<div class="form-group">
    {{html()->label('User', 'user_id')}}
    <x-required />
    {{html()->select('user_id', $user)->class('form-control form-select'. ($errors->has('user_id') ? 'is-invalid' : ''))->placeholder(__('Select User'))}}
    <x-validation-error :error="$errors->first('user_id')"/>
</div>

<!-- Title -->
<div class="form-group">
    {{ html()->label('Title', 'title') }}
    <x-required />
    {{ html()->text('title')->class('form-control ' . ($errors->has('title') ? 'is-invalid' : ''))->value(old('title', $task->title)) }}
    <!-- Use $project->name -->
    <x-validation-error :error="$errors->first('title')" />
</div>

<!-- Description -->
<div class="form-group mt-3">
    {{ html()->label('Description', 'description') }}
    <x-required />
    {{ html()->textarea('description')->class('form-control ' . ($errors->has('description') ? 'is-invalid' : ''))->value(old('description', $task->description))->rows(4) }}
    <x-validation-error :error="$errors->first('description')" />
</div>


<!-- Status -->
<div class="form-group">
    {{ html()->label('Status', 'status') }}
    <x-required />

    {{ html()->select('status', \App\Models\Project::STATUS_LIST)->class('form-select ' . ($errors->has('status') ? 'is-invalid' : ''))->placeholder(__('Select Status')) }}
    <x-validation-error :error="$errors->first('status')" />
</div>
