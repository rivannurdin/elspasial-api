<?php

return [

    'accepted'        => ':attribute harus diterima.',
    'accepted_if'     => ':attribute harus diterima saat :other berisikan :value.',
    'active_url'      => ':attribute bukan URL yang sah.',
    'after'           => ':attribute harus tanggal setelah :date.',
    'after_or_equal'  => ':attribute harus tanggal setelah atau sama dengan :date.',
    'alpha'           => ':attribute hanya boleh berisi huruf.',
    'alpha_dash'      => ':attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num'       => ':attribute hanya boleh berisi huruf dan angka.',
    'array'           => ':attribute harus berupa sebuah array.',
    'before'          => ':attribute harus tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus tanggal sebelum atau sama dengan :date.',
    'between'         => [
        'numeric' => ':attribute harus antara :min dan :max.',
        'file'    => ':attribute harus antara :min dan :max kilobytes.',
        'string'  => ':attribute harus antara :min dan :max karakter.',
        'array'   => ':attribute harus antara :min dan :max item.',
    ],
    'boolean'          => ':attribute harus berupa true atau false',
    'confirmed'        => 'Konfirmasi :attribute tidak cocok.',
    'current_password' => 'Kata sandi tidak sesuai.',
    'date'             => ':attribute bukan tanggal yang valid.',
    'date_equals'      => ':attribute harus tanggal yang sama dengan :date.',
    'date_format'      => ':attribute tidak cocok dengan format :format.',
    'declined'         => ':attribute harus ditolak.',
    'declined_if'      => ':attribute harus ditolak saat :other bernilai :value.',
    'different'        => ':attribute dan :other harus berbeda.',
    'digits'           => ':attribute harus berupa angka :digits.',
    'digits_between'   => ':attribute harus antara angka :min dan :max.',
    'dimensions'       => ':attribute harus merupakan dimensi gambar yang sah.',
    'distinct'         => ':attribute memiliki nilai yang duplikat.',
    'email'            => ':attribute harus berupa alamat surel yang valid.',
    'ends_with'        => ':attribute harus diakhiri dengan salah satu nilai berikut: :values.',
    'enum'             => ':attribute tidak valid.',
    'exists'           => ':attribute yang dipilih tidak valid.',
    'file'             => ':attribute harus berupa sebuah file.',
    'filled'           => ':attribute wajib diisi.',
    'gt'               => [
        'numeric' => ':attribute harus lebih besar dari :value.',
        'file'    => ':attribute harus lebih besar dari :value kilobytes.',
        'string'  => ':attribute harus lebih besar dari :value characters.',
        'array'   => ':attribute harus memiliki lebih dari :value anggota.',
    ],
    'gte' => [
        'numeric' => ':attribute harus minimal :value.',
        'file'    => ':attribute harus minimal :value kilobytes.',
        'string'  => ':attribute harus minimal :value characters.',
        'array'   => ':attribute harus terdiri dari :value anggota atau lebih.',
    ],
    'image'       => ':attribute harus berupa gambar.',
    'in'          => ':attribute yang dipilih tidak valid.',
    'in_array'    => ':attribute tidak ada di dalam :other.',
    'integer'     => ':attribute harus merupakan bilangan bulat.',
    'ip'          => ':attribute harus berupa alamat IP yang valid.',
    'ipv4'        => ':attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'        => ':attribute harus berupa alamat IPv6 yang valid.',
    'mac_address' => ':attribute harus berupa MAC address yang valid.',
    'json'        => ':attribute harus berupa JSON string yang valid.',
    'lt'          => [
        'numeric' => ':attribute harus lebih kecil dari :value.',
        'file'    => ':attribute harus lebih kecil dari :value kilobytes.',
        'string'  => ':attribute harus lebih kecil dari :value characters.',
        'array'   => ':attribute harus memiliki kurang dari :value anggota.',
    ],
    'lte' => [
        'numeric' => ':attribute harus maksimal :value.',
        'file'    => ':attribute harus maksimal :value kilobytes.',
        'string'  => ':attribute harus maksimal :value characters.',
        'array'   => ':attribute harus tidak lebih dari :value anggota.',
    ],
    'max'            => [
        'numeric' => ':attribute seharusnya tidak lebih dari :max.',
        'file'    => ':attribute seharusnya tidak lebih dari :max kilobytes.',
        'string'  => ':attribute seharusnya tidak lebih dari :max karakter.',
        'array'   => ':attribute seharusnya tidak lebih dari :max item.',
    ],
    'mimes'     => ':attribute harus dokumen berjenis : :values.',
    'mimetypes' => ':attribute harus dokumen berjenis : :values.',
    'min'       => [
        'numeric' => ':attribute harus minimal :min.',
        'file'    => ':attribute harus minimal :min kilobytes.',
        'string'  => ':attribute harus minimal :min karakter.',
        'array'   => ':attribute harus minimal :min item.',
    ],
    'multiple_of'          => ':attribute harus berupa kelipatan dari :value.',
    'not_in'               => ':attribute yang dipilih tidak valid.',
    'not_regex'            => 'Format :attribute tidak valid.',
    'numeric'              => ':attribute harus berupa angka.',
    'password'             => 'Kata sandi salah.',
    'present'              => ':attribute wajib ada.',
    'prohibited'           => ':attribute ini tidak boleh diisi.',
    'prohibited_if'        => ':attribute ini tidak boleh diisi saat :other berisikan :value.',
    'prohibited_unless'    => ':attribute ini tidak boleh diisi kecuali :other berisikan :values.',
    'prohibits'            => ':attribute melarang :other untuk ada.',
    'regex'                => 'Format :attribute tidak valid.',
    'required'             => ':attribute wajib diisi.',
    'required_if'          => ':attribute wajib diisi bila :other adalah :value.',
    'required_unless'      => ':attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with'        => ':attribute wajib diisi bila terdapat :values.',
    'required_with_all'    => ':attribute wajib diisi bila terdapat :values.',
    'required_without'     => ':attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all' => ':attribute wajib diisi bila tidak terdapat ada :values.',
    'same'                 => ':attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => ':attribute harus berukuran :size.',
        'file'    => ':attribute harus berukuran :size kilobyte.',
        'string'  => ':attribute harus berukuran :size karakter.',
        'array'   => ':attribute harus mengandung :size item.',
    ],
    'starts_with' => ':attribute harus diawali dengan salah satu nilai berikut: :values.',
    'string'      => ':attribute harus berupa string.',
    'timezone'    => ':attribute harus berupa zona waktu yang valid.',
    'unique'      => ':attribute sudah ada sebelumnya.',
    'uploaded'    => ':attribute gagal diunggah.',
    'url'         => 'Format :attribute tidak valid.',
    'uuid'        => ':attribute harus merupakan UUID yang valid.',

    'custom' => [
        'slug' => [
            'unique' => 'Isian nama / judul sudah pernah digunakan',
        ],
    ],

    'attributes' => [
        'name'                        => 'Nama',
        'identity_number'             => 'NIK',
        'email'                       => 'Email',
        'phone'                       => 'No. Telepon',
        'password'                    => 'Kata Sandi',
        'address'                     => 'Alamat KTP',
        'family_number'               => 'No. KK',
        'profession'                  => 'Pekerjaan',
        'place_birth'                 => 'Tempat Lahir',
        'date_birth'                  => 'Tanggal Lahir',
        'blood_type'                  => 'Golongan Darah',
        'religion'                    => 'Agama',
        'gender'                      => 'Jenis Kelamin',
        'marital'                     => 'Status Perkawinan',
        'family_status'               => 'Status Dalam Keluarga',
        'nationality'                 => 'Kewarganegraan',
        'current_password'            => 'Kata Sandi Lama',
        'new_password'                => 'Kata Sandi Baru',
        'confirm_new_password'        => 'Konfirmasi Kata Sandi Baru',
        'reason'                      => 'Alasan',
        'type_letter_id'              => 'Jenis Surat',
        'allotment_id'                => 'Pengajuan Dilakukan Bagi',
        'necessity_id'                => 'Keperluan',
        'applicant_identity_number'   => 'NIK Pemohon',
        'applicant_identity_card'     => 'Foto KTP Pemohon',
        'applicant_family_card'       => 'Foto KK Pemohon',
        'applicant_gender'            => 'Jenis Kelamin Pemohon',
        'applicant_place_birth'       => 'Tempat Lahir Pemohon',
        'applicant_date_birth'        => 'Tanggal Lahir Pemohon',
        'applicant_religion'          => 'Agama Pemohon',
        'applicant_nationality'       => 'Kewarganegaraan Pemohon',
        'applicant_profession'        => 'Pekerjaan Pemohon',
        'applicant_address'           => 'Alamat Pemohon',
        'father_identity_number'      => 'NIK Ayah',
        'father_gender'               => 'Jenis Kelamin Ayah',
        'father_place_birth'          => 'Tempat Lahir Ayah',
        'father_date_birth'           => 'Tanggal Lahir Ayah',
        'father_religion'             => 'Agama Ayah',
        'father_nationality'          => 'Kewarganegaraan Ayah',
        'father_profession'           => 'Pekerjaan Ayah',
        'father_address'              => 'Alamat Ayah',
        'mother_identity_number'      => 'NIK Ibu',
        'mother_gender'               => 'Jenis Kelamin Ibu',
        'mother_place_birth'          => 'Tempat Lahir Ibu',
        'mother_date_birth'           => 'Tanggal Lahir Ibu',
        'mother_religion'             => 'Agama Ibu',
        'mother_nationality'          => 'Kewarganegaraan Ibu',
        'mother_profession'           => 'Pekerjaan Ibu',
        'mother_address'              => 'Alamat Ibu',
        'real_name'                   => 'Nama Pada Dokumen Beda Nama',
        'real_date_birth'             => 'Tanggal Lahir Pada Dokumen Beda Nama',
        'based_on'                    => 'Jenis Dokumen Beda Nama',
        'based_number'                => 'Nomor Dokumen Beda Nama',
        'based_document'              => 'Unggah Foto Dokumen Beda Nama',
        'address_document'            => 'Alamat Pada Dokumen Beda Nama',
        'lost_document'               => 'Dokumen Yang Hilang',
        'lost_address'                => 'Alamat Kehilangan',
        'on_process_document'         => 'Dokumen Sedang Dalam Proses',
        'institution_name'            => 'Nama Institusi',
        'date_death'                  => 'Tanggal Meninggal',
        'place_death'                 => 'Tempat Meninggal',
        'address_death'               => 'Alamat Meninggal',
        'business_name'               => 'Nama Usaha',
        'business_village'            => 'Banjar Dinas/Dusun Lokasi Usaha',
        'business_address'            => 'Alamat Usaha',
        'guard_name'                  => 'Nama Wali',
        'credential'                  => 'NIK/Email/No. Telp',
        'description'                 => 'Aduan',
        'business_domicile_inside'    => 'Lokasi Usaha',
        'print'                       => 'Pilihan Cetak Surat',
        'submission_for'              => 'Ditujukan Untuk',
        'submission_identity_number'  => 'NIK',
        'heir_name'                   => 'Nama Ahli Waris',
        'guardian_of_identity_number' => 'NIK',
        'guardian_of_gender'          => 'Jenis Kelamin',
        'guardian_of_place_birth'     => 'Tempat Lahir',
        'guardian_of_date_birth'      => 'Tanggal Lahir',
        'guardian_of_religion'        => 'Agama',
        'guardian_of_nationality'     => 'Kewarganegaraan',
        'guardian_of_profession'      => 'Pekerjaan',
        'guardian_of_address'         => 'Alamat',
    ],
];
