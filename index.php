<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Photos App</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/custom.css" />
  <link rel="stylesheet" href="assets/css/dropify.css" />
  <link rel="shortcut icon" href="favicon.ico" />
  <style type="text/css">
    .m-2 {
      margin: 10px 0px;
    }

    .dropify {
      margin-bottom: 20px;
    }

    .btn {
      color: #fff;
      background-color: while;
      color: #2F3B65;
    }

    .imgDiv span {
      padding-top: 20px;
      display: block;
    }

    .btn-danger {
      padding: 0px 8px;
      float: right;
      height: auto !important;
    }

    .alert-danger {
      color: #ff0500;
      border-color: #17476e;
      margin-top: 4px;
      margin-left: 3px;
      font-size: initial;
      /* float: right; */
      background-color: #820F14;
      color: white;
    }

    input[type=radio] {
      height: 24px !important;
      margin: 0px 6px 0px 0px;
      width: 30px;
    }

    .d-flex {
      display: flex;
    }

    .mb-2 {
      margin-bottom: 15px;
    }

    .alert-danger {}


    /* Select 2 custom css */
    .select2-container--default .select2-selection--single .select2-selection__arrow {
      height: 50px;
    }

    .select2-container--open .select2-dropdown--above,
    .select2-dropdown {
      background: black;
      color: white;
    }

    .select2-search__field {
      color: black;
    }

    .select2-container--default .select2-selection--single {
      background: rgba(0, 0, 0, 0.7);
      height: 50px;
      border-radius: 0;
      -webkit-box-shadow: none;
      -moz-box-shadow: none;
      box-shadow: none;
      border: none;
      border-left: 3px solid transparent;
      font-size: 16px;
      -o-transition: all .5s;
      -webkit-transition: all .5s;
      transition: all .5s;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
      line-height: 50px;
      color: white;
    }

    /* Select 2 custom css */
  </style>
</head>

<body style="background: #D81921 ">
  <div class="container">
    <div class="row">
      <div class="login-container col-lg-6 col-md-6 col-sm-8 col-xs-12">
        <div class="login-title text-center" style="background: #fff;padding: 30px 0px;">
          <img src="logo.jpg" height="200px" class="img-responsive" style="display: initial;" />
        </div>
        <div class="login-content">
          <div class="login-body">
            <form role="form" id="form" action="#" method="post" class="login-form">
              <div class="new">
                <div class="form-group">
                  <span>Date *</span>
                  <input type="text" id="d1" name="date" class="form-control required date">
                </div>
                <div class="form-group">
                  <span>Uploaded by </span>
                  <Select class="uploaded_by form-control select2-required" name="uploaded_by">
                    <option value="" selected disabled>--Select--</option>
                  </Select>
                </div>
                <div class="form-group">
                  <span>Supplier </span>
                  <Select class="supplier form-control select2-required" name="supplier">
                    <option value="" selected disabled>--Select--</option>
                  </Select>
                </div>
                <div class="form-group hidden supplier_other">
                  <span>Supplier Other</span>
                  <input type="text" id="supplier_other" name="supplier_other" class="form-control required">
                </div>
                <div class="form-group">
                  <span>Received by</span>
                  <Select class="received_by form-control select2-required" name="supplier">
                    <option value="" selected disabled>--Select--</option>
                  </Select>
                </div>
                <div class="form-group hidden received_other select2-required">
                  <span>Received Other</span>
                  <input type="text" id="received_other" name="received_other" class="form-control required">
                </div>
              </div>
              <div>
                <p class="mb-2">Status *</p>
                <div class="form-group d-flex">
                  <input type="radio" class="status" name="status" checked value="Ok" id="Ok">
                  <label for="Ok">Ok</label>
                </div>
                <div class="form-group d-flex">
                  <input type="radio" class="status" name="status" value="Problem" id="Problem">
                  <label for="Problem">Problem</label>
                </div>
              </div>
              <div>
                <div id="imgDiv">
                  <div class="imgDiv">
                    <span class="span-btn">Select Images <small>(maximum 5)</small></span>
                    <input type="file" class="images required" id="input-file-now" name="image_upload_2[]" data-allowed-file-extensions='["jpeg", "jpg","png","PNG","JPG","JPEG"]' multiple="true" />
                    <div class="img">
                      <input type="hidden" name="File_Data_1" class="file_data">
                      <input type="hidden" name="File_Type_1" class="file_type">
                      <input type="hidden" name="File_Name_1" class="file_name">
                      <input type="hidden" name="File_Data_2" class="file_data">
                      <input type="hidden" name="File_Type_2" class="file_type">
                      <input type="hidden" name="File_Name_2" class="file_name">
                      <input type="hidden" name="File_Data_3" class="file_data">
                      <input type="hidden" name="File_Type_3" class="file_type">
                      <input type="hidden" name="File_Name_3" class="file_name">
                      <input type="hidden" name="File_Data_4" class="file_data">
                      <input type="hidden" name="File_Type_4" class="file_type">
                      <input type="hidden" name="File_Name_4" class="file_name">
                      <input type="hidden" name="File_Data_5" class="file_data">
                      <input type="hidden" name="File_Type_5" class="file_type">
                      <input type="hidden" name="File_Name_5" class="file_name">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group m-2">
                <input type="hidden" name="address" class="address">
                <button type="submit" id="submit" class="btn btn-sucess form-control">
                  <strong id="btn">Submit</strong>
                </button>
              </div>
            </form>
          </div>
          <footer class="footer footer-static footer-light" style="padding: 6px 0px 10px 0px; text-align:center">
            <p class="clearfix mb-0" style="margin:0px"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT © 2022 <a class="ms-25" target="_blank" href="https://leanbpi.ie">LeanBpi</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span></p>
          </footer>
          <!-- end  login-body -->
        </div>
        <!-- end  login-content -->
      </div>
    </div>
  </div>
  <!-- end container -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="assets/js/dropify.js"></script>
  <script>
    var count_2 = 0;
    items_image = 1;
    var arr = [];
    $(document).ready(function() {
      // $('b[role="presentation"]').hide();
      // $('.select2-arrow').append('<i class="fa fa-angle-down"></i>');
    });
    var d = new Date();

    function addZero(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }
    $(".date").datepicker({
      autoclose: true,
      todayHighlight: true,
      format: "dd/mm/yyyy",
    });
    $("#d1").val(
      addZero(d.getDate()) +
      "/" +
      addZero(d.getMonth() + 1) +
      "/" +
      d.getFullYear()
    );
    $('[name="ref"]').val(addZero(d.getDate()) + "" + addZero(d.getMonth() + 1) + "" + d.getFullYear() + "" + addZero(d.getHours()) + "" + addZero(d.getMinutes()));
    $('[name="year"]').val(d.getFullYear());


    var dropdowns = [];
    var rows = [];
    var n = 0;

    $(document).on("change", ".supplier", function() {
      var select = $(this).find("option:selected").val();
      if (select == "Other") {
        $(".supplier_other").removeClass("hidden");
      } else {
        $(".supplier_other").addClass("hidden");
        $(".supplier_other").find("input[type=text]").val("");
      }
    });

    $(document).on("change", ".received_by", function() {
      var select = $(this).find("option:selected").val();
      if (select == "Other") {
        $(".received_other").removeClass("hidden");
      } else {
        $(".received_other").addClass("hidden");
        $(".received_other").find("input[type=text]").val("");

      }
    });

    $(document).ready(function() {
      $.get(
        "https://script.google.com/macros/s/AKfycbyZd1Z3vpsB1JXhEA2Zz98uy2tdItlK3_KOBmkUjGBrVPmWSb9u/exec",
        function(response) {
          console.log(response);
          var uploaded_by = response.uploaded_by;
          var supplier = response.supplier;
          var received_by = response.received_by;
          for (var i = 0; i < uploaded_by.length; i++) {
            $(".uploaded_by").append("<option value=" + uploaded_by[i] + ">" + uploaded_by[i] + "</option>");
          }
          for (var i = 0; i < supplier.length; i++) {
            $(".supplier").append("<option value=" + supplier[i] + ">" + supplier[i] + "</option>");
          }
          for (var i = 0; i < received_by.length; i++) {
            $(".received_by").append("<option value=" + received_by[i] + ">" + received_by[i] + "</option>");
          }
        }
      );

      $('.supplier').select2();
      $('.received_by').select2();
      $('.uploaded_by').select2();

    });



    function validate() {
      var valid = true;
      $(".alert-danger").remove();

      $(".required:visible").each(function() {
        if ($(this).val() == "" || $(this).val() === null || ($(this).attr('type') == "radio" && $('[name="' + $(this).attr('name') + '"]:checked').val() == undefined)) {
          $(this)
            .closest("div")
            .append('<div class="alert-danger">This field is required</div>');
          valid = false;
        }
      });
      $(".select2-required").each(function() {
        if ($(this).val() == "" || $(this).val() === null) {
          $(this)
            .closest("div")
            .append('<div class="alert-danger">This field is required</div>');
          valid = false;
        }
      });
      if (!valid) {
        $("html, body").animate({
            scrollTop: $(".alert-danger:first").offset().top - 80,
          },
          100
        );
      }
      return valid;
    }

    $("#form").submit(function(event) {
      event.preventDefault();
      for (var i = 0; i < arr.length; i++) {
        $('[name="File_Data_' + (i + 1) + '"]').val(arr[i][0]);
        $('[name="File_Type_' + (i + 1) + '"]').val(arr[i][1]);
        $('[name="File_Name_' + (i + 1) + '"]').val(arr[i][2]);
      }
      if (!validate())
        return false;

      $("#submit").attr("disabled", true);
      $("#btn").text("Loading...");

      $.ajax({
        type: "POST",
        url: $("#form").attr("action"),
        data: $("#form").serialize(),

        success: function(response) {
          swal({
            title: "",
            text: "Thank you for your submission",
            icon: "success",
          }).then(function() {
            window.location = window.location.href;
          });
        },
        error: function(response) {
          swal({
            title: "Error!",
            text: "Something went wrong",
            icon: "error",
          }).then(function() {
            window.location = window.location.href;
          });
        },
      });
    });
    $(document).on("change", ".images", function() {
      arr = [];
      $(".file_data").val("");
      $(".file_type").val("");
      $(".file_name").val("");
      if (this.files.length > 5) {
        swal({
          title: "Warning",
          text: "Please Select Maximum 5 Images.",
          icon: "error",
        }).then(function() {});
        return false;
      }
      //var arr =[];
      for (var i = 0; i < this.files.length; i++) {
        var file = this.files[i];
        var fr = new FileReader();
        if (typeof file.name !== "undefined") {
          fr.fileName = file.name;
          fr.onload = function(e) {
            arr.push([e.target.result.replace(/^.*,/, ""), e.target.result.match(/^.*(?=;)/)[0], e.target.fileName]);

          };
          fr.readAsDataURL(file);
        }
      }
    });
  </script>
</body>

</html>