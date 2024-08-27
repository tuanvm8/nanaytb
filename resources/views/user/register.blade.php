@extends('user.main')
@section('templateContent')
<main class="mb-5">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-2">
                <div class="box-login" style="box-shadow: 1px 1px 10px 1px #cccc;border-radius: 30px;">
                    <div class=" text-center">
                        <img src="img_data/images/image-login.png" alt=""
                            style="height: 180px;object-fit: contain;margin-bottom: 30px;" />
                    </div>
                    <h1 class="title">Đăng ký tài khoản</h1>
                    <p class="des">Thông tin đăng ký sẽ được xác nhận trước khi hoạt động</p>
                    <form method="post" action id="form-dangky">
                        <input type="hidden" value="799e879e227ea4deccaf031bf8148aadfe019455" name="_token" />
                        <div class="mb-3">
                            <label class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" required="" name="ho_ten"
                                placeholder="Nhập họ tên">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" required="" name="email"
                                placeholder="Nhập email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Điện thoại</label>
                            <input type="text" class="form-control" required="" name="dien_thoai"
                                placeholder="Nhập số điện thoại">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mật khẩu</label>
                            <input required="" class="form-control" type="password" id="matkhau" name="mat_khau"
                                placeholder="Nhập mật khẩu">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Xác nhận mật khẩu</label>
                            <input required="" class="form-control" type="password" name="mat_khau2"
                                placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="mb-3 text-center ">
                            <button type="submit" class="btn btn-main" name="dang-ky">Đăng ký</button>
                        </div>
                        <p class="font-xs text-muted text-center">Đã đăng ký tài khoản trước đó <a
                                href="dang-nhap.html">Đăng nhập</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"
        src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
            $("#form-dangky").validate({
                rules: {
                    ho_ten: "required",
                    xacnhan: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    mat_khau: {
                        required: true,
                        minlength: 6,
                    },
                    mat_khau2: {
                        required: true,
                        minlength: 6,
                        equalTo: "#matkhau"
                    }
                },
                messages: {
                    ho_ten: "Vui lòng nhập họ tên",
                    xacnhan: "Vui lòng xác nhận đồng ý với các điều khoản",
                    email: {
                        required: "Vui lòng nhập email",
                        email: "Vui lòng nhập đúng định dạng mail"
                    },
                    mat_khau: {
                        required: "Vui lòng nhập mật khẩu",
                        minlength: 'Mật khẩu tối thiểu 6 ký tự'
                    },
                    mat_khau2: {
                        required: 'Vui lòng xác nhận lại mật khẩu',
                        minlength: 'Mật khẩu tối thiểu 6 ký tự',
                        equalTo: "Nhập lại mật khẩu không đúng"
                    }
                }
            });
        });
    </script>
</main>

@endsection