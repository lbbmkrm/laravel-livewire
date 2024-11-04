<div>
    <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Hotel Info</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a wire:navigate href="{{ route('hotel.list') }}">Hotels</a></li>
          <li class="breadcrumb-item active"><a wire:navigate href="{{ route('hotel.create') }}">Update</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="h4">Update a Hotel</h4>
                </div>
              <form wire:submit.prevent='update' class="row g-3" method="POST" autocomplete="off">
                @csrf
                <div class="col-md-12">
                  <div class="form-floating">
                    <input wire:model="name" type="text" class="form-control" id="name" placeholder="Hotel Name">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input wire:model="email" type="text" class="form-control" id="email" placeholder="Hotel Email">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-floating">
                    <input wire:model="phone" type="text" class="form-control" id="phone" placeholder="Hotel Phone">
                    <label for="phone">Phone</label>
                    @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating">
                    <input wire:model="star" type="number" class="form-control" id="star" placeholder="Hotel Rating"
                    step="0.1" min="1" max="5">
                    <label for="star">Star</label>
                    @error('star')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input wire:model="check_in_time" type="datetime-local" class="form-control" id="check_in_time" placeholder="Check in time">
                    <label for="check_in_time">Check in</label>
                    @error('check_in_time')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input wire:model="checkout_time" type="datetime-local" class="form-control" id="checkout" placeholder="Checkout time">
                    <label for="checkout">Checkout</label>
                    @error('checkout_time')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea wire:model="address" class="form-control" placeholder="Address" id="address" style="height: 100px;"></textarea>
                    <label for="address">Address</label>
                    @error('address')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="text-center d-grid">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- End floating Labels Form -->

          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
</div>
