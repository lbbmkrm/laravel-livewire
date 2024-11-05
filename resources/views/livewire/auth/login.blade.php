<!-- Login Card -->
<div class="card mb-3">
  <div class="card-body">
    <div class="pt-4 pb-2">
      <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
      <p class="text-center small">Enter your email &amp; password to login</p>
    </div>

    <!-- Login Form -->
    <form wire:submit='login' class="row g-3 needs-validation" autocomplete="off">
      <!-- Email Field -->
      <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <div class="input-group has-validation">
          <input wire:model='email' type="text" name="email" class="form-control" id="email" required>
          <div class="invalid-feedback">Please enter your email.</div>
        </div>
      </div>

      <!-- Password Field -->
      <div class="col-12">
        <label for="yourPassword" class="form-label">Password</label>
        <input wire:model='password' type="password" name="password" class="form-control" id="yourPassword" required>
        <div class="invalid-feedback">Please enter your password!</div>
      </div>

      <!-- Submit Button -->
      <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Login</button>
      </div>

      <!-- Registration Link -->
      <div class="col-12">
        <p class="small mb-0 mt-1">Don't have an account? <a href="pages-register.html">Create an account</a></p>
      </div>
    </form>
  </div>
</div>
