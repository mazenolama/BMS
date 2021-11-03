<?php if($user_info['role']=='Standrad'): ?>

    <div class="form-group col-md-6">
        <label class="label-title">Role : </label>
        <select class="form-control selectric" name="role" required>
            <option selected="selected"><?= $user_info['role']?></option>
        </select>
    </div>

    <div class="form-group col-md-6">
        <label class="label-title">User Status :</label>
        <select class="form-control selectric" name="curr_status" required>
            <option  selected="selected"><?= $user_info['curr_status']?></option>
        </select>
    </div>

<? endif; ?>