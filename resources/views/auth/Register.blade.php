<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="{{ asset('js/UserValidate.js') }}" defer></script>
</head>

<body class="bg-light">
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Registration Form</h4>
                </div>
                <div class="card-body">
                    <!-- Success Alert -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <strong>Success!</strong>
                            {{ session()->get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3 row">
                            <!-- Name -->
                            <div class="col">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your name" value="{{ old('name') }}" required />

                                @error('name')
                                    <div class="alert alert-danger p-1" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="col">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" value="{{ old('email') }}" required />

                                @error('email')
                                    <div class="alert alert-danger p-1" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <!-- Address -->
                            <div class="col">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address">{{ old('address') }}</textarea>

                                @error('address')
                                    <div class="alert alert-danger p-1" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Phone Number -->
                            <div class="col">
                                <label class="form-label" for="typeNumber">Phone Number</label>
                                <input type="text" id="typeNumber" name="phoneNumber" class="form-control"
                                    value="{{ old('phoneNumber') }}" required />

                                @error('phoneNumber')
                                    <div class="alert alert-danger p-1" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="mb-3">
                            <label class="form-label d-block">Gender</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male"
                                    value="male" {{ old('gender') == 'male' ? 'checked' : '' }} required />
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female"
                                    value="female" {{ old('gender') == 'female' ? 'checked' : '' }} />
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="other"
                                    value="other" {{ old('gender') == 'other' ? 'checked' : '' }} />
                                <label class="form-check-label" for="other">Other</label>
                            </div>

                            @error('gender')
                                <div class="alert alert-danger p-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3 row">
                            <!-- Admin -->
                            <div class="col">
                                <label for="admin" class="form-label">Admin</label>
                                <select class="form-select" id="admin" name="admin" required>
                                    <option value="">Select</option>
                                    <option value="1" {{ old('admin') == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ old('admin') == '0' ? 'selected' : '' }}>No</option>
                                </select>

                                @error('admin')
                                    <div class="alert alert-danger p-1" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="col">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your Password" required />

                                @error('password')
                                    <div class="alert alert-danger p-1" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Navigate to Login Page -->
            <div class="m-2 text-center">
                <p>Already a User?
                    <a href="#" class="text-primary text-decoration-underline fw-bold">Login</a>
                </p>
            </div>

        </div>
    </div>
</body>

</html>