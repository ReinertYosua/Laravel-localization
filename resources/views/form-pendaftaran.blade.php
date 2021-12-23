<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <h1 style="text-align:center">@lang('pendaftaran.header.judul')</h1>
    <form action="{{ url('/proses-form/') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">@lang('pendaftaran.email')</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmail4">
                @error('email')
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">@lang('pendaftaran.password')</label>
                <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" id="inputPassword4">
                @error('password')
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">@lang('pendaftaran.address1')</label>
            <input type="text" name="alamat1" class="form-control @error('alamat1') is-invalid @enderror" id="inputAddress" placeholder="1234 Main St">
            @error('alamat1')
                    <div class='text-danger'>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputAddress2">@lang('pendaftaran.address2')</label>
            <input type="text" name="alamat2" class="form-control @error('alamat2') is-invalid @enderror" id="inputAddress2" placeholder="Apartment, studio, or floor">
            @error('alamat2')
                    <div class='text-danger'>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">@lang('pendaftaran.city')</label>
                <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" id="inputCity">
                @error('kota')
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">@lang('pendaftaran.state')</label>
                <select id="inputState" class="form-control" name="kelurahan">
                    <option selected value="">------</option>
                    <option value="Jakarta Utara" {{ old('state')=='Jakarta Utara'? 'selected':'' }}>Jakarta Utara</option>
                    <option value="Jakarta Selatan" {{ old('state')=='Jakarta Selatan'? 'selected':'' }}>Jakarta Selatan</option>
                    <option value="Jakarta Timur" {{ old('state')=='Jakarta Timur'? 'selected':'' }}>Jakarta Timur</option>
                    <option value="Jakarta Barat" {{ old('state')=='Jakarta Barat'? 'selected':'' }}>Jakarta Barat</option>
                </select>
                @error('kelurahan')
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">@lang('pendaftaran.zip')</label>
                <input type="text" name="kodepos" class="form-control @error('kodepos') is-invalid @enderror" id="inputZip">
                @error('kodepos')
                    <div class='text-danger'>{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                @lang('pendaftaran.check')
            </label>
            </div>
        </div>
    <button type="submit" class="btn btn-primary">@lang('pendaftaran.signin')</button>
    </form>
</body>
</html>