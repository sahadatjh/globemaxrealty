@extends('layouts.admin')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Edit Product
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>

    <div class="row pb-5">
        <div class="main-card mb-5 card col-md-8 m-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Product</h5>
                <form id="productForm" method="post" action="" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @if(Session::has('success') || Session::has('message'))
                        <script type="text/javascript">
                            $('.alert-success').remove();
                        </script>
                       <div class="alert alert-success mt-1 alert-dismissible fade show" role="alert">
                          {{Session::has('success') ? Session::get('success') : Session::get('message')}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                    @endif
                    <div class="error-success-msg-wrapper">
                        
                    </div>
                    <div class="position-relative form-group">
                        <label>Category</label>
                        <select name="category" type="text" class="required-ip form-control category-dropdown" required>
                            <option value="">--Select Category--</option>
                            @if(count($categories)>0)
                                @foreach($categories as $category)
                                    <option value="{{$category->slug}}" {{($product['category'] == $category->slug?'selected':'')}}>{{$category->category_name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label>Title</label>
                        <input name="title" type="text" class="required-ip form-control" required value="{{$product['title']}}"/>
                    </div>
                    <div class="position-relative form-group d-none">
                        <label class="">Label</label>
                        <input name="label" type="text" class="required-ip form-control" value="none"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Property Id</label>
                        <input name="property_id" type="text" class="required-ip form-control" value="{{$product['property_id']}}"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Price</label>
                        <input name="price" type="number" class="required-ip form-control" value="{{$product['price']}}"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Size (Sq. Ft)</label>
                        <input name="size" type="number" class="required-ip form-control" value="{{$product['size']}}"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Description</label>
                        <textarea name="short_description" class="required-ip form-control">{{$product['description']}}</textarea>
                    </div>

                    {{-- Address --}}
                    <div class="mt-5">
                        <hr>
                        <h3 class="mb-3">Address Section</h3>
                        <hr>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Map Link</label>
                        <input name="map_link" type="text" class="required-ip form-control" value="{{$product['map_link']}}"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Address</label>
                        <textarea name="address" class="required-ip form-control">{{$product['address']}}</textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">City</label>
                        <input name="city" type="text" class="required-ip form-control" value="{{$product['city']}}"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">State</label>
                        <input name="state" type="text" class="required-ip form-control" value="{{$product['state']}}"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Zip</label>
                        <input name="zip" type="text" class="required-ip form-control" value="{{$product['zip']}}"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Country</label>
                        <input name="country" type="text" class="required-ip form-control" value="{{$product['country']}}"/>
                    </div>


                    {{-- Details Section --}}
                    <div class="mt-5">
                        <hr>
                        <h3 class="mb-3">Details Section</h3>
                        <hr>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Bedrooms</label>
                        <input name="bedrooms" type="text" class="required-ip form-control" value="{{$product['bedrooms']}}"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Bathrooms</label>
                        <input name="bathrooms" type="text" class="required-ip form-control" value="{{$product['bathrooms']}}"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Garage</label>
                        <input name="garage" type="text" class="required-ip form-control" value="{{$product['garage']}}"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Garage Size (Sq. Ft)</label>
                        <input name="garage_size" type="number" class="required-ip form-control" value="{{$product['garage_size']}}"/>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Year Built</label>
                        <input name="year_built" type="date" class="required-ip form-control" value="{{ date("Y-m-d", strtotime($product['year_built'])) }}"/>
                    </div>

                    <div class="position-relative form-group border-0 mb-0">
                        <label class="mb-0">Image</label>
                        <div class="avatar-upload top-photo d-flex">
                            <div class="avatar-edit"></div>
                            @if(count($product->productImages) > 0)
                                @foreach($product->productImages as $pImage)
                                    <div class="single-product-image-prev-item" data-id="{{ $pImage->id }}">
                                        <span class="sp-image-remove">
                                            <i class="fas fa-times-circle"></i>
                                        </span>
                                        <div class="avatar-image-preview" id="productCoverPrev" style="background-image: url({{ asset($pImage->product_image) }});"></div>
                                        @if($pImage->default_image == 1)
                                        <span class="sp-default-img">Cover</span>
                                        @endif
                                    </div>
                                @endforeach 
                            @endif
                        </div>
                    </div>
                    <div class="position-relative form-group border-0 mb-5">
                        <div class="avatar-upload top-photo">
                            <small class="form-text text-muted mt-0">File Size Must Be Less Than 1 MB</small>
                            <div class="product-cover-photo-items-wrapper">
                                <div class="product-cover-photo">
                                    <input class="p-cover-photo" type="file" accept=".jpg,.png,.jpeg" name="product_image[]">
                                    <div class="check-wrapper">
                                        <input class="product-cover-default-checkbox" type="checkbox" name="default_image[]" checked>
                                        <div class="box"></div>
                                        <label>Make As Default</label>
                                    </div>
                                    <div class="p-image-new-item-add-btn"><i class="fas fa-plus"></i>Add New</div>
                                </div>
                            </div>                                
                        </div>
                    </div>

                    <div class="position-relative form-group">
                        <label class="">Additional Details</label>
                        <textarea name="additional_details" id="HCKEditor1" class="required-ip form-control">{!!$product['additional_details']!!}</textarea>
                    </div>

                    <div class="position-relative form-group">
                        <label class="">Features</label>
                        <textarea name="features" id="HCKEditor3" class="required-ip form-control">{!!$product['features']!!}</textarea>
                    </div>
                    
                    {{-- Floor Plans --}}
                    <div class="mt-5">
                        <hr>
                        <h3 class="mb-3">Floor Plans</h3>
                        <hr>
                    </div>
                    <div class="section-content-box-wrapper" id="BTSecOne">
                        <div class="sec-blog-add-btn mb-3 btn btn-secondary">Add More <i class="fas fa-plus"></i></div>
                        @if(count($product->productFloorPlans) > 0)
                        @foreach($product->productFloorPlans as $key => $pFloorPlan)
                            <div class="section-content-box">
                                <div class="top-box">
                                    <h5 class="main-title">Floor Plan <span>{{$key+1}}</span></h5>
                                    <div class="btn-wrapper">
                                        <div class="sec-blog-add-btn"><i class="fas fa-plus"></i></div>
                                        <div class="sec-blog-del-btn" data-id="{{$pFloorPlan->id}}"><i class="fas fa-trash"></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="">Floor Title</label>
                                    <input name="floor_plan_id[]" type="hidden" class="required-ip form-control" value="{{$pFloorPlan->id}}" />
                                    <input name="floor_title[]" type="text" class="required-ip form-control" value="{{$pFloorPlan->floor_title}}" />
                                </div>
                                <div class="form-group">
                                    <label class="">Description</label>
                                    <textarea id="serviceCKEditor{{$key+1}}" name="floor_description[]" class="required-ip form-control ckeditor-ele" >{!!$pFloorPlan->description!!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="">Price</label>
                                    <input name="floor_price[]" type="number" class="required-ip form-control" value="{{$pFloorPlan->price}}" />
                                </div>
                                <div class="form-group">
                                    <label class="">Image</label>
                                    <input name="floor_image[]" type="file" accept=".jpg,.png,.jpeg" class=" form-control" value=""/>
                                    @if($pFloorPlan->image)
                                        <div class="">
                                            <img width="150" src="{{asset($pFloorPlan->image)}}">
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="">Short Info</label>
                                    <textarea name="floor_info[]" class="required-ip form-control" >{{$pFloorPlan->info}}</textarea>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>

                    {{-- Video --}}
                    <div class="mt-5">
                        <hr>
                        <h3 class="mb-3">Video</h3>
                        <hr>
                    </div>
                    <div class="extra-price-add-btn btn btn-secondary btn-sm mb-3">Add New</div>
                    <div class="extra-price-add-wrapper">
                        @if($product['video'])
                        @foreach($product['video'] as $pVideo)
                            <div class="item d-flex align-items-center mb-3">
                                <div class="form-group w-100 mb-0">
                                    <input name="video[]" type="text" class="required-ip form-control" required placeholder="Video Link" value="{{$pVideo}}" />
                                </div>
                                <div class="add-more-price-btn extra-price-add-btn"><i class="fas fa-plus"></i></div>
                                <div class="remove-more-price-btn"><i class="fas fa-minus"></i></div>
                            </div>
                            @endforeach
                        @endif
                    </div>

                    {{-- Contact Info --}}
                    <div class="mt-5">
                        <hr>
                        <h3 class="mb-3">Contact Info</h3>
                        <hr>
                    </div>
                    {{-- <div class="position-relative form-group">
                        <label class="">Contact Mail</label>
                        <input name="contact_mail" type="email" class="required-ip form-control" value="{{$product['contact_mail']}}"/>
                    </div> --}}
                    <div class="form-group">
                        <label class="">Contact Info</label>
                        <textarea id="HCKEditor2" name="contact_info" class="required-ip form-control" >{!!$product['contact_info']!!}</textarea>
                    </div>

                    <div class="position-relative form-group">
                        <label>Publish</label>
                        <select name="status" class="required-ip form-control" required>
                            <option value="1" {{($product['status']==1)?'selected':''}}>Publish</option>
                            <option value="0" {{($product['status']==0)?'selected':''}}>Unpublish</option>
                        </select>
                    </div>
                    
                    <br>
                    <div class="d-flex justify-content-center pt-4">
                        <button class="mt-1 btn btn-primary" id="productSubmitBtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="product-insert-loader" style="display: none">
    <div class="background-blur"></div>
    <img src="{{asset('assets/spiner-loader.gif')}}">
</div>
<script>

    

    setTimeout(function(){
        $('.ckeditor-ele').each(function(){
            var ckEditor = $(this).attr('id');
            CKEDITOR.replace( ckEditor );
        })
    },1000)
    
    // Service Section One Blog Add
    $(document).on('click','#BTSecOne .sec-blog-add-btn',function(){
        var thisParent = $(this).closest('.section-content-box-wrapper');
        var number = $('#BTSecOne .section-content-box').last().find('.top-box .main-title span').text();
        if(number.length > 0){
            number = parseInt(number)+1;
            ckEditor = 'serviceCKEditor'+number;
        }else{
            number = parseInt(1);
            ckEditor = 'serviceCKEditor1';
        }
        //console.log(number);
        var content =   '<div class="section-content-box">\
                            <div class="top-box">\
                                <h5 class="main-title">Floor Plan <span>'+number+'</span></h5>\
                                <div class="btn-wrapper">\
                                    <div class="sec-blog-add-btn"><i class="fas fa-plus"></i></div>\
                                    <div class="sec-blog-del-btn"><i class="fas fa-trash"></i></div>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label class="">Floor Title</label>\
                                <input name="floor_title[]" type="text" class="required-ip form-control" value="" />\
                            </div>\
                            <div class="form-group">\
                                <label class="">Description</label>\
                                <textarea id="'+ckEditor+'" name="floor_description[]" class="required-ip form-control" ></textarea>\
                            </div>\
                            <div class="form-group">\
                                <label class="">Price</label>\
                                <input name="floor_price[]" type="number" class="required-ip form-control" value="" />\
                            </div>\
                            <div class="form-group">\
                                <label class="">Image</label>\
                                <input name="floor_image[]" type="file" accept=".jpg,.png,.jpeg" class="required-ip form-control" value="" />\
                            </div>\
                            <div class="form-group">\
                                <label class="">Short Info</label>\
                                <textarea name="floor_info[]" class="required-ip form-control" ></textarea>\
                            </div>\
                        </div>';

        thisParent.append(content);
        CKEDITOR.replace( ckEditor );
        var lastContent = $(this).closest('.section-content-box-wrapper').find('.section-content-box').last();
        theOffset = lastContent.offset();
        $('body,html').animate({
            scrollTop: theOffset.top - 150
        },600);
    });


    //Service Blog Remove
    $(document).on('click','.sec-blog-del-btn',function(){
        var contentBox = $(this).closest('.section-content-box');
        var attr = $(this).attr('data-id');
        if( typeof attr !== 'undefined' && attr !== false ){
            var thisId = attr;
            $.ajax({
                type:'get',
                url:"{{route('admin.floor-plan.delete')}}",
                data: {id : thisId},
                success: function (data){
                    //console.log(data);
                    if(data.success == 1){
                        contentBox.hide('500');
                        setTimeout(function(){
                            contentBox.remove();
                        },1000);
                        toastr.success(data.message);
                    }else if(data.success == 0){
                        toastr.error(data.message);
                    }
                }
            });
        }else{
            contentBox.hide('500');
            setTimeout(function(){
                contentBox.remove();
            },1000);
        }
    });


    //Extra Price Item Add 
    $(document).on('click','.extra-price-add-btn', function(){
        $('.extra-price-add-wrapper').append('<div class="item d-flex align-items-center mb-3">\
                <div class="form-group w-100 mb-0">\
                    <input name="video[]" type="text" class="required-ip form-control" required placeholder="Video Link"/>\
                </div>\
                <div class="add-more-price-btn extra-price-add-btn"><i class="fas fa-plus"></i></div>\
                <div class="remove-more-price-btn"><i class="fas fa-minus"></i></div>\
            </div>');
    });
    //Extra Price Item Remove
    $(document).on('click','.remove-more-price-btn', function(){
        $(this).closest('.item.d-flex').remove();
    });


    // Product Insert Validation check
    $(document).on('keyup change','.required-ip',function(){
        var thisParent = $(this).closest('.form-group');
        var thisVal = $(this).val();
        if(thisVal.length <= 0){
            thisParent.find('span.text-danger').remove();
            thisParent.append('<span class="text-danger">This field is required</span>');
        }else{
            thisParent.find('span.text-danger').remove();
        }
    });

    //Product Ajax store with validation
    $('#productForm').submit(function(e){
        e.preventDefault();
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var status = true;
        $('.required-ip').each(function(){
            var thisParent = $(this).closest('.form-group');
            var thisVal = $(this).val();
            if(thisVal.length <= 0){
                $('.required-ip').removeClass('required-active');
                $(this).addClass('required-active');
                return status = false;
            }
        });
        if(status == false){
            $('.required-ip').each(function(){
                var thisParent = $(this).closest('.form-group');
                var thisVal = $(this).val();
                if(thisVal.length <= 0){
                    $('.alert-success').remove();
                    thisParent.find('span.text-danger').remove();
                    thisParent.append('<span class="text-danger">This field is required</span>');
                }
            });
            theOffset = $(".required-active").offset();
            $('body,html').animate({
                scrollTop: theOffset.top - 150
            });
            //$(".required-active").animate({ scrollTop: 0 }, 600);
        }else{
            $('.product-insert-loader').show();
            //var formData = $('#productForm').serialize();
            var formData = new FormData( this );
            console.log(formData);
            $.ajax({
                type:'post',
                url:"{{route('admin.product-update.ajax', $product['id'])}}",
                data: formData,
                cache : false,
                processData: false,
                contentType: false,
                success: function (data){
                    console.log(data);
                    if(data.error){
                        $('#productForm .error-success-msg-wrapper').append('<div class="alert alert-warning alert-dismissible fade show" role="alert">\
                                '+data.error+'\
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                    <span aria-hidden="true">&times;</span>\
                                </button>\
                            </div>');
                        $('.alert-success').remove();
                        toastr.error(data.error);
                        $('.product-insert-loader').hide();
                        $("html, body").animate({ scrollTop: 0 }, 600);
                    }else if(data.success){
                        $('.alert-success').remove();
                        $('.product-insert-loader').hide();
                        $("html, body").animate({ scrollTop: 0-200 }, 600);
                        setTimeout(function(){
                            location.reload(); 
                        },1000);
                    }
                }
            });
        }
    });
</script>



<script type="text/javascript">
    $("form").submit( function(e) {
        if($('.p-description.required').length > 0){
            var messageLength = CKEDITOR.instances['description'].getData().replace(/<[^>]*>/gi, '').length;
            if( !messageLength ) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: $(".p-description.required").parent().offset().top-100},
                'slow');
                $('.p-description .required-msg').remove();
                $('.p-description #cke_description').after('<span class="required-msg">Field Is Required</span>')
                setTimeout(function(){
                    $('.p-description span.required-msg').fadeOut("slow");
                },2000)
                
            }
        }
    });

    $(document).on('click','.sp-image-remove', function(e){
        var thisParent = $(this).closest('.single-product-image-prev-item');
        var thisId = thisParent.attr('data-id');
        $.ajax({
            type:'get',
            url:"{{route('admin.product-image.delete')}}",
            data: {id : thisId},
            success: function (data){
                console.log(data);
                if(data.success == 1){
                    thisParent.remove();
                    if(data.is_default == 1){
                        $('.single-product-image-prev-item').last().append('<span class="sp-default-img">Cover</span>');
                    }
                }
            }
        });
    });
</script>
@stop