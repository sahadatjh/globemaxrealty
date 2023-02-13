<select name="subcategory" type="text" class="form-control" required>
    <option value="">--Select Subcategory--</option>
    @if(count($subcategories)>0)
        @foreach($subcategories as $subcategory)
            <option value="{{$subcategory->slug}}" {{(old('subcategory')==$subcategory->slug)?'selected':''}}>{{$subcategory->subcategory_name}}</option>
        @endforeach
    @endif
</select>