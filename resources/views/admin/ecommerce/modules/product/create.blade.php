<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('public/admin/ecommerce')}}/assets/images/favicon.ico">
        <!-- App title -->
        <title>Zircos - Responsive Admin Dashboard Template</title>

        <!-- App css -->
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::to('public/admin/ecommerce')}}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{URL::to('public/admin/ecommerce')}}/plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
             @include('admin.ecommerce.include.navbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
             @include('admin.ecommerce.include.left-sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Form Validation </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Zircos</a>
                                        </li>
                                        <li>
                                            <a href="#">Forms </a>
                                        </li>
                                        <li class="active">
                                            Form Validation
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card-box">

                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 col-md-6">

                                            <h4 class="header-title m-t-0">Basic Form</h4>
                                            <p class="text-muted font-13 m-b-10">
                                                Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                            </p>

                                            <div class="p-20">
                                                <form action="#" data-parsley-validate novalidate>
                                                    <div class="form-group">
                                                        <label for="userName">User Name<span class="text-danger">*</span></label>
                                                        <input type="text" name="nick" parsley-trigger="change" required
                                                               placeholder="Enter user name" class="form-control" id="userName">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                                        <input type="email" name="email" parsley-trigger="change" required
                                                               placeholder="Enter email" class="form-control" id="emailAddress">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pass1">Password<span class="text-danger">*</span></label>
                                                        <input id="pass1" type="password" placeholder="Password" required
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                                        <input data-parsley-equalto="#pass1" type="password" required
                                                               placeholder="Password" class="form-control" id="passWord2">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <input id="remember-1" type="checkbox">
                                                            <label for="remember-1"> Remember me </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group text-right m-b-0">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-xs-12 col-md-6">
                                            <h4 class="header-title m-t-0">Horizontal Form</h4>
                                            <p class="text-muted font-13 m-b-10">
                                                Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                            </p>

                                            <div class="p-20">
                                                <form data-parsley-validate novalidate>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 form-control-label">Email<span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input type="email" required parsley-type="email" class="form-control"
                                                                   id="inputEmail3" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="hori-pass1" class="col-sm-4 form-control-label">Password<span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input id="hori-pass1" type="password" placeholder="Password" required
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="hori-pass2" class="col-sm-4 form-control-label">Confirm Password
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input data-parsley-equalto="#hori-pass1" type="password" required
                                                                   placeholder="Password" class="form-control" id="hori-pass2">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="webSite" class="col-sm-4 form-control-label">Web Site<span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input type="url" required parsley-type="url" class="form-control"
                                                                   id="webSite" placeholder="URL">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-8 col-sm-offset-4">
                                                            <div class="checkbox">
                                                                <input id="remember-2" type="checkbox">
                                                                <label for="remember-2"> Remember me </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-8 col-sm-offset-4">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Register
                                                            </button>
                                                            <button type="reset"
                                                                    class="btn btn-default waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row m-t-50">
                                        <div class="col-sm-6 col-xs-12 m-t-20">
                                            <h4 class="header-title m-t-0">Validation type</h4>
                                            <p class="text-muted font-13 m-b-10">
                                                Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                            </p>

                                            <div class="p-20">
                                                <form class="form-horizontal " action="#">
                                                    <div class="form-group">
                                                        <label>Required</label>
                                                        <input type="text" class="form-control" required
                                                                   placeholder="Type something"/>
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Equal To</label>
                                                        <div>
                                                            <input type="password" id="pass2" class="form-control" required
                                                                   placeholder="Password"/>
                                                        </div>
                                                        <div class="m-t-10">
                                                            <input type="password" class="form-control" required
                                                                   data-parsley-equalto="#pass2"
                                                                   placeholder="Re-Type Password"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>E-Mail</label>
                                                        <div>
                                                            <input type="email" class="form-control" required
                                                                   parsley-type="email" placeholder="Enter a valid e-mail"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>URL</label>
                                                        <div>
                                                            <input parsley-type="url" type="url" class="form-control"
                                                                   required placeholder="URL"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Digits</label>
                                                        <div>
                                                            <input data-parsley-type="digits" type="text"
                                                                   class="form-control" required
                                                                   placeholder="Enter only digits"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Number</label>
                                                        <div>
                                                            <input data-parsley-type="number" type="text"
                                                                   class="form-control" required
                                                                   placeholder="Enter only numbers"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alphanumeric</label>
                                                        <div>
                                                            <input data-parsley-type="alphanum" type="text"
                                                                   class="form-control" required
                                                                   placeholder="Enter alphanumeric value"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Textarea</label>
                                                        <div>
                                                            <textarea required class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Submit
                                                            </button>
                                                            <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                        <div class="col-sm-6 col-xs-12 m-t-20">
                                            <h4 class="header-title m-t-0">Range validation</h4>
                                            <p class="text-muted font-13 m-b-10">
                                                Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                            </p>

                                            <div class="p-20">
                                                <form action="#">

                                                    <div class="form-group">
                                                        <label>Min Length</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-minlength="6" placeholder="Min 6 chars."/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Max Length</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Range Length</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-length="[5,10]"
                                                                   placeholder="Text between 5 - 10 chars length"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Min Value</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-min="6" placeholder="Min value is 6"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Max Value</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-max="6" placeholder="Max value is 6"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Range Value</label>
                                                        <div>
                                                            <input class="form-control" required type="text range" min="6"
                                                                   max="100" placeholder="Number between 6 - 100"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Regular Exp</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                                                   placeholder="Hex. Color"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Min check</label>
                                                        <div>
                                                            <div class="checkbox checkbox-custom">
                                                                <input id="checkbox1" type="checkbox"
                                                                       data-parsley-multiple="groups"
                                                                       data-parsley-mincheck="2">
                                                                <label for="checkbox1"> And this </label>
                                                            </div>
                                                            <div class="checkbox checkbox-pink">
                                                                <input id="checkbox2" type="checkbox"
                                                                       data-parsley-multiple="groups"
                                                                       data-parsley-mincheck="2">
                                                                <label for="checkbox2"> Can't check this </label>
                                                            </div>
                                                            <div class="checkbox checkbox-success">
                                                                <input id="checkbox3" type="checkbox"
                                                                       data-parsley-multiple="groups"
                                                                       data-parsley-mincheck="2" required>
                                                                <label for="checkbox3"> This too </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Max check</label>
                                                        <div>
                                                            <div class="checkbox checkbox-pink">
                                                                <input id="checkbox4" type="checkbox"
                                                                       data-parsley-multiple="group1">
                                                                <label for="checkbox4"> And this </label>
                                                            </div>
                                                            <div class="checkbox checkbox-primary">
                                                                <input id="checkbox5" type="checkbox"
                                                                       data-parsley-multiple="group1">
                                                                <label for="checkbox5"> Can't check this </label>
                                                            </div>
                                                            <div class="checkbox checkbox-success">
                                                                <input id="checkbox6" type="checkbox"
                                                                       data-parsley-multiple="group1"
                                                                       data-parsley-maxcheck="1">
                                                                <label for="checkbox6"> This too </label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group m-b-0">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Submit
                                                            </button>
                                                            <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- end row -->


                                    <div class="row m-t-50">
                                        <div class="col-sm-12">
                                            <h4 class="header-title m-t-0">Parsley Examples</h4>
                                            <p class="text-muted font-13 m-b-10">
                                                Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                            </p>

                                            <div class="alert alert-warning hidden fade in">
                                                <h4>Oh snap!</h4>
                                                <p>This form seems to be invalid :(</p>
                                            </div>

                                            <div class="alert alert-info hidden fade in">
                                                <h4>Yay!</h4>
                                                <p>Everything seems to be ok :)</p>
                                            </div>

                                            <form id="demo-form" data-parsley-validate="">
                                                <div class="form-group">
                                                    <label for="fullname">Full Name * :</label>
                                                    <input type="text" class="form-control" name="fullname" id="fullname" required="">
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">Email * :</label>
                                                    <input type="email" id="email" class="form-control" name="email"
                                                           data-parsley-trigger="change" required="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Gender *:</label>

                                                    <div class="radio">
                                                        <input type="radio" name="gender" id="genderM" value="Male" required="">
                                                        <label for="genderM">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" name="gender" id="genderF" value="Female">
                                                        <label for="genderF">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Hobbies (Optional, but 2 minimum):</label>

                                                    <div class="checkbox checkbox-pink">
                                                        <input type="checkbox" name="hobbies[]" id="hobby1"
                                                                      value="ski" data-parsley-mincheck="2">
                                                        <label for="hobby1"> Skiing </label>
                                                    </div>
                                                    <div class="checkbox checkbox-pink">
                                                        <input type="checkbox" name="hobbies[]" id="hobby2"
                                                                       value="run">
                                                        <label for="hobby2"> Running </label>
                                                    </div>
                                                    <div class="checkbox checkbox-pink">
                                                        <input type="checkbox" name="hobbies[]" id="hobby3"
                                                                      value="eat">
                                                        <label for="hobby3"> Eating </label>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label for="heard">Heard about us via *:</label>
                                                    <select id="heard" class="form-control" required="">
                                                        <option value="">Choose..</option>
                                                        <option value="press">Press</option>
                                                        <option value="net">Internet</option>
                                                        <option value="mouth">Word of mouth</option>
                                                        <option value="other">Other..</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="message">Message (20 chars min, 100 max) :</label>
                                                    <textarea id="message" class="form-control" name="message"
                                                              data-parsley-trigger="keyup" data-parsley-minlength="20"
                                                              data-parsley-maxlength="100"
                                                              data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.."
                                                              data-parsley-validation-threshold="10"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-success" value="validate">
                                                </div>

                                            </form>
                                        </div>
                                    </div>

                        		</div> <!-- end ard-box -->
                            </div><!-- end col-->

                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                @include('admin.ecommerce.include.footer')

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/detect.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/fastclick.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.blockUI.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/waves.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.scrollTo.min.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/plugins/switchery/switchery.min.js"></script>

        <script type="text/javascript" src="{{URL::to('public/admin/ecommerce')}}/plugins/parsleyjs/parsley.min.js"></script>

        <!-- App js -->
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.core.js"></script>
        <script src="{{URL::to('public/admin/ecommerce')}}/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
            $(function () {
                $('#demo-form').parsley().on('field:validated', function () {
                    var ok = $('.parsley-error').length === 0;
                    $('.alert-info').toggleClass('hidden', !ok);
                    $('.alert-warning').toggleClass('hidden', ok);
                })
                .on('form:submit', function () {
                    return false; // Don't submit form for this demo
                });
            });
		</script>

    </body>

<!-- Mirrored from coderthemes.com/zircos/material-design/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 19:45:51 GMT -->
</html>