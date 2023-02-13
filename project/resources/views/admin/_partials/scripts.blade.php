{{-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> --}}

<script type="text/javascript" src="{{ asset('assets/admin/scripts/main.js/') }}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js "></script>

<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script src="{{ asset('assets') }}/toastr/js/toastr.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/admin/scripts/custom.js/') }}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // toastr script
    @if (Session::has('message'))
        toastr.success('{{Session::get('message')}}');
    @elseif(Session::has('success'))
        toastr.success('{{Session::get('success')}}');
    @elseif(Session::has('error'))
        toastr.error('{{Session::get('error')}}');
    @endif
    
    $('.category-dropdown').on('change', function () {
    var categorySlug = $(this).val();
    $.ajax({
        type: 'post',
        url: "{{route('admin.product.subcategory')}}",
        data: {
            '_token': '{{csrf_token()}}',
            'category': categorySlug,
        },
        success: function (data) {
            //console.log(data);
            $('.subcategory-dropdown-wrapper select').remove();
            $('.subcategory-dropdown-wrapper').append(data);
        }
    });
});
</script>
@php
    Session::forget('alert-type');
    Session::forget('message');
    Session::forget('success');
    Session::forget('error');
@endphp