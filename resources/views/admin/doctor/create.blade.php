@extends('templates.default')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Input Dokter</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('admin.doctor.store') }}" method="POST">
          @csrf
          <div class="box-body">
            <div class="form-group col-md-6">
              <label for="nama_dokter">Nama Dokter</label>
              <input type="text" class="form-control {{ $errors->has('nama_dokter') ? 'is-invalid' : '' }}" name="nama_dokter" placeholder="Masukkan Nama Dokter" value="{{ old('nama_dokter')}}">
              <div class="invalid-feedback">
                  {{ $errors->first('nama_dokter') }}
          </div>
            </div>
            <div class="form-group col-md-6">
              <label for="nama_klinik">Nama Klinik</label>
              <input type="text" class="form-control {{ $errors->has('nama_klinik') ? 'is-invalid' : '' }}" name="nama_klinik" placeholder="Masukkan Nama Klinik" value="{{ old('nama_klinik')}}">
              <div class="invalid-feedback">
                  {{ $errors->first('nama_klinik') }}
          </div>
            </div>
            <div class="form-group col-md-6">
              <label for="alamat_klinik">Alamat Klinik</label>
              <input type="text" class="form-control {{ $errors->has('alamat_klinik') ? 'is-invalid' : '' }}" name="alamat_klinik"  value="{{ old('alamat_klinik')}}" placeholder="Masukkan Alama Klinik">
              <div class="invalid-feedback">
                  {{ $errors->first('alamat_klinik') }}
          </div>
            </div>
            <div class="form-group col-md-6">
              <label for="no_hp">No HP</label>
              <input type="text" class="form-control {{ $errors->has('no_hp') ? 'is-invalid' : '' }}" name="no_hp" placeholder="Masukkan No HP" value="{{ old('no_hp')}}">
              <div class="invalid-feedback">
                  {{ $errors->first('no_hp') }}
          </div>
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" placeholder="Masukkan Email" value="{{ old('email')}}">
              <div class="invalid-feedback">
                  {{ $errors->first('email') }}
          </div>
            </div>

            <div class="form-group col-md-6">
                <label for="id_pasien">Pasien</label>
                <select name="id_pasien" class="form-control">
                  @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->nama_pasien }}</option>                      
                  @endforeach
                </select>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" value="save" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

    </div>
    <!--/.col (left) -->
</div>
@endsection