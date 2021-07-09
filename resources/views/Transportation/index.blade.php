@extends('LayoutAgency')

@section('user')
{{ Auth::user()->name }}
@endsection

@section('profile')
<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><img class="kt-header__topbar-icon" alt="Pic" src="{{ Auth::user()->image }}" /></span>
@endsection

@section('title')
    <span class="kt-portlet__head-icon">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 512.427 512.427" width="32px" height="32px" fill="currentColor" xml:space="preserve">
       <g transform="translate(1 1)">
           <g>
               <g>
                   <path d="M476.227,229.827h19.627c8.533,0,15.36-6.827,15.36-15.36v-53.76c0-8.533-6.827-15.36-15.36-15.36h-19.627
                       c-8.533,0-15.36,6.827-15.36,15.36v17.92h-9.387V110.36V67.693c0-2.56-0.853-4.267-2.56-5.973
                       c-82.773-83.627-303.787-83.627-387.413,0c-1.707,1.707-2.56,3.413-2.56,5.973v42.667v68.267H49.56v-17.92
                       c0-8.533-6.827-15.36-15.36-15.36H14.573c-8.533,0-15.36,6.827-15.36,15.36v53.76c0,8.533,6.827,15.36,15.36,15.36h20.48
                       c8.533,0,15.36-6.827,14.507-15.36v-18.773h9.387v100.428c-15.578,12.54-25.6,31.738-25.6,53.172v42.667h-8.533
                       c-14.507,0-25.6,11.093-25.6,25.6v8.533c0,14.507,11.093,25.6,25.6,25.6H41.88v25.6c0,18.773,15.36,34.133,34.133,34.133h34.133
                       c18.773,0,34.133-15.36,34.133-34.133v-25.6h213.333v25.6c0,18.773,15.36,34.133,34.133,34.133h34.133
                       c18.773,0,34.133-15.36,34.133-34.133v-25.6h25.6c14.507,0,25.6-11.093,25.6-25.6v-8.533c0-14.507-11.093-25.6-25.6-25.6h-8.533
                       v-42.667c0-21.435-10.022-40.633-25.6-53.172V195.693h9.387v18.773C460.867,223,467.693,229.827,476.227,229.827z M33.347,212.76
                       H16.28v-51.2h17.067V212.76z M76.013,71.107c77.653-73.387,280.747-73.387,358.4,0v30.72h-358.4V71.107z M76.013,118.893H246.68
                       v162.133H135.747l66.56-88.747c2.56-3.413,1.707-9.387-1.707-11.947c-3.413-2.56-9.387-1.707-11.947,1.707l-27.307,36.409
                       v-14.222c0-5.12-3.413-8.533-8.533-8.533c-5.12,0-8.533,3.413-8.533,8.533v34.133c0,0.871,0.106,1.687,0.295,2.451
                       l-30.162,40.216h-12.8c-1.084,0-2.182,0.029-3.288,0.084c-1.001,0.048-1.995,0.127-2.985,0.218
                       c-0.089,0.008-0.178,0.012-0.267,0.021c-1.018,0.098-2.027,0.224-3.031,0.367c-0.099,0.014-0.197,0.023-0.296,0.038
                       c-0.867,0.127-1.725,0.279-2.582,0.439c-0.277,0.051-0.555,0.095-0.831,0.149c-0.687,0.137-1.367,0.295-2.047,0.453
                       c-0.438,0.101-0.878,0.195-1.312,0.305c-0.709,0.179-1.409,0.381-2.109,0.583c-0.319,0.093-0.643,0.176-0.959,0.274
                       c-2.005,0.609-3.969,1.313-5.893,2.098V118.893z M127.213,477.293c0,9.387-7.68,17.067-17.067,17.067H76.013
                       c-9.387,0-17.067-7.68-17.067-17.067v-25.6h68.267V477.293z M442.947,477.293c0,9.387-7.68,17.067-17.067,17.067h-34.133
                       c-9.387,0-17.067-7.68-17.067-17.067v-25.6h68.267V477.293z M485.613,409.027c5.12,0,8.533,3.413,8.533,8.533v8.533
                       c0,5.12-3.413,8.533-8.533,8.533h-25.6h-102.4H144.28H41.88H24.813c-5.12,0-8.533-3.413-8.533-8.533v-8.533
                       c0-5.12,3.413-8.533,8.533-8.533h8.533H477.08H485.613z M460.013,349.293v42.667h-409.6v-42.667
                       c0-16.766,8.169-31.716,20.723-41.07c0.507-0.202,1.003-0.436,1.464-0.744c7.45-5.215,16.2-8.477,25.116-9.222
                       c0.056-0.004,0.111-0.009,0.167-0.013c0.519-0.042,1.039-0.072,1.558-0.096c0.721-0.031,1.444-0.055,2.172-0.055h307.2
                       c0.728,0,1.451,0.025,2.172,0.055c0.52,0.024,1.039,0.055,1.558,0.096c0.056,0.004,0.111,0.008,0.167,0.013
                       c8.916,0.745,17.666,4.007,25.116,9.222c0.445,0.222,0.889,0.444,1.334,0.651C451.786,317.478,460.013,332.47,460.013,349.293z
                        M428.52,283.956c-0.316-0.097-0.639-0.181-0.958-0.273c-0.701-0.202-1.401-0.404-2.11-0.583
                       c-0.435-0.11-0.874-0.204-1.312-0.305c-0.68-0.158-1.359-0.316-2.047-0.453c-0.276-0.055-0.554-0.098-0.831-0.149
                       c-0.856-0.16-1.715-0.312-2.582-0.439c-0.099-0.014-0.197-0.024-0.296-0.038c-1.004-0.143-2.014-0.269-3.031-0.367
                       c-0.089-0.009-0.178-0.012-0.267-0.021c-0.99-0.091-1.983-0.17-2.985-0.218c-1.106-0.055-2.204-0.084-3.288-0.084H323.48
                       l66.56-88.747c2.56-3.413,1.707-9.387-1.707-11.947c-3.413-2.56-9.387-1.707-11.947,1.707l-27.307,36.409v-14.222
                       c0-5.12-3.413-8.533-8.533-8.533c-5.12,0-8.533,3.413-8.533,8.533v34.133c0,0.871,0.106,1.687,0.295,2.451l-30.162,40.216h-38.4
                       V118.893h170.667v167.161C432.489,285.269,430.526,284.565,428.52,283.956z M477.08,161.56h17.067v51.2H477.08V161.56z"/>
                   <path d="M152.813,315.16H84.547c-5.12,0-8.533,3.413-8.533,8.533v42.667c0,5.12,3.413,8.533,8.533,8.533h68.267
                       c5.12,0,8.533-3.413,8.533-8.533v-42.667C161.347,318.573,157.933,315.16,152.813,315.16z M144.28,357.827h-51.2v-25.6h51.2
                       V357.827z"/>
                   <path d="M425.88,315.16h-68.267c-5.12,0-8.533,3.413-8.533,8.533v42.667c0,5.12,3.413,8.533,8.533,8.533h68.267
                       c5.12,0,8.533-3.413,8.533-8.533v-42.667C434.413,318.573,431,315.16,425.88,315.16z M417.347,357.827h-51.2v-25.6h51.2V357.827z
                       "/>
                   <path d="M314.947,349.293H195.48c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h119.467
                       c5.12,0,8.533-3.413,8.533-8.533S320.067,349.293,314.947,349.293z"/>
                   <path d="M212.547,332.227h85.333c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533h-85.333
                       c-5.12,0-8.533,3.413-8.533,8.533S207.427,332.227,212.547,332.227z"/>
                   <path d="M297.88,50.627h-85.333c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h85.333c5.12,0,8.533-3.413,8.533-8.533
                       S303,50.627,297.88,50.627z"/>
               </g>
           </g>
       </g>
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
