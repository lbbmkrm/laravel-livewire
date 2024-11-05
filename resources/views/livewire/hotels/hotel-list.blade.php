<div>
    <main id="main" class="main">

    <div class="pagetitle">
      <h1>Hotels</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <div class="row">
                  <div class="col-6">
                    <h5 class="card-title">Hotel list</h5>
                  </div>
                  <div class="col-6">
                    <div class="float-end">
                      <a wire:navigate href="{{ route('hotel.create') }}">
                        <button class="btn btn-primary">
                          <i class="bi bi-building-add"></i> 
                        Add
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Default Table -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Check in time</th>
                    <th scope="col">Checkout time</th>
                    <th scope="col">Star</th>
                    <th scope="col">Edit</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($hotels as $hotel)
                    <tr>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->email }}</td>
                    <td>{{ $hotel->address }}</td>
                    <td>{{ $hotel->phone }}</td>
                    <td>{{ $hotel->check_in_time }}</td>
                    <td>{{ $hotel->checkout_time }}</td>
                    <td>{{ $hotel->star }}</td>
                    <td class="d-flex gap-1">
                      <a wire:navigate href="{{ route('hotel.update',$hotel->id) }}" class="btn btn-warning btn-sm">Edit</a>
                      <button wire:click='delete({{ $hotel->id }})'
                        wire:confirm='Are you sure to delete this list!'
                        class="btn btn-danger btn-sm">Delete
                      </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
</div>
