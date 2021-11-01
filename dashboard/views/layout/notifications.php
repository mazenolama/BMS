<li class="dropdown dropdown-list-toggle">
    <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
        <span class="badge headerBadge1" id="count"> <?= count($fetch_notify) ?></span> 
    </a>

    <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
        <div class="dropdown-header" style="display: flex;justify-content: space-between;"> Notifications
        <?php if(count($fetch_notify)>0): ?>
           <form method="post">
                <input name="flush" value="Mark All As Read" type="submit" style="border-style: none;background: transparent;color: #0000bf;font-weight: 600;">
           </form>
        <?php endif; ?>
        </div>
        <div class="dropdown-list-content dropdown-list-message">
            <?php 
            if(count($fetch_notify)>0){
                foreach($fetch_notify as $fetch) {?>
            <div class="dropdown-item"> 
                <span class="dropdown-item-desc"> 
                    <span class="message-user"><?= $fetch['userName'];?></span>
                    <span class="time messege-text"><?= $fetch['notify']; ?></span>
                    <span class="time"><?= time_elapsed_string($fetch['created_at'],true);?></span>
                </span>
            </div>
            <?php }  
            }else {?>
                <div style="text-align: center;"> 
                    <?=  $errors['notifications']; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</li>