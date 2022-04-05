<div>
<div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <div id="v_comparetable_8519" class="ct-compare-table-group ">
                        <div  class="col-md-3 " data-special="0">
                        </div>
                        <div  class="compare-table-item col-md-6 " data-special="1">
                            <div class="compare-table-content">
                                <div class="compare-table-option">
                                    <form action="/make-payments" method="get">
                                        <input type="hidden" value="{{auth()->user()->id}}">
                                        <div style="text-align:left;">
                                        <label >Amount</label>
                                        <input type="text" name="amount" placeholder="Amount" required>
                                        </div>
                                        <div style="text-align:left;">
                                        <label>Mobile Money Phone Number</label>
                                        <input type="number" name="phone_number" placeholder="" required>
                                        </div>
                                        <div class="row text-center">
                                        <button title="Make Payments"   class="btn btn-primary bt-style-2" style="background-color:#000066;">Pay Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div  class="col-md-3 " data-special="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>