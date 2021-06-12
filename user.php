<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: index.php');
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Người dùng
    </title>
    <!-- JQUERY -->
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <!---->
    <link rel="shortcut icon" href="/img/logo-mb.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <!--ICON TITLE-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <a href="index.html">
            <!-- <img src="./img/logo-lg.png" alt="Comapny logo"> -->
            <img src="img/logo-charity-fund.png" style="height: 55px; width: auto;" alt="">
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <img src="./img/avt-huy.jpg" alt="User picture" class="profile-image">
                <div class="sidebar-user-name">
                <?php
                $username = $_SESSION['username'];
                $conn =mysqli_connect("localhost:3306","root","117006lan","bwd") or die("Không thể kết nối đến database");
                $sql = "select name from users where username = '$username' ";
                $result = mysqli_query($conn, $sql);
                // $row = mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) > 0) {
                    // hiển thị dữ liệu trên trang
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "" . $row["name"]. "<br>";
                    }
                } else {
                    echo "Bị lỗi";
                }
            ?>
            <span>Đóng góp vàng <i class="bi bi-star-fill rank-user-gold"></i></span>
                </div>
            </div> 
            <button class="btn btn-outline" >
                <a href="index.html">
                    <i class='bx bx-log-out bx-flip-horizontal'></i>
                </a>
               
            </button>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li>
                <a href="user.html" class="active">
                    <i class='bx bx-home'></i>
                    <span>giao diện người dùng</span>
                </a>
            </li>
            <li data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                <a href="#">
                    <i class='bx bx-shopping-bag'></i>
                    <span>Sản phẩm</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category'></i>
                    <span>Dự án gây quỹ</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="">
                            Danh sách
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#add-duan">
                            Đề xuất dự án
                        </a>
                    </li>
                </ul>
            </li>
            <!-- <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category'></i>
                    <span>e-commerce</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#">
                            list product
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            add product
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            orders
                        </a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href="#">
                    <i class='bx bx-mail-send'></i>
                    <span>Email</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span>Tin nhắn</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-calendar'></i>
                    <span>Lịch</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-cog'></i>
                    <span>Cài đặt</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#" class="darkmode-toggle" id="darkmode-toggle">
                            Phiên bản tối
                            <span class="darkmode-switch"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->

    <!-- MAIN CONTENT -->
    <div class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                    Thông tin người dùng
            </div>
        </div>
        <div class="main-content">

            <div class="row content-2">
                <div class="col-5 col-md-12 col-sm-12">
                    <!-- CUSTOMERS CHART -->
                </div>
                <div class="col-12">
                    <!-- ORDERS TABLE -->
                    <div class="box">
                        <div class="box-header" style="display: flex;justify-content: space-between;">
                            <div class="">Ủng hộ của bạn</div>
                            <div class="">Tổng tiền bạn đã ủng hộ <strong style="color: #17a2b8">1.500.000.000đ</strong></div>
                        </div>
                        <div class="box-body overflow-scroll">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên Chiến Dịch</th>
                                        <th>Ngày</th>
                                        <th>Trạng thái</th>
                                        <th>Tổng cộng</th>
                                        <th>Tiến độ </th>
                                        <th>Chiến dịch</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <span>	
                                                    Gây Dựng Quỹ Dựng Trường Mới Bản Huổi Chua</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-ready">
                                                Sẵn sàng
                                            </span>
                                        </td>
                                        <td>234.000.000đ</td>
                                        <td>49%</td>
                                        <td>
                                            <a href="charity-1.html" class="btn-info btn">Xem thêm</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#2346</td>
                                        <td>
                                            <div class="order-owner">
                                                <span>Chung Tay Gây Quỹ Phẫu Thuật Cho 25 Em Bé Hở Môi</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Đã xác nhận
                                            </span>
                                        </td>
                                        <td>100.000.000đ</td>
                                        <td>40%</td>
                                        <td>
                                            <a href="charity-1.html" class="btn-info btn">Xem thêm</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#2347</td>
                                        <td>
                                            <div class="order-owner">
                                                <span>	
                                                    Quỹ Tặng Đồ Bảo Hộ Chống Covid-19</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Đã xác nhận
                                            </span>
                                        </td>
                                        <td>100.000.000đ</td>
                                        <td>90%</td>
                                        <td>
                                            <a href="charity-1.html" class="btn-info btn">Xem thêm</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#2348</td>
                                        <td>
                                            <div class="order-owner">
                                                <span>	
                                                    Ủng Hộ Gia Đình Của Tâm Gương Tuổi Trẻ Anh Dũng Cứu Bạn Đuối Nước</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Đã xác nhận
                                            </span>
                                        </td>
                                        <td>100.000.000đ</td>
                                        <td>90%</td>
                                        <td>
                                            <a href="charity-1.html" class="btn-info btn">Xem thêm</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#2349</td>
                                        <td>
                                            <div class="order-owner">
                                                <span>Chung Tay Gây Quỹ Phòng, Chống Dịch Covid-19 Tại Đà Nẵng</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Đã xác nhận
                                            </span>
                                        </td>
                                        <td>100.000.000đ</td>
                                        <td>90%</td>
                                        <td>
                                            <a href="charity-1.html" class="btn-info btn">Xem thêm</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                                
                        </div>
                    </div>
                    <!-- END ORDERS TABLE -->
                </div>
            </div>
        </div>
        
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- APP JS -->
    <script src="./js/app.js"></script>


    <!--MODAL DỰ ÁN-->
    <div class="modal fade"  id="add-duan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable " role="document">
          <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" id="myModalLabel">Đề xuất dự án gây quỹ</strong>
              <button type="button" class="close" id="off" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form >
                    <div class="form-group">
                        <label>Loại Chương Trình</label>
                        <select class="form-control" name="exampleFormControlSelect1"
                            id="exampleFormControlSelect1">
                            <option  value="1">...</option>
                            <option  value="2">Covid-19</option>
                            <option   value="3">Bão lũ</option>
                            <option  value="4">Khiếm khuyết</option>
                            <option  value="4">Khó Khăn</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="form_name validationDefault01">Tên Chương Trình</label>
                        <input id="form_name validationDefault01" type="text" name="name" class="form-control"  >
                        <!-- <div class="help-block with-errors"></div> -->
                    </div>
                    <div class="form-group">
                        <label for="form_message">Nội Dung</label>
                        <textarea id="form_message" name="message" class="form-control" rows="4" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Số Tiền Kêu Gọi</label>
                        <input type="text" class="form-control" name="currency-field" id="currency-field"  value=""
                            data-type="currency" >
                    </div>
                    <div>
                        <label>Upload File</label> <br>
                        <input type="file"  id="files" name="files" multiple>
                    </div>
                    
                    <div class=" container js-file-list ">

                    </div>
                </form>
                    
            </div>
            <div class="modal-footer">
              <button class="btn btn-success" id="btnsubmit">Gửi thông tin</button>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--MODAL SUCCESS-->
    <div id="Success" class="modal fade" role="dialog" data-backdrop="false">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                     <p> <i class="bi bi-check-circle-fill"></i> Gửi thông tin thành công.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning confirmclosed">Thoát</button>
                    <button type="button" class="btn btn-success continue">Tiếp Tục</button>
                </div>
            </div>
        </div>
    </div>
    <!--upload img-->

    <script>
$(document).ready(function(){
  $('#files').on('change', function() {
    var files = $(this)[0].files;

    for(var i = 0; i < files.length; i++) {
      var file = files[i];
      var fileReader = new FileReader();
      fileReader.onload = (function(fileParams) {
        return function(event) {
          var str = '<div class="col-4">' +
            '<span class="js-file-name"></span><br>' +
            '<span class="js-file-size"></span> (Byte)<br>' +
            '<img class="img-thumbnail js-file-image" style="width: 100%; height: 100%">' +
          '</div>';
          $('.js-file-list').append(str);

          var imageSrc = event.target.result;
          var fileName = fileParams.name;
          var fileSize = fileParams.size;

          $('.js-file-name').last().text(fileName);
          $('.js-file-size').last().text(fileSize);
          $('.js-file-image').last().attr('src', imageSrc);
        };
      })(file);  
      fileReader.readAsDataURL(file);
    }  
  });
});
    </script>
    <!---->

        <script>
        $(document).ready(function () {
	    $('#btnsubmit').click(function () {
	        $('#Success').modal('show');
	    });

	    $('.confirmclosed').click(function () {
	        $('#Success').modal('hide');
	        $('#add-duan').modal('hide');
	    });
        $('.continue').click(function(){
            $('#Success').modal('hide');
        });
	});
    </script>

 <!--Currency-->
    <script>
        $("input[data-type='currency']").on({
            keyup: function () {
                formatCurrency($(this));
            },
            blur: function () {
                formatCurrency($(this), "blur");
            }
        });


        function formatNumber(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }


        function formatCurrency(input, blur) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.

            // get input value
            var input_val = input.val();

            // don't validate empty input
            if (input_val === "") { return; }

            // original length
            var original_len = input_val.length;

            // initial caret position 
            var caret_pos = input.prop("selectionStart");

            // check for decimal
            if (input_val.indexOf(".") >= 0) {

                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);

                // On blur make sure 2 numbers after decimal
                if (blur === "blur") {
                    right_side;
                }

                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);

                // join number by .
                input_val = left_side + "." + right_side;

            } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                input_val = input_val;

                // final formatting
                if (blur === "blur") {
                    input_val;
                }
            }

            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
        }
    </script>


    

</body>

</html>