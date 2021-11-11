<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'             => 'Isian ini harus diterima.',
    'accepted_if'          => 'Isian ini harus diterima ketika :other berisi :value.',
    'active_url'           => 'URL ini tidak sah.',
    'after'                => 'Tanggal harus berisi setelah :date.',
    'after_or_equal'       => 'Tanggal harus berisi setelah atau sama dengan :date.',
    'alpha'                => 'Isian ini hanya boleh berisi huruf.',
    'alpha_dash'           => 'Isian ini hanya boleh berisi huruf, angka, strip, dan garis bawah.',
    'alpha_num'            => 'Isian ini hanya boleh berisi huruf dan angka.',
    'array'                => 'Isian harus berisi sebuah array.',
    'attached'             => 'Isian ini sudah dilampirkan.',
    'before'               => 'Tanggal harus berisi sebelum :date.',
    'before_or_equal'      => 'Tanggal harus berisi tanggal sebelum atau sama dengan :date.',
    'between'              => [
        'array'   => 'Konten ini harus memiliki panjang di antara :min dan :max item.',
        'file'    => 'Berkas ini harus berukuran di antara :min dan :max kilobyte.',
        'numeric' => 'Nilai ini harus bernilai di antara :min dan :max.',
        'string'  => 'String ini harus memiliki panjang di antara :min dan :max karakter.',
    ],
    'boolean'              => 'Isian ini harus berisi true atau false.',
    'confirmed'            => 'Konfirmasi tidak sesuai.',
    'current_password'     => 'Kata sandi salah.',
    'date'                 => 'Isian ini bukan tanggal yang benar.',
    'date_equals'          => 'Isian ini harus berisi tanggal yang sama dengan :date.',
    'date_format'          => 'Isian ini tidak cocok dengan format :format.',
    'different'            => 'Nilai ini harus tidak sama dengan :other.',
    'digits'               => 'Isian ini harus berisi :digits digit.',
    'digits_between'       => 'Isian ini harus di antara :min dan :max digit.',
    'dimensions'           => 'Gambar ini tidak memiliki dimensi yang benar.',
    'distinct'             => 'Isian ini memiliki nilai duplikat.',
    'email'                => 'Isian ini harus berisi format email yang benar.',
    'ends_with'            => 'Isian ini harus berakhiran dengan: :values.',
    'exists'               => 'Nilai yang dipilih tidak sesuai.',
    'file'                 => 'Konten harus berisi sebuah berkas.',
    'filled'               => 'Isian ini harus berisi sebuah nilai.',
    'gt'                   => [
        'array'   => 'Konten harus memiliki lebih dari :value item.',
        'file'    => 'Ukuran berkas harus berisi lebih besar dari :value kilobyte.',
        'numeric' => 'Nilai harus lebih besar dari :value.',
        'string'  => 'String harus berisi lebih besar dari :value karakter.',
    ],
    'gte'                  => [
        'array'   => 'Konten harus memiliki :value item atau lebih.',
        'file'    => 'Ukuran konten harus berisi lebih besar dari atau setara :value kilobyte.',
        'numeric' => 'Nilai harus berisi lebih besar dari atau setara :value.',
        'string'  => 'String harus berisi lebih besar dari atau setara :value karakter.',
    ],
    'image'                => 'Isian ini harus berisi sebuah gambar.',
    'in'                   => 'Pilihan nilai tidak sesuai.',
    'in_array'             => 'Nilai ini tidak ada di :other.',
    'integer'              => 'Isian ini harus berisi sebuah angka.',
    'ip'                   => 'Isian ini harus berisi alamat IP yang valid.',
    'ipv4'                 => 'Isian ini harus berisi alamat IPv4 yang valid.',
    'ipv6'                 => 'Isian ini harus berisi alamat IPv6 yang valid.',
    'json'                 => 'Isian ini harus berisi string JSON yang valid.',
    'lt'                   => [
        'array'   => 'Panjang array harus kurang dari :value item.',
        'file'    => 'Ukuran konten harus berisi kurang dari :value kilobyte.',
        'numeric' => 'Nilai harus berisi kurang dari :value.',
        'string'  => 'String harus berisi kurang dari :value karakter.',
    ],
    'lte'                  => [
        'array'   => 'Panjang array harus lebih dari :value item.',
        'file'    => 'Ukuran konten harus berisi kurang dari atau setara :value kilobyte.',
        'numeric' => 'Nilai harus berisi kurang dari atau setara :value.',
        'string'  => 'String harus berisi kurang dari atau setara :value karakter.',
    ],
    'max'                  => [
        'array'   => 'Panjang array tidak boleh lebih dari :max item.',
        'file'    => 'Ukuran konten tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => 'Nilai tidak boleh lebih besar dari :max.',
        'string'  => 'String tidak boleh lebih besar dari :max karakter.',
    ],
    'mimes'                => 'Isian ini harus berisi sebuah berkas berjenis: :values.',
    'mimetypes'            => 'Isian ini harus berisi sebuah berkas berjenis: :values.',
    'min'                  => [
        'array'   => 'Panjang array harus minimal :min item.',
        'file'    => 'Ukuran konten harus berisi minimal :min kilobyte.',
        'numeric' => 'Nilai harus berisi minimal :min.',
        'string'  => 'String harus berisi minimal :min karakter.',
    ],
    'multiple_of'          => 'Nilai harus merupakan kelipatan dari :value',
    'not_in'               => 'Pilihan nilai tidak sesuai.',
    'not_regex'            => 'Format ini tidak sesuai.',
    'numeric'              => 'Isian ini harus berisi angka.',
    'password'             => 'Kata sandi tidak sesuai',
    'present'              => 'Isian ini wajib ada.',
    'prohibited'           => 'Isian ini tidak boleh ada.',
    'prohibited_if'        => 'Isian ini tidak boleh ada bila :other adalah :value.',
    'prohibited_unless'    => 'Isian ini tidak boleh ada kecuali :other memiliki nilai :values.',
    'prohibits'            => 'Isian ini melarang isian :other untuk ditampilkan.',
    'regex'                => 'Format ini tidak sesuai.',
    'relatable'            => 'Isian ini mungkin tidak berasosiasi dengan sumber ini.',
    'required'             => 'Isian ini wajib diisi',
    'required_if'          => 'Isian ini wajib diisi bila :other adalah :value.',
    'required_unless'      => 'Isian ini wajib diisi jika :other berada dalam :values.',
    'required_with'        => 'Isian ini wajib diisi bila :values tersedia.',
    'required_with_all'    => 'Isian ini wajib diisi bila :values tersedia.',
    'required_without'     => 'Isian ini wajib diisi bila :values tidak tersedia.',
    'required_without_all' => 'Isian ini wajib diisi bila tidak satupun :values tersedia.',
    'same'                 => 'Nilai dari isian ini harus sesuai dengan :other.',
    'size'                 => [
        'array'   => 'Panjang array harus memiliki :size item.',
        'file'    => 'Ukuran konten harus berisi :size kilobyte.',
        'numeric' => 'Nilai harus berisi :size.',
        'string'  => 'String harus berisi :size karakter.',
    ],
    'starts_with'          => 'Isian ini harus diawali salah satu dari berikut: :values.',
    'string'               => 'Isian ini harus berisi sebuah string.',
    'timezone'             => 'Isian ini harus berisi zona waktu yang valid.',
    'unique'               => 'Isian ini sudah ada sebelumnya.',
    'uploaded'             => 'Berkas gagal diunggah.',
    'url'                  => 'Format ini tidak valid.',
    'uuid'                 => 'Isian ini harus merupakan UUID yang valid.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
