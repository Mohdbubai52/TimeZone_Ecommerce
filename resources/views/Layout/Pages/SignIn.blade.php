@extends('Layout.App')
@section('Section')
<main>


    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Registration</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Already Customer?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="login" class="btn_3">LogInt</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome! <br>
                                Please Register now</h3>

                                {{-- Form Start Here --}}
                            <form class="row contact_form" action="signin" method="post" >
                                @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value
                                        placeholder="Username" >
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="mail" name="mail" 
                                        placeholder="Email" onblur="checkemail(this,'EmailError') ">
                                        <span id="span" class="span">*Invailade Email</span>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value
                                        placeholder="Password" onblur="passlen(this)">
                                        <span id="lspan" class="lspan">*Password contain atleast 8 characters</span>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="Cpassword" name="Cpassword" value
                                        placeholder="Confirm Password" onblur="checkpassword(this)">
                                        <span id="pspan" class="pspan">*Confirm Passeord is not same</span>
                                </div>
                                <div class="col-md-12 form-group">
                                   
                                    <button type="submit" value="submit" class="btn_3">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

</main>
<style>

    .span{
        font-size:12px;
        color: rgb(219, 62, 62);
        padding-left: 16px;
        display: none
         }
    .pspan{
        font-size:12px;
        color: rgb(219, 62, 62);
        padding-left: 16px;
        display: none
         }
    .lspan{
        font-size:12px;
        color: rgb(219, 62, 62);
        padding-left: 16px;
        display: none
         }
</style>
@endsection