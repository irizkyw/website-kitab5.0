<section class="sidebar">  
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasRightLabel">Account Setting</h2>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama" value="{{session()->get('user.name')}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email" value="{{session()->get('user.email')}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan password" value="{{session()->get('user.password')}}" readonly>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary buttonLgn" id="saveBtn" style="display: none;">Simpan</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <button class="btn btn-secondary buttonLgn justify-content-center" id="editBtn">Edit</button>
                <button class="btn btn-secondary buttonLgn justify-content-center mx-2" style="background-color: #FF204E;" id="logoutBtn">Logout</button>
            </div>
        </div>
    </section>