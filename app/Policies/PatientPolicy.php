<?php

namespace App\Policies;

use App\Models\Patient;
use App\Models\User;

class PatientPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_patient');
    }

    public function view(User $user, Patient $patient): bool
    {
        return $user->can('view_patient');
    }

    public function create(User $user): bool
    {
        return $user->can('create_patient');
    }

    public function update(User $user, Patient $patient): bool
    {
        return $user->can('update_patient');
    }

    public function delete(User $user, Patient $patient): bool
    {
        return $user->can('delete_patient');
    }

    public function restore(User $user, Patient $patient): bool
    {
        return $user->can('restore_patient');
    }

    public function forceDelete(User $user, Patient $patient): bool
    {
        return $user->can('force_delete_patient');
    }
}
