@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                {{-- Card form pendaftaran --}}

                <div class="card ">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">{{ __('Pendaftaran Tugas Akhir 2') }}</h4>
                        <p class="card-category">
                            {{ __('masukann data data dibawah ini untuk memenuhi persyaratan tugas akhir 2') }}</p>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nomor Induk Mahasiswa') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group{{ $errors->has('nim') ? ' has-danger' : '' }}">
                                    <input class="form-control" name="nim" id="input-nim" type="text"
                                        placeholder="{{ __('34111xxxxx') }}" required="true" aria-required="true"
                                        readonly />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="nama" id="input-name" type="text"
                                        placeholder="{{ __('Nama Lengkap') }}" required="true" aria-required="true" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Semester') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <select class="form-control" name="semester" id="input-semester" required="true"
                                        aria-required="true">
                                        <option>Semester 1</option>
                                        <option>Semester 2</option>
                                        <option>Semester 3</option>
                                        <option>Semester 4</option>
                                        <option>Semester 5</option>
                                        <option>Semester 6</option>
                                        <option>Semester 7</option>
                                        <option>Semester 8</option>
                                        <option>Semester 9</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Peminatan') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <select class="form-control" name="peminatan" id="input-peminatan" required="true"
                                        aria-required="true">
                                        <option>DSE - DATA DAN SOFTWARE ENGINEERING</option>
                                        <option>AIG - INTELLIGENCE DAN GAME</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Judul Penelitian') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="judul" id="input-judul" type="text"
                                        placeholder="{{ __('Masukkan judul penelitian') }}" required="true"
                                        aria-required="true" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Dosen Pembimbing 1') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <select class="form-control" name="dosbim1" id="input-dosbim1" required="true"
                                        aria-required="true">
                                        <option>Dosen 1</option>
                                        <option>Dosen 2</option>
                                        <option>Dosen 3</option>
                                        <option>Dosen 4</option>
                                        <option>Dosen 5</option>
                                        <option>Dosen 6</option>
                                        <option>Dosen 7</option>
                                        <option>Dosen 8</option>
                                        <option>Dosen 9</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Dosen Pembimbing 2') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <select class="form-control" name="semester" id="input-semester" required="true"
                                        aria-required="true">
                                        <option>Dosen 1</option>
                                        <option>Dosen 2</option>
                                        <option>Dosen 3</option>
                                        <option>Dosen 4</option>
                                        <option>Dosen 5</option>
                                        <option>Dosen 6</option>
                                        <option>Dosen 7</option>
                                        <option>Dosen 8</option>
                                        <option>Dosen 9</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Dosen Tugas Akhir 1') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <select class="form-control" name="dosbimta1" id="input-dosbimta1" required="true"
                                        aria-required="true">
                                        <option>Dosen 1</option>
                                        <option>Dosen 2</option>
                                        <option>Dosen 3</option>
                                        <option>Dosen 4</option>
                                        <option>Dosen 5</option>
                                        <option>Dosen 6</option>
                                        <option>Dosen 7</option>
                                        <option>Dosen 8</option>
                                        <option>Dosen 9</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Dosen Tugas Akhir 2') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <select class="form-control" name="dosbimta2" id="input-dosbimta2" required="true"
                                        aria-required="true">
                                        <option>Dosen 1</option>
                                        <option>Dosen 2</option>
                                        <option>Dosen 3</option>
                                        <option>Dosen 4</option>
                                        <option>Dosen 5</option>
                                        <option>Dosen 6</option>
                                        <option>Dosen 7</option>
                                        <option>Dosen 8</option>
                                        <option>Dosen 9</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <p style="text-align: center">Berkas Pendaftaran</p>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Bukti pembayaran tagihan') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group form-file-upload form-file-multiple">
                                    <input type="file" multiple="" class="inputFileHidden">
                                    <div class="input-group">
                                        <input type="text" class="form-control inputFileVisible"
                                            placeholder="Single File">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-fab btn-round btn-primary">
                                                <i class="material-icons">attach_file</i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Kartu rencana studi') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group form-file-upload form-file-multiple">
                                    <input type="file" multiple="" class="inputFileHidden">
                                    <div class="input-group">
                                        <input type="text" class="form-control inputFileVisible"
                                            placeholder="Single File">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-fab btn-round btn-primary">
                                                <i class="material-icons">attach_file</i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Kartu hasil studi') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group form-file-upload form-file-multiple">
                                    <input type="file" multiple="" class="inputFileHidden">
                                    <div class="input-group">
                                        <input type="text" class="form-control inputFileVisible"
                                            placeholder="Single File">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-fab btn-round btn-primary">
                                                <i class="material-icons">attach_file</i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nilai IPK') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <input class="form-control" name="judul" id="input-judul" type="text"
                                        placeholder="{{ __('Masukkan judul penelitian') }}" required="true"
                                        aria-required="true" />
                                </div>
                            </div>
                        </div>

                    <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Nilai D/E/K') }}</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                              <div class="form-row">
                                <div class="col">
                                    <select class="form-control" name="matakuliah" id="input-matakuliah" required="true"
                                        aria-required="true">
                                        <option>Tidak ada</option>
                                        <option>Pemrograman Obyek</option>
                                        <option>Sistem Operasi</option>
                                        <option>Kecerdasan Buatan</option>
                                        <option>Pemrograman Web</option>
                                        <option>Pengukuran Teknologi Informasi</option>
                                    </select>
                                </div>
                                <div class="col">
                                  <select class="form-control" name="nilaimatkul" id="input-nilaimatkul" required="true"
                                        aria-required="true">
                                        <option>Tidak ada</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>E</option>
                                    </select>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>

                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-warning">{{ __('Save') }}</button>
                    </div>
                </div>





                {{-- akhir form pendaftaran --}}

            </div>
        </div>
    </div>
</div>

@endsection
