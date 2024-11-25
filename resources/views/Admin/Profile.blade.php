@section('title', 'Perusahaan | Data Pengguna')
@include('Layouts.header')
<!-- Begin page -->
<div class="wrapper">
    @include('Layouts.topBar')
    @include('Layouts.leftSidebar')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @section('namaPage1', 'Pengguna')
                @section('namaPage2', 'Michael A. Franklin')
                @include('Layouts.breadcrumb')

                <!-- Start profile -->
                <!-- start page title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="profile-bg-picture"
                            style="background-image:url('assets/images/users/bg-profile.jpg')">
                            <span class="picture-bg-overlay"></span>
                            <!-- overlay -->
                        </div>
                        <!-- meta -->
                        <div class="profile-user-box">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="profile-user-img"><img src="{{asset('assets')}}/images/users/avatar-2.jpg" alt=""
                                            class="avatar-lg rounded-circle"></div>
                                    <div class="">
                                        <h4 class="mt-4 fs-17 ellipsis">{{ Auth::guard('admin')->user()->nama }}</h4>
                                        <p class="font-13"> User Experience Specialist</p>
                                        <p class="text-muted mb-0"><small>California, United States</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex justify-content-end align-items-center gap-2">
                                        <button type="button" class="btn btn-soft-danger">
                                            <i class="ri-settings-2-line align-text-bottom me-1 fs-16 lh-1"></i>
                                            Edit Profile
                                        </button>
                                        <a class="btn btn-soft-info" href="#"> <i class="ri-check-double-fill fs-18 me-1 lh-1"></i> Following</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ meta -->
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card p-0">
                            <div class="card-body p-0">
                                <div class="profile-content">
                                    <ul class="nav nav-underline nav-justified gap-0">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#aboutme" type="button" role="tab"
                                                aria-controls="home" aria-selected="true" href="#aboutme">Tentang Saya</a>
                                        </li>

                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                data-bs-target="#edit-profile" type="button" role="tab"
                                                aria-controls="home" aria-selected="true"
                                                href="#edit-profile">pengaturan</a></li>

                                    </ul>

                                    <div class="tab-content m-0 p-4">
                                        <div class="tab-pane active" id="aboutme" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">
                                            <div class="profile-desk">
                                                <h5 class="text-uppercase fs-17 text-dark">Johnathan Deo</h5>
                                                <div class="designation mb-4">PRODUCT DESIGNER (UX / UI / Visual
                                                    Interaction)</div>
                                                <p class="text-muted fs-16">
                                                    Pernah pake figma 10 tahun (intinya mendeskripsikan sedikit tentang dirinya, kayak linkedin)
                                                </p>

                                                <h5 class="mt-4 fs-17 text-dark">Informasi Kontak</h5>
                                                <table class="table table-condensed mb-0 border-top">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Ussername</th>
                                                            <td>
                                                                <a href="#" class="ng-binding">
                                                                    michaelaja
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Email</th>
                                                            <td>
                                                                <a href="" class="ng-binding">
                                                                    jonathandeo@example.com
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Minat Pekerjaan</th>
                                                            <td class="ng-binding">Fotografer</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div> <!-- end profile-desk -->
                                        </div> <!-- about-me -->


                                        <!-- settings -->
                                        <div id="edit-profile" class="tab-pane">
                                            <div class="user-profile-content">
                                                <form>
                                                    <div class="row row-cols-sm-2 row-cols-1">
                                                        <div class="mb-2">
                                                            <label class="form-label" for="FullName">Nama Lengkap</label>
                                                            <input type="text" value="John Doe" id="FullName"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="Email">Email</label>
                                                            <input type="email" value="first.last@example.com"
                                                                id="Email" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="web-url">Minat Pekerjaan</label>
                                                            <input type="text" value="fotografer"
                                                                id="mp" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="Username">Username</label>
                                                            <input type="text" value="john" id="Username"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="Password">Kata Sandi</label>
                                                            <input type="password" placeholder="6 - 15 Characters"
                                                                id="Password" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="RePassword">Konfirmasi Kata Sandi</label>
                                                            <input type="password" placeholder="6 - 15 Characters"
                                                                id="RePassword" class="form-control">
                                                        </div>
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label" for="AboutMe">Tentang Saya / Bio</label>
                                                            <textarea style="height: 125px;" id="AboutMe"
                                                                class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit"><i
                                                            class="ri-save-line me-1 fs-16 lh-1"></i> Simpan Perubahan</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->




                <!-- End profile -->
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        @include('Layouts.footer')
    </div>
</div>
<!-- END wrapper -->