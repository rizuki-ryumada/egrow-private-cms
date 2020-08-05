<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <?php if(!empty(validation_errors())): ?>
                    <div class="row form-group">
                        <div class="col">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-bug"></i> Error!</h5>
                                <?= validation_errors(); ?>
                            </div>
                        </div>
                    </div>
                <?php elseif(!empty($this->session->userdata('profile_msg'))): ?>
                    <div class="row form-group">
                        <div class="col">
                            <div class="alert alert-<?= $this->session->userdata('profile_msg')['type']; ?> alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-exclamation"></i> <?= $this->session->userdata('profile_msg')['title']; ?></h5>
                                <?= $this->session->userdata('profile_msg')['msg']; ?>
                            </div>
                        </div>
                    </div>
                    <?php $this->session->unset_userdata('profile_msg'); ?>
                <?php endif; ?>
                <form id="profileForm" action="<?= base_url('settings/profile'); ?>" method="post">
                    <div class="row form-group">
                        <label class="col-sm-3" for="username">Username</label>
                        <input class="col-sm-9 form-control" type="text" name="username" id="username" placeholder="Ubah Username" value="<?php if(!empty(set_value('username'))){echo(set_value('username'));}else{echo($user['username']);} ?>">
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-3" for="first_name">Nama Depan</label>
                        <input class="col-sm-9 form-control" type="text" name="first_name" id="first_name" placeholder="Ubah Nama Depan" value="<?php if(!empty(set_value('first_name'))){echo(set_value('first_name'));}else{echo($user['first_name']);} ?>">
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-3" for="last_name">Nama Belakang</label>
                        <input class="col-sm-9 form-control" type="text" name="last_name" id="last_name" placeholder="Ubah Nama Belakang" value="<?php if(!empty(set_value('last_name'))){echo(set_value('last_name'));}else{echo($user['last_name']);} ?>">
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-3" for="email">Email</label>
                        <input class="col-sm-9 form-control" type="email" name="email" id="email" placeholder="Ubah Email anda" value="<?php if(!empty(set_value('email'))){echo(set_value('email'));}else{echo($user['email']);} ?>">
                    </div>
                    
                    <hr>
                    <div class="row form-group">
                        <label class="col-sm-3" for="current_password">Password</label>
                        <input class="col-sm-9 form-control" type="password" name="current_password" id="current_password" placeholder="Ketikkan password anda">
                    </div>
                    <hr>

                    <div class="row form-group">
                        <label class="col-sm-3" for="change_password">Ubah Password</label>
                        <input class="col-sm-9 form-control" type="password" name="change_password" id="change_password" placeholder="Ubah Password">
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-3" for="retype_password"></label>
                        <input class="col-sm-9 form-control" type="password" name="retype_password" id="retype_password" placeholder="Ketikkan ulang password baru anda">
                    </div>
                    <div class="row justify-content-end form-group">
                        <div class="col-3 text-right pr-0">
                            <div class="btn-group">
                                <button type="reset" class="btn btn-danger"><i class="fa fa-sync"></i> Reset</button>
                                <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>