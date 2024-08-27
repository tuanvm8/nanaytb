@extends('user.main')
@section('templateContent')
<main class="mb-5">
    <div class="head_page">
        <div class="container">

            <ol vocab="https://schema.org/" typeof="BreadcrumbList" class="breadcrumb">
                <li property="itemListElement" typeof="ListItem" class="breadcrumb-item">
                    <a property="item" typeof="WebPage" href="index.html">
                        <span property="name">Trang chủ</span></a>
                    <meta property="position" content="1">
                </li>

                <li property="itemListElement" typeof="ListItem" class="breadcrumb-item active">
                    <a property="item" typeof="WebPage" href="chinh-sach.html">
                        <span property="name">Chính sách</span></a>
                    <meta property="position" content="2">
                </li>
            </ol>
        </div>
    </div>

    <div class="container">

        <a href="https://www.youtube.com/channel/UCsvPoLoYkfrkEXXBVUZCyeQ?sub_confirmation=1" data-fancybox
            data-type="iframe">Defaults</a>

        <script src="../cdn.jsdelivr.net/npm/%40fancyapps/ui%405.0/dist/fancybox/fancybox.umd.js"></script>
        <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/%40fancyapps/ui%405.0/dist/fancybox/fancybox.css" />
        <script>
            Fancybox.bind("[data-fancybox]", {
                // Your custom options
            });
        </script>
        <div class="row g-3 row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-6" id="result">
        </div>
    </div>
    <script src="templates/js/jquery.twbsPagination.js"></script>
</main>

@endsection