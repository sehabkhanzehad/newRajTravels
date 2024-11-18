@extends('dashboard.layouts.main')
@section('pageTitle', 'Website Settings')
@section('content')
    <section class="content">
        <div class="container-fluid">
            @include('dashboard.components.common.breadcrumb', [
                'title' => 'Create Package',
                'route' => route('dashboard.website.home'),
                'path' => 'Website',
            ])


            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Edit</strong> Package </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i
                                            class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="{{ route('dashboard.website.packages') }}">All Packages</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>

                        <div class="body">
                            <form id="basic-form" method="" action="" enctype="">
                                <div class="row">
                                    <div id ="col1" class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="locale">Language<span class="text-danger">*</span></label>
                                            <select name="locale" id="locale" class="form-control">
                                                <option {{ $package->locale == 'bn' ? 'selected' : '' }} value="bn">
                                                    বাংলা</option>
                                                <option {{ $package->locale == 'en' ? 'selected' : '' }} value="en">
                                                    English</option>
                                                <option {{ $package->locale == 'ar' ? 'selected' : '' }} value="ar">
                                                    Arabic</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div id="col2" class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="package_type">Package Type<span class="text-danger">*</span></label>
                                            <select name="package_type" id="package_type" class="form-control">
                                                <option {{ $package->package_type == 'hajj' ? 'selected' : '' }}
                                                    value="hajj">Hajj</option>
                                                <option {{ $package->package_type == 'umrah' ? 'selected' : '' }}
                                                    value="umrah">Umrah</option>
                                                <option {{ $package->package_type == 'others' ? 'selected' : '' }}
                                                    value="others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="col3" class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="package_type">Month/Year/Session</label>
                                            <input value="{{ $package->year }}" type="text" name="month_year"
                                                id="month_year" class="form-control" placeholder="Enter month/year/session">
                                        </div>
                                    </div>

                                    <div id="col4" class="col-lg-10 col-md-10 col-sm-12">
                                        <div class="form-group">
                                            <label for="package_name">Package Name<span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $package->package_name }}" name="package_name"
                                                id="package_name" class="form-control" placeholder="Enter package name">
                                        </div>

                                    </div>
                                    <div id="col4" class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="form-group">
                                            <label for="package_name">Is Featured?<span class="text-danger">*</span></label>
                                            <select name="is_featured" id="is_featured" class="form-control">
                                                <option {{ $package->is_featured == 'no' ? 'selected' : '' }}
                                                    value="no">No</option>
                                                <option {{ $package->is_featured == 'yes' ? 'selected' : '' }}
                                                    value="yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="currency">Currency<span class="text-danger">*</span></label>
                                            <select name="currency" id="currency" class="form-control">
                                                <option {{ $package->currency == 'BDT' ? 'selected' : '' }} value="BDT">
                                                    BDT</option>
                                                <option {{ $package->currency == 'USD' ? 'selected' : '' }} value="USD">
                                                    USD</option>
                                                <option {{ $package->currency == 'SAR' ? 'selected' : '' }} value="SAR">
                                                    SAR</option>
                                                <option {{ $package->currency == 'INR' ? 'selected' : '' }} value="INR">
                                                    INR</option>
                                                <option {{ $package->currency == 'EUR' ? 'selected' : '' }} value="EUR">
                                                    EUR</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="package_price">Package Price<span
                                                    class="text-danger">*</span></label>
                                            <input value="{{ $package->package_price }}" type="text"
                                                name="package_price" id="package_price" class="form-control"
                                                placeholder="Enter package price">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="discount_type">
                                                Discount Type</label>
                                            <select name="discount_type" id="discount_type" class="form-control">
                                                <option {{ $package->discount_type == 'none' ? 'selected' : '' }}
                                                    value="none">None</option>
                                                <option {{ $package->discount_type == 'fixed' ? 'selected' : '' }}
                                                    value="fixed">Fixed</option>
                                                <option {{ $package->discount_type == 'percentage' ? 'selected' : '' }}
                                                    value="percentage">Percentage</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div id="" style="" class="form-group">
                                            <label for="package_discount" class="form-label">Package Discount</label>

                                            <input type="text" value="{{ $package->package_discount }}"
                                                name="package_discount" id="package_discount" class="form-control"
                                                placeholder="No discount" disabled>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="package_duration">Package Duration</label>
                                            <input type="text" value="{{ $package->package_duration }}"
                                                name="package_duration" id="package_duration" class="form-control"
                                                placeholder="Enter package duration">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="billing_type">Billing Type<span
                                                    class="text-danger">*</span></label>
                                            <select name="billing_type" id="billing_type" class="form-control">
                                                <option {{ $package->billing_type == 'installment' ? 'selected' : '' }}
                                                    value="installment">Installment</option>
                                                <option {{ $package->billing_type == 'one-time' ? 'selected' : '' }}
                                                    value="one-time">One-time</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="start_date">Start Date</label>
                                            <input value="{{ $package->start_date }}" type="date" name="start_date"
                                                value="" id="start_date" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="end_date">End Date</label>
                                            <input value="{{ date('Y-m-d', strtotime($package->end_date)) }}"
                                                type="date" name="end_date" id="end_date" class="form-control"
                                                class="form-control">
                                        </div>
                                    </div>



                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="package_short_description">Package Short Description</label>
                                            <textarea name="package_short_description" id="package_short_description" class="form-control" rows="5"
                                                placeholder="Enter package short description">{{ $package->package_short_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <label for="featureInput">Features<span class="text-danger">*</span></label>
                                        <div class="input-group" id="">
                                            <input type="text" id="featureInput" class="form-control"
                                                placeholder="Enter feature">
                                            <div class="input-group-append">
                                                <span class="input-group-text" type="button"
                                                    onclick="addFeature()">Add</span>
                                            </div>
                                        </div>
                                        {{-- <div class="feature-list" id="featureList">
                                            @foreach ($package->features as $feature)
                                                <div class="feature-item" style="border-bottom: 1px solid #a09f9f">{{ $loop->index + 1 . '. '}}{{ $feature }}</div>
                                            @endforeach
                                        </div> --}}
                                        <div id="featureList">
                                            @foreach ($package->features as $feature)
                                                <div class="feature-item"
                                                    style="border-bottom: 1px solid #a09f9f; cursor: default">
                                                    - {{ $feature }} <span
                                                        onclick="removeFeature(this, '{{ $feature }}')"><i
                                                            class="zmdi zmdi-delete text-danger float-right"
                                                            style="cursor: pointer"></i></span>


                                                    <script>
                                                        function removeFeature(element, feature) {
                                                            // Remove the feature from the array
                                                            features = features.filter(f => f !== feature);
                                                            // Update the hidden input with the new features array
                                                            document.getElementById('features').value = JSON.stringify(features);
                                                            // Remove the feature item from the DOM
                                                            element.parentElement.remove();
                                                        }
                                                    </script>
                                                </div>
                                            @endforeach
                                        </div>

                                        <input type="hidden" id="features" value="{{ json_encode($package->features) }}" name="features">
                                    </div>

                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <label for="package_description">Package Description<span
                                                class="text-danger">*</span></label>
                                        <div class="form-group" id="package_div" style="border: 1px solid #e0dddd;">
                                            <textarea name="package_description" id="package_description" class="form-control summernote">{{ $package->package_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="package_image">Package Image</label>
                                            <input type="file" name="package_image" id="package_image"
                                                class="form-control"
                                                onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ $package->package_image == null ? 'https://placehold.co/300x150' : $package->package_image }}" alt="Package Image" style="width: 150px; height: 75px;" class="rounded" id="blah1">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="package_status">Package Status<span
                                                    class="text-danger">*</span></label>
                                            <select name="package_status" id="package_status" class="form-control">
                                                <option {{ $package->package_status == 'active' ? 'selected' : '' }}
                                                    value="active">Active</option>
                                                <option {{ $package->package_status == 'inactive' ? 'selected' : '' }}
                                                    value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="visibility">Visibility<span class="text-danger">*</span></label>
                                            <select name="visibility" id="visibility" class="form-control">
                                                <option {{ $package->visibility == 'public' ? 'selected' : '' }}
                                                    value="public">Public</option>
                                                <option {{ $package->visibility == 'private' ? 'selected' : '' }}
                                                    value="private">Private</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <a type="submit" onclick="updatePackage()"
                                            class="btn btn-primary float-right text-white">Submit</a>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#discount_type').on('change', function() {
                var discountType = $(this).val();
                if (discountType == 'percentage') {
                    $('#package_discount').attr('disabled', false);
                    $('#package_discount').attr('type', 'number');
                    $('#package_discount').css('text-align', 'center');
                    $('#package_discount').val(0);
                    $('#package_discount').attr('min', 0);
                } else if (discountType == 'fixed') {
                    $('#package_discount').attr('disabled', false);
                    $('#package_discount').attr('type', 'text');
                    $('#package_discount').css('text-align', 'left');
                    $('#package_discount').val('');
                    $('#package_discount').attr('placeholder', 'Enter fixed amount');
                } else {
                    $('#package_discount').attr('type', 'text');
                    $('#package_discount').css('text-align', 'left');
                    $('#package_discount').val('');
                    $('#package_discount').attr('placeholder', 'No discount');
                    $('#package_discount').attr('disabled', true);

                }
            });
        });
    </script>

    <script>
        let features = @json($package->features);

        function addFeature() {
            const featureInput = document.getElementById('featureInput');
            const featureValue = featureInput.value.trim();

            if (featureValue) {
                features.push(featureValue);
                featureInput.value = '';
                document.getElementById('features').value = JSON.stringify(features);
                displayFeatures();
            } else {
                alert('Please enter a feature.');
            }
        }

        function displayFeatures() {
            const featureList = document.getElementById('featureList');
            featureList.innerHTML = '';

            features.forEach((feature, index) => {
                const featureItem = document.createElement('div');
                featureItem.className = 'feature-item';
                featureItem.innerHTML =
                    `- ${feature} <span onclick="removeFeature(this, '${feature}')"><i class="zmdi zmdi-delete text-danger float-right" style="cursor: pointer"></i></span>`;
                featureList.appendChild(featureItem);
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            displayFeatures();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

    <script>
        // Wait for the DOM to load before initializing Sortable
        document.addEventListener('DOMContentLoaded', function() {
            // Make the #feature-list element sortable
            new Sortable(document.getElementById('featureList'), {
                animation: 150, // Smooth animation for reordering
                ghostClass: 'sortable-ghost', // Class to apply to the dragged item
                dragClass: 'sortable-drag', // Class to apply while dragging
                onEnd: function(evt) {
                    // This event is triggered when the drag is finished.
                    // Update the features array to reflect the new order
                    const newOrder = [];
                    const items = evt.from.children;
                    for (let i = 0; i < items.length; i++) {
                        newOrder.push(items[i].textContent.trim().slice(
                            2)); // Capture new order, remove "- " prefix
                    }
                    features = newOrder;
                    document.getElementById('features').value = JSON.stringify(features);
                }
            });
        });
    </script>

    <script>
        $('.summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ],
            height: 100,
            placeholder: 'Enter package description',
        });
    </script>


    <script>
        async function updatePackage() {
            let locale = $('#locale').val();
            let package_type = $('#package_type').val();
            let month_year = $('#month_year').val();
            let package_name = $('#package_name').val();
            let currency = $('#currency').val();
            let package_price = $('#package_price').val();
            let discount_type = $('#discount_type').val();
            let package_discount = $('#package_discount').val();
            let package_duration = $('#package_duration').val();
            let billing_type = $('#billing_type').val();
            let start_date = $('#start_date').val();
            let is_featured = $('#is_featured').val();
            let end_date = $('#end_date').val();
            let package_short_description = $('#package_short_description').val();
            let features = $('#features').val();
            let package_description = $('#package_description').val();
            let image = $('#package_image')[0].files[0];
            let package_status = $('#package_status').val();
            let visibility = $('#visibility').val();

            if (locale == '' || package_type == '' || package_name == '' || currency == '' || package_price == '' ||
                billing_type == '' || features == '' || package_description == '' || package_status == '' ||
                visibility == '') {

                package_name == '' ? $('#package_name').css('border-color', 'red') : $('#package_name').css(
                    'border-color', '#ccc');
                package_price == '' ? $('#package_price').css('border-color', 'red') : $('#package_price').css(
                    'border-color', '#ccc');
                features == '' ? $('#featureInput').css('border-color', 'red') : $('#featureInput').css('border-color',
                    '#ccc');
                package_description == '' ? $('#package_div').css('border', '1px solid red') : '';

                $('#package_name').focus(function() {
                    $(this).css('border-color', '#ccc');
                });
                $('#package_price').focus(function() {
                    $(this).css('border-color', '#ccc');
                });
                $('#featureInput').focus(function() {
                    $(this).css('border-color', '#ccc');
                });
                $('#package_div').click(function() {
                    $('#package_div').css('border', '1px solid #a09f9f');
                });
                errorToast("Please fill all the required fields.");
            } else {

                const formData = new FormData();
                formData.append('locale', locale);
                formData.append('package_type', package_type);
                formData.append('year', month_year);
                formData.append('package_name', package_name);
                formData.append('currency', currency);
                formData.append('package_price', package_price);
                formData.append('discount_type', discount_type);
                formData.append('package_discount', package_discount);
                formData.append('package_duration', package_duration);
                formData.append('billing_type', billing_type);
                formData.append('start_date', start_date);
                formData.append('end_date', end_date);
                formData.append('package_short_description', package_short_description);
                formData.append('features', features);
                formData.append('package_description', package_description);
                formData.append('package_image', image);
                formData.append('package_status', package_status);
                formData.append('is_featured', is_featured);
                formData.append('visibility', visibility);

                const config = {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                };

                let url = "{{ route('dashboard.website.packages.update', $package->id) }}";

                showLoader();
                const response = await axios.post(url, formData, config);
                hideLoader();

                if (response.data.status == 'success') {
                    successToast(response.data.message);
                    setTimeout(() => {
                        window.location.href = response.data.url;
                    }, 1000);
                } else {
                    errorToast(response.data.message);
                }

            }
        }
    </script>


@endsection
