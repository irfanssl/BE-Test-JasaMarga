<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithValidation, WithHeadingRow
{

    use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'fullname' => $row['nama'],
            'username' => $row['username'], 
            'password' => Hash::make($row['password']),
            'created_by' => auth()->user()->id,
            'updated_by' => auth()->user()->id
        ]);
    }

    public function rules(): array
    {
        return [
            'nama' => ['required'],
            'username' => ['required', 'unique:user'],
            'password' => ['required']
        ];
    }
}

