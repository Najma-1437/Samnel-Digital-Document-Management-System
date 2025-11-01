<?php

namespace App\Policies;

use App\Models\ApprovalsWorkflow;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ApprovalsWorkflowPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ApprovalsWorkflow $approvalsWorkflow): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ApprovalsWorkflow $approvalsWorkflow): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ApprovalsWorkflow $approvalsWorkflow): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ApprovalsWorkflow $approvalsWorkflow): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ApprovalsWorkflow $approvalsWorkflow): bool
    {
        return false;
    }
}
