<div class="card-body">
  {{-- // <div class="card-title"><h4>#{{ $user->id }} {{ $user->name }}</h4></div> --}}
  <div class="card-text">
    <div class="d-flex justify-content-between">
      <h4>#{{ $user->id }} {{ $user->name }}</h4>
      <div class="d-flex justify-content-end">
        <div class="mx-4"><a href="{{ route('users.show', $user->id) }}">...</a></div>
      </div>
    </div>
  </div>
</div>
