<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet kt-portlet--mobile">
    
            <div class="kt-portlet__body">
    
                <!--begin: Search Form -->
                <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                <div class="row align-items-center">
    
                <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                <a href="#" class="btn btn-default kt-hidden">
                <i class="la la-cart-plus"></i> New Order
                </a>
                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
                </div>
                </div>
                </div>
    
                <!--end: Search Form -->
    
                <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="first">
    
                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v4__nav">
                            <div class="kt-wizard-v4__nav-items nav">
    
                                <!--doc: Replace A tag with SPAN tag to disable the step link click -->
                                <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            1
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                Transport
                                            </div>
                                            <div class="kt-wizard-v4__nav-label-desc">
                                                Tour transport
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step" data-ktwizard-state="pending">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            2
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                Images
                                            </div>
                                            <div class="kt-wizard-v4__nav-label-desc">
                                                Set tour images
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step" data-ktwizard-state="pending">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            3
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                    More infromations
                                            </div>
                                            <div class="kt-wizard-v4__nav-label-desc">
                                                Please enter the tour informations
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step" onclick="fun()" data-ktwizard-state="pending">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            4
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                Submission
                                            </div>
                                            <div class="kt-wizard-v4__nav-label-desc">
                                                Review and Submit
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!--end: Form Wizard Nav -->
                        <div class="kt-portlet">
                            <div class="kt-portlet__body kt-portlet__body--fit"  >
                                <div class="kt-grid">
                                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
    
                                        <!--begin: Form Wizard Form-->
                                            <form action="AddNew" name="form" id="kt_user_add_form" method="POST" novalidate="novalidate" style="width: 100%;padding: 2% 5% 2% 5%">
                                                @csrf
                                                    <!--begin: Form Wizard Step 1-->
                                                    <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                                        <div class="kt-heading kt-heading--md"></div>
                                                        <div class="kt-section kt-section--first">
                                                            <div class="kt-wizard-v4__form">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="kt-section__body">
    
                                                                            <div class="form-group row">
    
                                                                                <div class="col-lg-6 col-xl-6">
                                                                                    <h2>Give your experience a title</h2>
                                                                                    <p style="font-size: 10pt">Make it short, descriptive, and exciting.</p>
                                                                                    <p style="font-size: 10pt">What is the title of your experience?</p>
                                                                                    <input type="text" class="form-control" name="Title" placeholder="Enter the title here"><br>
                                                                                    <span>We've underlined a few things you may Want to review.</span>
                                                                                    <br>
                                                                                    <hr>
                                                                                    <br><br>
                                                                                    <h2>What we'll do </h2><br>
                                                                                    <p>Your activity description is a chance to inspire guests to take your
                                                                                            experience. Think about it like a story, With a beginning, middle,
                                                                                            and end.
                                                                                            </p><br>
                                                                                        <h4>Describe your experience
                                                                                            </h4><br>
                                                                                            <ol>
                                                                                                <li>First, briefly describe what you'll do With your guests. What
                                                                                                        unique details set it apart from other similar experiences? </li><br>
                                                                                                        <li>
                                                                                                                Then, get more specific. How will you kick things off? How
                                                                                                                will you make guests feel included and engaged during your
                                                                                                                time together?
                                                                                                        </li><br>
                                                                                                        <li>
                                                                                                                Finally, say what you want guests to leave with. Friends?
                                                                                                                Knowledge? A greater appreciation for your culture? End
                                                                                                                With a strong selling point.
                                                                                                        </li>
                                                                                            </ol><br>
                                                                                            <textarea class="form-group" name="Description" cols="40" rows="10" style="margin-left: 10%">
    
                                                                                            </textarea>
    
                                                                                </div>
                                                                                <div class="col-lg-6 col-xl-6">
                                                                                    <h2>Describe the location </h2>
                                                                                    <p>YOU don't need to include the address here you'll do that next. </p>
                                                                                    <textarea style="padding:10px" class="form-group" name="locationDiscr" placeholder="Ex: we cross the famous Rif mountains andthe beutifull lands. after arriving you discover the small and blue streets also the big square Otta Hammam and the natural Spring Ras El Ma.
                                                                                    " cols="40" rows="5"></textarea><br>
                                                                                    <span>
                                                                                        <span class="alert-warning">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                                                              </svg>
                                                                                        <strong>Keep in mind:</strong></span> Don't Leave t up to Pur questS to pick a location, most travelerS dont know your City Well. Theyre looking to you, the host, to identify the places that make an area special.
                                                                                    </span><br><br>
                                                                                    <hr><br>
                                                                                    <h2>Where should guests meet you? </h2>
                                                                                    <span>Make sure the meeting place is easy to find. The exact address won't be shared until the guest's reservation is confirmed.</span><br><br>
    
                                                <div class="form-group">
                                                    <label>Country / Region</label>
                                                    <select class='form-control' tabindex='-98' name="country">
                                                            <option value="United States">United States</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern Territories</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macao">Macao</option>
                                                            <option value="North Macedonia">North Macedonia</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco" selected>Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Helena">Saint Helena</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Timor-leste">Timor-leste</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Viet Nam">Viet Nam</option>
                                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                </div>
    
                                                <div class="form-group row">
                                                        <label class="col-form-label col-lg-12 col-sm-12">Street & address</label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <input class="form-control" id="kt_inputmask_8" type="text" name="Address">
                                                        </div>
                                                </div>
    
                                                <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>City</label>
                                                            <input type="text" class="form-control" name="City">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>State</label>
                                                            <input type="text" class="form-control" name="State">
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <label>ZIP code</label>
                                                            <input type="number" class="form-control" name="ZIPcode">
                                                        </div>
                                                </div>
    
    
    
    
    
                                                                                        <table id="myTable" class=" table order-list">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <td>Transport mean</td>
                                                                                                        <td>Quantity</td>
                                                                                                        <td>Max places</td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="col-sm-6">
                                                                                                                <select class='form-control' tabindex='-98' id='cbo1' onchange='change(this.options[this.selectedIndex].value,1)'>
                                                                                                                        <option value="-1">Select</option>
                                                                                                                        @foreach ($transports as $transport)
                                                                                                                            <option value='{{$transport->MaxPlaces}}'>{{$transport->moyTrans}}</option>
                                                                                                                        @endforeach
                                                                                                                </select>
                                                                                                        </td>
                                                                                                        <td class="col-sm-3">
                                                                                                                <input  type="number" class="form-control" onkeyup="change2(this.value,1)" placeholder="ex: 3" min="1" id="count11" name="CountM" />
                                                                                                        </td>
                                                                                                        <td class="col-sm-3">
                                                                                                                <input  type="number" class="form-control" min="1" id="MaxPlaces1" name="Places" />
                                                                                                        </td>
                                                                                                        <td class="col-sm-2"><a class="deleteRow"></a>
    
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                                <tfoot>
                                                                                                    <tr>
                                                                                                        <td colspan="5" style="text-align: left;">
                                                                                                            <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add Row" />
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                    </tr>
                                                                                                </tfoot>
                                                                                            </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
    
                                                                </div>
                                                                        </div>
                                                                    </div>
                                                    </div>
    
                                                    <!--end: Form Wizard Step 1-->
    
                                                    <!--begin: Form Wizard Step 2-->
                                                    <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                        <div class="kt-section kt-section--first">
                                                            <div class="kt-wizard-v4__form">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="kt-section__body">
                                                                            <div class="form-group row">
                                                                                <div class="col-lg-12 col-xl-12" style="padding:5% 0 0 15%">
                                                                                    <h3 class="kt-section__title kt-section__title-md">Manage photos</h3>
                                                                                    <br><span>Your photos will be reviewed to ensure that they meet our standards below. we'll e-mail you to let you know when your photos are displayed on your experience page.
                                                                                        </span>
                                                                                    <br>
                                                                                    <h5 style="font-weight: bold">Requirements for all photos</h5>
                                                                                    <ol>
                                                                                        <li>Photos must be bright, clear, and in color</li>
                                                                                        <li>They must a accurately describe the experience</li>
                                                                                        <li>They can't show people posed for the camera or taking a selfie</li>
                                                                                        <li>They can't be edited with filters, text or graphics, logos, or collages</li>
                                                                                        <li>They must belong to you — don't use Copyrighted work</li>
                                                                                    </ol><br><hr><br>
                                                                                    <h6>Cover photo: Show people interacting on your experience</h6><br>
                                                                                    <span>Choose a candid photo that includes at least one person, and represents the 
                                                                                            experience as a whole. Selfies, posed, or staged photos will not be accepted.</span><br>
                                                                                            <div class="col-lg-12 col-xl-12">
                                                                                                    @include('tours.image')
                                                                                            </div>
                                                                                    <br><hr><br> 
                                                                                    <h6>Gallery photos: Show a variety of small and large details</h6><br>
                                                                                    <span>Upload at least 5 more photos that highlight different aspects of your experierce. 
                                                                                            Photos should include host/guest interaction, the location where you're hosting, 
                                                                                            and close-up detai Is of the experience.</span><br>
                                                                                            <div class="col-lg-12 col-xl-12">
                                                                                                    <div class="page-content">
                                                                                                            <!-- Panel Full Demo -->
                                                                                                            <div class="panel" style="padd" id="cropper2">
                                                                                                              <div class="panel-heading">
                                                                                                              </div>
                                                                                                              <div class="panel-body container-fluid">
                                                                                                                <div class="row" name="rowCropper">
                                                                                                                  <div class="col-lg-6">
                                                                                                                    <div class="cropper text-center" id="exampleFullCropper">
                                                                                                                      <img src="" alt="..." class="cropper-hidden">
                                                                                                                    </div>
                                                                                                                    <div class="cropper-toolbar text-center">
                                                                                                                      <div class="btn-group mb-20">
                                                                                                                        <button type="button" class="btn btn-primary" data-cropper-method="zoom" data-option="0.1" data-toggle="tooltip" data-container="body" title="" data-original-title="Zoom In">
                                                                                                                          <span class="cropper-tooltip" title="zoom in">
                                                                                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                                                                                                                                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                                                                                                                      <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                                                                                                                      <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                                                                                                                    </svg>
                                                                                                                          </span>
                                                                                                                        </button>
                                                                                                                        <button type="button" class="btn btn-primary" data-cropper-method="zoom" data-option="-0.1" data-toggle="tooltip" data-container="body" title="" data-original-title="Zoom Out">
                                                                                                                          <span class="cropper-tooltip" title="zoom out">
                                                                                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-out" viewBox="0 0 16 16">
                                                                                                                                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                                                                                                                      <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                                                                                                                      <path fill-rule="evenodd" d="M3 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                                                                                                                                    </svg>
                                                                                                                          </span>
                                                                                                                        </button>
                                                                                                                        <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="-90" data-toggle="tooltip" data-container="body" title="" data-original-title="Turn Left">
                                                                                                                          <span class="cropper-tooltip" title="rotate left 90°">
                                                                                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                                                                                                                      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                                                                                                                    </svg>
                                                                                                                          </span>
                                                                                                                        </button>
                                                                                                                        <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="90" data-toggle="tooltip" data-container="body" title="" data-original-title="Turn Right">
                                                                                                                          <span class="cropper-tooltip" title="rotate right 90°">
                                                                                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                                                                                                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                                                                                                    </svg>
                                                                                                                          </span>
                                                                                                                        </button>
                                                                                                                        <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="-5" data-toggle="tooltip" data-container="body" title="" data-original-title="Rotate Left">
                                                                                                                          <span class="cropper-tooltip" title="rotate left 90°">
                                                                                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                                                                                                                                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                                                                                                                                      <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                                                                                                                                    </svg>
                                                                                                                          </span>
                                                                                                                        </button>
                                                                                                                        <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="5" data-toggle="tooltip" data-container="body" title="" data-original-title="Rotate Right">
                                                                                                                          <span class="cropper-tooltip" title="rotate right 90°">
                                                                                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                                                                                                                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                                                                                                                      <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                                                                                                                    </svg>
                                                                                                                          </span>
                                                                                                                        </button>
                                                                                                                      </div>
                                                                                                    
                                                                                                                      <div class="btn-group mb-20">
                                                                                                                        <button type="button" class="btn btn-primary" data-cropper-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }" data-toggle="tooltip" data-container="body" title="" data-original-title="Get Image">
                                                                                                                          <span class="cropper-tooltip" title="Get Image">
                                                                                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                                                                                                                      <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                                                                                                      <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                                                                                                                                    </svg>
                                                                                                                          </span>
                                                                                                                        </button>
                                                                                                                        <button type="button" class="btn btn-primary" data-cropper-method="clear" data-toggle="tooltip" data-container="body" title="" data-original-title="Clear">
                                                                                                                          <span class="cropper-tooltip" title="clear">
                                                                                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                                                                                                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                                                                                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                                                                                                    </svg>
                                                                                                                          </span>
                                                                                                                        </button>
                                                                                                                        <label class="btn btn-primary mb-0" data-toggle="tooltip" for="inputImage" data-container="body" title="" data-original-title="Upload File" aria-describedby="tooltip107951">
                                                                                                                          <input type="file" class="hidden-xs-up" id="inputImage2" name="file" accept="image/*">
                                                                                                                          <span class="cropper-tooltip" title="Import image with FileReader">
                                                                                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                                                                                                                      <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                                                                                                      <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                                                                                                    </svg>
                                                                                                                          </span>
                                                                                                                        </label>
                                                                                                                      </div>
                                                                                                    
                                                                                                                      <!-- Modal -->
                                                                                                                      <div class="modal fade docs-cropped" id="getDataURLModal" aria-hidden="true" aria-labelledby="getDataURLTitle" role="dialog" tabindex="-1">
                                                                                                                        <div class="modal-dialog modal-simple">
                                                                                                                          <div class="modal-content">
                                                                                                                            <div class="modal-header">
                                                                                                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                                                                              <h4 class="modal-title" id="getDataURLTitle">Cropped</h4>
                                                                                                                            </div>
                                                                                                                            <div class="modal-body" id="div1">
                                                                                                                            </div>
                                                                                                                            <div class="modal-footer">
                                                                                                                                    <input type="button" class="btn btn-primary" value="save" onclick="myfunction2()"/>
                                                                                                                            </div>
                                                                                                                          </div>
                                                                                                                        </div>
                                                                                                                      </div>
                                                                                                                      <!-- End Modal -->
                                                                                                                    </div>
                                                                                                                    <br>
                                                                                                                    <div class="row" style="width: 100%;">
                                                                                                                        {{-- <table>
                                                                                                                            <tr>
                                                                                                                                <td><div style="width: 173px; height: 115px;background-color: gray" id="1"></div></td>
                                                                                                                                <td rowspan="4"><div style="width: 400px; height: 300px;background-color: red" id="0"></div></td>
                                                                                                                            </tr>
                                                                                                    
                                                                                                                            <tr>
                                                                                                                                <td><div style="width: 173px; height: 115px;background-color: gray" id="2"></div></td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <td><div style="width: 173px; height: 115px;background-color: gray" id="3"></div></td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <td><div style="width: 173px; height: 115px;background-color: gray" id="4"></div></td>
                                                                                                                            </tr>
                                                                                                    
                                                                                                                        </table> --}}
                                                                                                                        <div data-target="#carousel" data-slide-to="0" class="thumb col" id="2"></div>
                                                                                                                        <div data-target="#carousel" data-slide-to="1" class="thumb col" id="3"></div>
                                                                                                                        <div data-target="#carousel" data-slide-to="2" class="thumb col" id="4"></div>
                                                                                                                        <div data-target="#carousel" data-slide-to="3" class="thumb col" id="5"></div>
                                                                                                                        <div data-target="#carousel" data-slide-to="4" class="thumb col" id="6"></div>
                                                                                                                        <input type="hidden" name="pic1" required/>
                                                                                                                        <input type="hidden" name="pic2" required/>
                                                                                                                        <input type="hidden" name="pic3" required/>
                                                                                                                        <input type="hidden" name="pic4" required/>
                                                                                                                        <input type="hidden" name="pic5" required/>
                                                                                                                        <input type="hidden" name="pic6" required/>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                                  <div class="col-lg-6">
                                                                                                                    <div class="cropper-preview clearfix" id="exampleFullCropperPreview">
                                                                                                                      <div class="img-preview preview-lg" style="width: 263px; height: 147.938px;"><img src="/assets/cropper/people-7-960x640.webp" style="display: block; width: 328.173px; height: 219.167px; min-width: 0px !important; min-height: 0px !important; max-width: none !important; max-height: none !important; transform: translateX(-14.8843px) translateY(-7.33107px);"></div>
                                                                                                                    </div>
                                                                                                    
                                                                                                                  </div>
                                                                                                                </div>
                                                                                                              </div>
                                                                                                            </div>
                                                                                                            <!-- End Panel Full Demo -->
                                                                                                    
                                                                                                            <!-- Panel Simple Demo -->
                                                                                                    
                                                                                                            <!-- End Panel Simple Demo -->
                                                                                                          </div>
                                                                                            </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="form-group row">
    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!--end: Form Wizard Step 2-->
    
                                                    <!--begin: Form Wizard Step 3-->
                                                    <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                        <div class="form-group row">
                                                            <div class="col-lg-6 col-xl-6">
                                                                    <h2>Add details about what you'll provide</h2><br><br>
                                                                    <span>You can provide food and drink, special equipment, a ticket to a concert, or anything else special to make your guests comfortable.</span><br><br>
                                                                    <hr>
                                                                    <h4>Does your experience involve any one of the following?</h4><br>
                                                                    
                                                                        @foreach ($transports as $transport)
                                                                            <p style="font-size: 11pt"><input type="radio" name="radioTransport" checked />&nbsp;&nbsp;{{$transport->moyTrans}}</p>
                                                                        @endforeach
                                                                        <br>
                                                                    <div style="border-radius:16px;border: 1px solid black;padding: 10px;">
                                                                        <span>You should not personelly drive guests unless your license end automobile
                                                                                insurence meets local legel requirements.
                                                                        </span>
                                                                    </div><br>
                                                                    <h4>Who will be operating the vehicle when driving?</h4><br>
                                                                        <p style="font-size: 11pt"><input type="radio" name="radio" id="rd1" checked />&nbsp;&nbsp; I will be personally operating the vehicle</p>
                                                                        <p style="font-size: 11pt"><input type="radio" name="radio" id="rd2" />&nbsp;&nbsp; My co-host will be operating the vehicle</p>
                                                                        <p style="font-size: 11pt"><input type="radio" name="radio" id="rd3" />&nbsp;&nbsp; My team and I will provide a vehicle for the guests to operate</p>
                                                                        <p style="font-size: 11pt"><input type="radio" name="radio" id="rd4" />&nbsp;&nbsp; I will be transporting guests via public transportation or a third-party licensed operator</p>
                                                                            
                                                                    <div style="border-radius: 5px;border:1px solid #E4EAEC; padding:10px">
                                                                        <div class="mydiv">
                                                                            <span>DRINKS</span><br>
                                                                            <label><strong id="Drinks" hidden></strong></label>
                                                                            <textarea placeholder="Ex: Coffee, Juice, Tea and Water" cols="42" id="textAr_Drinks">
                                                                            </textarea>&nbsp;&nbsp;&nbsp;<span style="float:right"><a style="color: #159F5C" id="done" onclick="hid()">Done</a><a style="color: #007ACC" onclick="show(false)" id="edit" hidden>Edit</a>&nbsp;|&nbsp;<a style="color: #FF0000" id="remove" hidden onclick="show(true)">Remove</a></span>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="mydiv">
                                                                            <span>TRANSPORTATION</span><br>
                                                                            <label><strong id="Transportation" hidden></strong></label>
                                                                            <textarea placeholder="Ex: Car" name="textAr_Transport" cols="42" id="textAr_Transport">
                                                                                </textarea>&nbsp;&nbsp;&nbsp;<span style="float:right"><a style="color: #159F5C" id="done2" onclick="hid2()">Done</a><a style="color: #007ACC" onclick="show2(false)" id="edit2" hidden>Edit</a>&nbsp;|&nbsp;<a style="color: #FF0000" id="remove2" hidden onclick="show2(true)">Remove</a></span>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col-lg-6 col-xl-6">
                                                                <h2>What guests should bring</h2><br>
                                                                <span>If guests need anything in order to enjoy your experience, this is the place to tell 
                                                                        them. Cooking experience hosts should make sure to include a complete list of 
                                                                        ingredients here instead of planning to send them to guests later. We can't accept 
                                                                        submissions that don't have a complete and specific list. <br><br>
                                                                        This list will be emailed to guests when they book your experience to help them 
                                                                        prepare. <br><br>Be as detailed as possible and add each item individually.<br><br></span><br>
    
                                                                        <ul class="list-group" id="ul" style="list-style: none;">
                                                                            <div class="kt-input-icon kt-input-icon--right" id="d1" style="margin-bottom: 20px">
                                                                                    <input type="text" class="form-control" name="bring1" placeholder="Enter item here" required>
                                                                            </div>
                                                                        </ul><br>
                                                                        <span class="add" style="color: black;text-decoration: underline;" onclick="add()">+ Add another item</span><br><hr>
                                                                        <h2>Who can attend your experience?</h2>
                                                                        <span>Keep in mind that someone booking experience might book spots Other 
                                                                                guests. If there are strict requirements around age, skill level, or certifications, 
                                                                                include them here.</span><br>
                                                                        <h5>Minimum age</h5>
                                                                        <span>Set age limits for guests. Minors cen ony attend With their legal guardian.</span>
                                                                        <br>
                                                                            <select class='form-control' tabindex='-98' id='cboMinAge'>
                                                                                    <option value="15">15</option>
                                                                                    <option value="16">16</option>
                                                                                    <option value="17">17</option>
                                                                                    <option value="18" selected>18</option>
                                                                                    <option value="19">19</option>
                                                                                    <option value="20">20</option>
                                                                            </select>
                                                                        <br>
                                                                        <input type="checkbox" style="margin-left:10px" name="bringKids" class="form-check-input"/><span style="margin-left: 30px">Parents can bring kids under 2 years</span><br>
    
                                                                        <hr><br>
    
                                                                        <h5>Does experience have any accessibility features? (optional)</h5>
                                                                        <span>Select all the features you provide, and ensure everything is accurate and up to date.</span><br><br>
                                                                        <input type="checkbox" style="margin-left:10px" name="bringKids" class="form-check-input"/><span style="margin-left: 30px">Communication accessibility features<br><span style="margin-left: 30px;font-size: 8pt">This is how you communicate with guests on your experience</span></span><br><br>
    
                                                                        <input type="checkbox" style="margin-left:10px" name="bringKids" class="form-check-input"/><span style="margin-left: 30px">Environmental accessibility features<br><span style="margin-left: 30px;font-size: 8pt">These are the attributes of the location of your experience.</span></span><br><br>
    
                                                                        <input type="checkbox" style="margin-left:10px" name="bringKids" class="form-check-input"/><span style="margin-left: 30px">Other accessibility features</span><br>
    
                                                                        <hr><br>
    
                                                                        <h5>What activity level should people expect?</h5>
                                                                        <span>Think about how active people Will get during your entire experience.</span><br><br>
                                                                        <input type="radio" style="margin-left:10px" name="rdLevel" class="form-check-input" checked/><span style="margin-left: 30px">Light</span><br><br>
    
                                                                        <input type="radio" style="margin-left:10px" name="rdLevel" class="form-check-input"/><span style="margin-left: 30px">Moderate</span><br><br>
    
                                                                        <input type="radio" style="margin-left:10px" name="rdLevel" class="form-check-input"/><span style="margin-left: 30px">Strenuous</span><br><br>
    
                                                                        <input type="radio" style="margin-left:10px" name="rdLevel" class="form-check-input"/><span style="margin-left: 30px">Extreme</span><br><br>
    
    
                                                                        <hr><br>
    
                                                                        <h5>What skill level is required?</h5>
                                                                        <span>Think about how experienced people should be to take your activity.</span><br><br>
                                                                        <input type="radio" style="margin-left:10px" name="rdLevel" class="form-check-input" checked/><span style="margin-left: 30px">Beginner</span><br><br>
    
                                                                        <input type="radio" style="margin-left:10px" name="rdLevel" class="form-check-input"/><span style="margin-left: 30px">Intermediate </span><br><br>
    
                                                                        <input type="radio" style="margin-left:10px" name="rdLevel" class="form-check-input"/><span style="margin-left: 30px">Advanced </span><br><br>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            var bringCpt=1;
                                                            function add(){
                                                                bringCpt++;
                                                                var ul = document.getElementById("ul");
    
                                                                var div=document.createElement("div");
                                                                div.setAttribute("class","kt-input-icon kt-input-icon--right");
                                                                div.setAttribute("id","d"+bringCpt);
                                                                div.style.marginBottom="20px";
    
                                                                
                                                                
                                                                var input=document.createElement("input");
                                                                input.setAttribute("type","text");
                                                                input.setAttribute("name","bring"+bringCpt);
                                                                input.setAttribute("placeholder","Enter item here");
                                                                input.setAttribute("class","form-control");
                                                                div.appendChild(input);
    
    
    
                                                                var span = document.createElement("span");
                                                                span.setAttribute("class","kt-input-icon__icon kt-input-icon__icon--right");
                                                                var span2=document.createElement("span");
                                                                var i=document.createElement("i");
                                                                i.setAttribute("class","la la-close");
                                                                i.setAttribute("onclick","remove("+div.getAttribute("id")+")");
                                                                span2.appendChild(i);
                                                                span.appendChild(span2);
                                                                div.appendChild(span);
    
                                                                ul.appendChild(div);
                                                            }
                                                            function remove(str){
                                                                var id=str.getAttribute("id");
                                                                document.getElementById(id).remove();
                                                            }
                                                            document.getElementById("textAr_Drinks").value="";
                                                            document.getElementById("textAr_Transport").value="";
                                                            function hid(){
                                                                document.getElementById("Drinks").innerText=document.getElementById("textAr_Drinks").value;
                                                                document.getElementById("Drinks").removeAttribute("hidden");
                                                                document.getElementById("textAr_Drinks").setAttribute("hidden","hidden");
                                                                document.getElementById("done").setAttribute("hidden","hidden");
                                                                document.getElementById("edit").removeAttribute("hidden");
                                                                document.getElementById("remove").removeAttribute("hidden");
                                                            }
                                                            function show(b){
                                                                document.getElementById("textAr_Drinks").removeAttribute("hidden");
                                                                document.getElementById("Drinks").setAttribute("hidden","hidden");
                                                                document.getElementById("done").removeAttribute("hidden");
                                                                document.getElementById("edit").setAttribute("hidden","hidden");
                                                                document.getElementById("remove").setAttribute("hidden","hidden");
    
                                                                if(b==true)
                                                                    document.getElementById("textAr_Drinks").value="";
                                                            }
    
                                                            function hid2(){
                                                                document.getElementById("Transportation").innerText=document.getElementById("textAr_Transport").value;
                                                                document.getElementById("Transportation").removeAttribute("hidden");
                                                                document.getElementById("textAr_Transport").setAttribute("hidden","hidden");
                                                                document.getElementById("done2").setAttribute("hidden","hidden");
                                                                document.getElementById("edit2").removeAttribute("hidden");
                                                                document.getElementById("remove2").removeAttribute("hidden");
                                                            }
                                                            function show2(b){
                                                                document.getElementById("textAr_Transport").removeAttribute("hidden");
                                                                document.getElementById("Transportation").setAttribute("hidden","hidden");
                                                                document.getElementById("done2").removeAttribute("hidden");
                                                                document.getElementById("edit2").setAttribute("hidden","hidden");
                                                                document.getElementById("remove2").setAttribute("hidden","hidden");
    
                                                                if(b==true)
                                                                    document.getElementById("textAr_Transport").value="";
                                                            }
                                                        </script>
    
    
                                                        <div class="kt-heading kt-heading--md">More informations</div>
                                                        <div class="kt-form__section kt-form__section--first">
                                                            <div class="kt-wizard-v4__form">
                                                                <div class="form-group">
                                                                    <label>City from</label>
                                                                    <input  type="text" class="form-control" id="CityFrom" name="CityFrom" placeholder="City from">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>City to</label>
                                                                    <input  type="text" class="form-control" id="CityTo" name="CityTo" placeholder="City to">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group">
                                                                            <label>Duration</label>
                                                                            <input  class="form-control" type="number" id="Duration" name="Duration" placeholder="Duration" min="0">
                                                                        </div>
                                                                    </div>
    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!--end: Form Wizard Step 3-->
    
                                                    <!--begin: Form Wizard Step 4-->
                                                    <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                        <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
                                                        <div class="kt-form__section kt-form__section--first">
                                                            <div class="kt-wizard-v4__review">
                                                                <div class="kt-wizard-v4__review-item">
                                                                    <div class="kt-wizard-v4__review-title">
                                                                            Transport
                                                                    </div>
                                                                    <div class="kt-wizard-v4__review-content">
    
                                                                        <br> Name: <span id="Transport" style="color: green"></span>
                                                                        <br> Count: <span id="count2" style="color: green"></span>
                                                                        <br> Max places: <span id="mp" style="color: green"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-wizard-v4__review-item">
                                                                    <div class="kt-wizard-v4__review-title">
                                                                        Tour's informations
                                                                    </div>
                                                                    <div class="kt-wizard-v4__review-content">
    
                                                                        <br> City from: <span id="CityFrom2" style="color: green"></span>
                                                                        <br> City to: <span id="CityTo2" style="color: green"></span>
                                                                        <br> Duration: <span id="Duration2" style="color: green"></span>
                                                                    </div>
                                                                </div>
    
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!--end: Form Wizard Step 4-->
    
                                                    <!--begin: Form Actions -->
                                                    <div class="kt-form__actions">
                                                        <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                                            Previous
                                                        </div>
                                                        <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                                                Submit
                                                            </div>
                                                        <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" onclick="fun()" data-ktwizard-type="action-next">
                                                            Next Step
                                                        </div>
                                                    </div>
                                                    <!--end: Form Actions -->
                                                </form>
    
                                        <!--end: Form Wizard Form-->
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
    
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
                </div>
    
            </div>
        </div>
    
    </div>