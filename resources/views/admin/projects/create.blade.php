@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
        <h2 class="fs-2">Create Project</h2>
    </div>
    <div class="container">
        <form  action="{{ route('admin.projects.store') }}" method="POST">
            {{-- Cross Site Request Forgering --}}
            @csrf 

            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <textarea class="form-control" name="title" id="title" rows="3" placeholder="title"> {{old('description')}}</textarea>
            </div>

           
            
            

            <button class="btn btn-primary">Create</button>
            <a class="btn btn-secondary" href="{{ route('admin.projects.index') }}">Back</a>
        </form>

        @if ($errors->any())
          <div class="alert alert-danger mt-3">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
    </div>
  </section>
</main>

@endsection