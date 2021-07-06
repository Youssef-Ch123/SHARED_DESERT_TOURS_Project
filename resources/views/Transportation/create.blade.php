@extends('LayoutAgency')
@section('user')
{{ Auth::user()->name }}
@endsection

@section('title')
    <span class="kt-portlet__head-icon">
            <div class="mr-4 flex-shrink-0 text-center" style="width: 50px;">
                    <i class="icon-2x text-dark-50 flaticon-truck"></i>
                </div>
    </span>
    <h3 style="margin-left: 10px">
            Add new transportation
    </h3>

    @if (session('status'))
        <h6 class="alert-success">{{session('status')}}</h6>
    @endif
@endsection
@section('profile')
<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><img class="kt-header__topbar-icon" alt="Pic" src="{{ Auth::user()->image }}" /></span>
@endsection
@section('content')

<br>
<div class="container" style="padding-top: 5%">
    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">
        <!--begin: Form Wizard Form-->
    <form action="{{ route('Transportations.store') }}" enctype="multipart/form-data" method="POST" class="kt-form" id="kt_form" novalidate="novalidate">
            @csrf

            <div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
                <div class="kt-heading kt-heading--md"><h2>What means of transportation will you use? </h2></div>
                <div class="kt-form__section kt-form__section--first">
                    <div class="kt-wizard-v2__form" style="padding-left:15%">
                                            <br><br>


                                    <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>Name <span style="font-weight: bold;color: red;">*</label>
                                                <input type="text" class="form-control" name="Name" required>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>Image (optional)</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="kt-avatar kt-avatar--outline kt-avatar--changed" id="kt_user_avatar">
                                                    <div class="kt-avatar__holder" style="background-image: url();"></div>
                                                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar" aria-describedby="tooltip550165" data-bs-original-title="">
                                                        <i class="fa fa-pen"></i>
                                                        <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                                    </label>
                                                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar" data-bs-original-title="">
                                                        <i class="fa fa-times"></i>
                                                    </span>
                                                </div>
                                                {{-- <input type="file" name="image" class="form-control"/> --}}
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
