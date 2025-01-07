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

  <!-- Start Time -->
  <div class="form-group mt-3">
      {{ html()->label('Start Time', 'start_date') }}
      <x-required />
      {{ html()->date('start_date')->class('form-control ' . ($errors->has('start_date') ? 'is-invalid' : ''))->value(old('start_date')) }}
      <x-validation-error :error="$errors->first('start_date')" />
  </div>

  <!-- End Time -->
  <div class="form-group mt-3">
      {{ html()->label('End Time', 'end_date') }}
      <x-required />
      {{ html()->date('end_date')->class('form-control ' . ($errors->has('end_date') ? 'is-invalid' : ''))->value(old('end_date')) }}
      <x-validation-error :error="$errors->first('end_date')" />
  </div>

  <!-- Status -->
  <div class="form-group">
      {{ html()->label('Status', 'status') }}
      <x-required />
      {{ html()->select('status', \App\Models\Project::STATUS_LIST)->class('form-select ' . ($errors->has('status') ? 'is-invalid' : ''))->placeholder(__('Select status')) }}
      <x-validation-error :error="$errors->first('status')" />
  </div>
