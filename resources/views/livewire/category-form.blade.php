<div>
     <form  action="/category/create-category" class="wpcf7-for" enctype="multipart/form-data">
     @csrf
        <div style="display: none;">
            <input type="hidden" name="created_by" value="{{auth()->user()->id}}">
        </div>
        <p>
            Category
            <span class="wpcf7-form-control-wrap your-email">
            <input type="text" name="category_name"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" />
            
            </span><br />
        </p>
        <hr>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
</div>
