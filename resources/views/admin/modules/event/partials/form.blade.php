  <!-- Title -->
  <div class="form-group">
      {{ html()->label('Name', 'name') }}
      <x-required />
      {{ html()->text('name')->class('form-control ' . ($errors->has('name') ? 'is-invalid' : ''))->value(old('name')) }}
      <x-validation-error :error="$errors->first('name')" />
  </div>

  <!-- Description -->
  <div class="form-group mt-3">
      {{ html()->label('Description', 'description') }}
      <x-required />
      {{ html()->textarea('description')->class('form-control ' . ($errors->has('description') ? 'is-invalid' : ''))->value(old('description'))->rows(4) }}
      <x-validation-error :error="$errors->first('description')" />
  </div>
  <div class="form-group">
      {{ html()->label('Project', 'project_id') }}
      <x-required />
      {{ html()->select('project_id', $project)->class('form-control form-select' . ($errors->has('project_id') ? 'is-invalid' : ''))->placeholder(__('Select Project')) }}
      <x-validation-error :error="$errors->first('project_id')" />
  </div>
  <!-- Start Time -->
  <div class="form-group mt-3">
      {{ html()->label('Event Date', 'event_date') }}
      <x-required />
      {{ html()->date('event_date')->class('form-control ' . ($errors->has('event_date') ? 'is-invalid' : ''))->value(old('event_date')) }}
      <x-validation-error :error="$errors->first('event_date')" />
  </div>
    <div class="form-group mt-3">
        <label for="image">Image:</label>
        <input type="file" name="image" class="form-control">
        <x-validation-error :error="$errors->first('image')" />
    </div>
