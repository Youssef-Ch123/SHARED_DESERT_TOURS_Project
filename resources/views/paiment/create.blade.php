@extends('LayoutAgency')
@section('user')
{{ Auth::user()->name }}
@endsection
@section('profile')
<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><img class="kt-header__topbar-icon" alt="Pic" src="{{ Auth::user()->image }}" /></span>
@endsection
@section('title')
    <span class="kt-portlet__head-icon">
            <div class="mr-4 flex-shrink-0 text-center" style="width: 50px;">
                    <img src="{{url('assets/media/icons/svg/Shopping/Credit-card.svg')}}" width="50px"/>
                </div>
    </span>
    <h3 style="margin-left: 10px;">
            payment settings
    </h3>

    @if (session('status'))
        <h6 class="alert-success">{{session('status')}}</h6>
    @endif
@endsection

@section('content')

<br>
<div class="container" style="padding-top: 5%">
    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">
        <!--begin: Form Wizard Form-->
    <form action="{{ route('Paiement.store') }}" enctype="multipart/form-data" method="POST" class="kt-form" id="kt_form" novalidate="novalidate">
            @csrf

            <!--begin: Form Wizard Step 5-->
            <div class="from-group row">
                <div class="col-xl-6">
                    <input type="radio" name="Payment" id="cb" value="Creadit card" class="btn radio-primary" checked/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="cb">Creadit card &nbsp;&nbsp;&nbsp; 
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2"/>
                                    <rect fill="#000000" x="2" y="8" width="20" height="3"/>
                                    <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1"/>
                                </g>
                            </svg>
                            

                    </label>
                </div>
            </div>
<br>
            <div class="from-group row">
                    
                    <div class="kt-demo-icon col-xl-6">
                            <input type="radio" name="Payment" id="pay" value="Paypal" class="btn radio-primary"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="pay">Paypal &nbsp;&nbsp;&nbsp;</label>
                            <div class="kt-demo-icon__preview">
                                <i class="la la-cc-paypal"></i>
                            </div>
                        </div>
            </div>

            <script>
                document.getElementsByName("Payment")[0].addEventListener("click",function(){
                    document.getElementById("Card").style.display="block";
                    document.getElementById("paypal").style.display="none";
                });
                document.getElementsByName("Payment")[1].addEventListener("click",function(){
                    document.getElementById("paypal").style.display="block";
                    document.getElementById("Card").style.display="none";
                });
            </script>

            <div class="kt-wizard-v2__content" id="Card" data-ktwizard-type="step-content">
                    <div class="kt-heading kt-heading--md">Enter your Payment Details</div>
                    <div class="kt-form__section kt-form__section--first">
                        <div class="kt-wizard-v2__form">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Name on Card</label>
                                        <input type="text" class="form-control" name="ccname" placeholder="Card Name">
                                        <span class="form-text text-muted">Please enter your Card Name.</span>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Card Number</label>
                                        <input type="text" class="form-control" name="ccnumber" placeholder="Card Number" placeholder="ex: 4444 3333 2222 1111">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="form-group">
                                        <label>Card Expiry Month</label>
                                        <input type="number" class="form-control" name="ccmonth" placeholder="Card Expiry Month ex: 05">
                                        <span class="form-text text-muted">Please enter your Card Expiry Month.</span>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="form-group">
                                        <label>Card Expiry Year</label>
                                        <input type="number" class="form-control" name="ccyear" placeholder="Card Expire Year ex: 2000">
                                        <span class="form-text text-muted">Please enter your Card Expiry Year.</span>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="form-group">
                                        <label>Card CVV Number</label>
                                        <input type="password" class="form-control" name="cccvv" placeholder="Card CVV Number">
                                        <span class="form-text text-muted">Please enter your Card CVV Number.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>


            <div class="kt-wizard-v2__content" id="paypal" data-ktwizard-type="step-content" style="display:none">
                    <div class="kt-heading kt-heading--md">Enter your Payment Details</div>
                    <div class="kt-form__section kt-form__section--first">
                        <div class="kt-wizard-v2__form">
                            <div class="row">
                                <div class="col-xl-3">
                                    
                                </div>
                                <div class="col-xl-6">
                                        <div class="kt-demo-icon col-xl-6">
                                                <div class="kt-demo-icon__preview">
                                                        <i class="la la-cc-paypal">&nbsp;&nbsp;&nbsp;Paypal</i>
                                                    </div> 
                                        </div>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3">
                                    
                                </div>
                                <div class="col-xl-6">
                                        <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="emailPaypal" placeholder="example@abc.xyz" required>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>


            <div class="kt-form__actions">

                <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                    Submit
                </button>
            </div>
            <!--end: Form Actions -->
        </form>

        <!--end: Form Wizard Form-->
    </div>
</div>

@endsection
