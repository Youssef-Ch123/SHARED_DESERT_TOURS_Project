@extends('LayoutAgency')
@section('profile')
<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><img class="kt-header__topbar-icon" alt="Pic" src="{{ Auth::user()->image }}" /></span>
@endsection
@section('content')

<div class="container">
<form action="{{url('/Agency/Profile')}}" method="POST" enctype="multipart/form-data" class="kt-form kt-form--label-right">
    @csrf
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="kt-section__body">
                                <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v2__form">
                                                <div class="form-group row" style="margin-top: 7%">
                                                        <label class="col-xl-5 col-lg-5 col-form-label"></label>
                                                        <div class="col-lg-7 col-xl-7">
                                                                <div class="kt-avatar kt-avatar--outline kt-avatar--changed" id="kt_user_avatar">
                                                                        <div class="kt-avatar__holder" style="background-image: url({{$agency->image}});"></div>
                                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar" aria-describedby="tooltip550165" data-bs-original-title="">
                                                                            <i class="fa fa-pen"></i>
                                                                            <input type="file" name="file" accept=".png, .jpg, .jpeg">
                                                                        </label>
                                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar" data-bs-original-title="">
                                                                            <i class="fa fa-times"></i>
                                                                        </span>
                                                                    </div>
                                                        </div>
                                                </div>
                                                        <br><br>

                                                        <div class="form-group row">
                                                                <div class="col-lg-6">
                                                                    <label>Name</label>
                                                                    <input type="text" value="{{$agency->name}}" class="form-control" name="name">
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label>Tel</label>
                                                                    <input type="text" value="{{$agency->Tel}}" class="form-control" name="Tel">
                                                                </div>
                                                        </div>

                                                        <div class="form-group row">
                                                                <div class="col-lg-6">
                                                                    <label>Fax</label>
                                                                    <input type="text" value="{{$agency->Fax}}" class="form-control" name="Fax">
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label>Address</label>
                                                                    <input type="text" value="{{$agency->Adress}}" class="form-control" name="Address">
                                                                </div>
                                                        </div>
                                                        <div class="form-group row">
                                                                <div class="col-lg-6">
                                                                    <label>Email</label>
                                                                <input type="email" value="{{$agency->email}}" class="form-control" name="email">
                                                                </div>


                                                                <div class="col-lg-6">
                                                                    <label>Password</label>
                                                                    <input type="password" value="{{ $agency->password }}" class="form-control" name="password" readonly>
                                                                </div>

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
        </form>
</div>
@endsection

