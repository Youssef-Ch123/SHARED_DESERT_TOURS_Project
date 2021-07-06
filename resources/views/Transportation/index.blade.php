@extends('LayoutAgency')

@section('user')
{{ Auth::user()->name }}
@endsection

@section('profile')
<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><img class="kt-header__topbar-icon" alt="Pic" src="{{ Auth::user()->image }}" /></span>
@endsection

@section('title')
    <span class="kt-portlet__head-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-signpost-2" viewBox="0 0 16 16">
            <path d="M7 1.414V2H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h5v1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H7v5h2v-5h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H9V6h4.5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.3 2.4a1 1 0 0 0-.8-.4H9v-.586a1 1 0 0 0-2 0zM13.5 3l.75 1-.75 1H2V3h11.5zm.5 5v2H2.5l-.75-1 .75-1H14z"/>
        </svg>
    </span>&nbsp;&nbsp;&nbsp;
    <h4>
        Transportation
    </h4>
@endsection

@section('content')
<div class="kt-portlet kt-portlet--mobile">

    <div class="kt-portlet__body">

        <!--begin: Search Form -->
        <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <a href="{{ route('Transportations.create') }}" class="btn btn-brand btn-icon-sm">
                                    <i class="flaticon2-plus"></i> Add New
                                </a>
                            </div>
                        </div>
                    </div>

                    <br>

            <div class="row align-items-center">
                <div class="col-xl-8 order-2 order-xl-1">
                    <div class="row align-items-center">
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-input-icon kt-input-icon--left">
                                <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                    <span><i class="la la-search"></i></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-form__group kt-form__group--inline">
                                <div class="kt-form__label">
                                    <label>Status:</label>
                                </div>
                                <div class="kt-form__control">
                                    <div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
                                        <option value="">All</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Delivered</option>
                                        <option value="3">Canceled</option>
                                        <option value="4">Success</option>
                                        <option value="5">Info</option>
                                        <option value="6">Danger</option>
                                    </select><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-form__group kt-form__group--inline">
                                <div class="kt-form__label">
                                    <label>Type:</label>
                                </div>
                                <div class="kt-form__control">
                                    <div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="kt_form_type" tabindex="-98">
                                        <option value="">All</option>
                                        <option value="1">Online</option>
                                        <option value="2">Retail</option>
                                        <option value="3">Direct</option>
                                    </select><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                    <a href="#" class="btn btn-default kt-hidden">
                        <i class="la la-cart-plus"></i> New Order
                    </a>
                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
                </div>
            </div>
        </div>

        <!--end: Search Form -->
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">

        <!--begin: Datatable -->
        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--subtable kt-datatable--loaded" id="child_data_local" style="position: static; zoom: 1;"><table class="kt-datatable__table" style="display: block;"><thead class="kt-datatable__head"><tr class="kt-datatable__row" style="text-align: right"><th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort"><span style="width: 30px;"></span></th><th data-field="FirstName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">ID</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Name</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">#</span></th><th data-field="LastName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Actions</span></th></tr></thead>
            <tbody class="kt-datatable__body tbody"><?php $cpt=0; ?>
                @foreach ($transports as $transport)
                    <tr data-row="0" class="kt-datatable__row kt-datatable__row--even">

                        <td class="kt-datatable__cell--center kt-datatable__cell" data-field="RecordID">
                            <a class="kt-datatable__toggle-subtable"  data-value="1" title="Load sub table" style="width: 30px;"><i class="fa fa-caret-right" style="width: 30px;"></i></a>
                        </td>

                        <td data-field="FirstName" class="kt-datatable__cell"><span style="width: 150px;">{{$transport->id}}</span></td>

                        <td data-field="LastName" class="kt-datatable__cell"><span style="width: 250px;">{{$transport->moyTrans}}</span></td>

                        <td data-field="Company" class="kt-datatable__cell"><span style="width: 100px;"><img width="80px" height="100px" src='{{$transport->image}}'></span></td>

                        <?php $cpt++; ?>
                        <td data-field="Actions" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 130px;">
                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">		                      <i onclick="getName(this);" id="{{$transport->id}}" name="{{$transport->moyTrans}}" data-bs-toggle="modal" data-bs-target="<?php echo '#exampleModal'.$cpt ?>" class="la la-edit"></i>		                  </a>		                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="<?php echo '#exampleModal22'.$cpt ?>" class="btn btn-sm btn-clean btn-icon btn-icon-md btn-sm btn btn-label-danger btn-bold" title="Delete">		                      <i onclick="getName2(this)" id="{{$transport->id}}" name="{{$transport->moyTrans}}" class="la la-trash"></i>		                  </a>		              </span></td>
                    </tr>
                      <!-- Modal -->
    <div class="modal fade" id="<?php echo'exampleModal'.$cpt ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Transp</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <form method="POST" id="editForm" enctype="multipart/form-data" action="{{ route('Transportations.update', $transport->id) }}">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-lg-12">
                        <label>Name <span style="font-weight: bold;color: red;">*</label>
                        <input type="text" class="form-control" value="{{$transport->moyTrans}}" name="Name" required>
                    </div>
            </div>
            <div class="form-group row">
                    <div class="col-lg-12">
                            <label>Image (optional)</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="kt-avatar kt-avatar--outline kt-avatar--changed" id="kt_user_avatar">
                                <div class="kt-avatar__holder" style="background-image: url({{$transport->image}});"></div>
                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar" aria-describedby="tooltip550165" data-bs-original-title="">
                                    <i class="fa fa-pen"></i>
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                </label>
                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar" data-bs-original-title="">
                                    <i class="fa fa-times"></i>
                                </span>
                            </div>
                    </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
    </div>

      <!-- Modal delete -->
    <form method="POST" action="{{ route('Transportations.destroy', $transport->id) }}">
            @csrf
            @method('DELETE')
            <div class="modal fade" id="<?php echo'exampleModal22'.$cpt ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Remove Transp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label><span style="font-weight: bold;color: red;">Are you sure you want to delete the recording ?</span></label><br><br>
                                <input type="text" class="form-control" value="{{$transport->moyTrans}}" readonly>
                            </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </div>
                </div>
            </div>
    </form>
                @endforeach
                <div class="kt-datatable__pager kt-datatable--paging-loaded"><ul class="kt-datatable__pager-nav"><li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li><li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li><li style=""></li><li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li><li style=""></li><li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-next"></i></a></li><li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-next"></i></a></li></ul></div>

</tbody>
        </table>
</div>

        <!--end: Datatable -->
    </div>
</div>





<script>
    etat=true;
    function funct(cpt){
        if(etat==true){
            document.getElementById('flech'+cpt).setAttribute('class','fa fa-caret-down');
            document.getElementById('tab'+cpt).style.display='block';
            etat=false;
        }else{
            document.getElementById('flech'+cpt).setAttribute('class','fa fa-caret-right');
            document.getElementById('tab'+cpt).style.display='none';
            etat=true;
        }
    }
    function getName(obj){
        var transp=obj.getAttribute("name");
        document.getElementById("Name").value=transp;
    }

    function getName2(obj){
        var transp=obj.getAttribute("name");
        document.getElementById("Name2").value=transp;
    }
    document.getElementsByClassName("dz-hidden-input")[0].removeAttribute("name");
    document.getElementsByClassName("dz-hidden-input")[0].setAttribute("name","aaaa");
</script>



@endsection
