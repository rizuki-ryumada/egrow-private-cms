<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                asdsadd
            </div>
            <div class="card-body">
                <form action="<?= base_url('settings/saveProfile'); ?>" method="post">
                    <div class="row form-group">
                        <label class="col-sm-3" for="username">Username</label>
                        <input class="col-sm-9 form-control" type="text" name="username" id="username" placeholder="Ubah Username" value="<?= $user['username']; ?>" disabled>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-3" for="first_name">Nama Depan</label>
                        <input class="col-sm-9 form-control" type="text" name="first_name" id="first_name" placeholder="Ubah Nama Depan" value="<?= $user['first_name']; ?>">
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-3" for="last_name">Nama Belakang</label>
                        <input class="col-sm-9 form-control" type="text" name="last_name" id="last_name" placeholder="Ubah Nama Belakang" value="<?= $user['last_name']; ?>">
                    </div>
                    
                    <hr>
                    <div class="row form-group">
                        <label class="col-sm-3" for="current_password">Password</label>
                        <input class="col-sm-9 form-control" type="text" name="current_password" id="current_password" placeholder="Ketikkan password anda" required>
                    </div>
                    <hr>

                    <div class="row form-group">
                        <label class="col-sm-3" for="change_password">Ubah Password</label>
                        <input class="col-sm-9 form-control" type="text" name="change_password" id="change_password" placeholder="Ubah Password">
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-3" for="retype_password"></label>
                        <input class="col-sm-9 form-control" type="text" name="retype_password" id="retype_password" placeholder="Ketikkan ulang password baru anda">
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