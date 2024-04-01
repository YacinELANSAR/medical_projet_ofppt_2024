<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Doctor Verification Status') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('doctors.updateVerification', $doctor->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="isVerified" name="isVerified" value="1" {{ $doctor->isVerified ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isVerified">Verification Status</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>