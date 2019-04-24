<?= $header; ?>
<?= $navbar; ?>
  

<?php
 
$state_list = array('35' =>'Andaman and Nicobar Islands(AN) [35]',
                   '37'=>'Andhra Pradesh(AD)[37]',
                    '12'=>'Arunachal Pradesh(AR)[12]',
                    '18'=>'Assam(AS)[18]',
                    '10'=>'Bihar(BR)[10]',
                    '04'=>'Chandigarh(CH)[04]',
                    '22'=>'Chattisgarh(CG)[22]',
                    '26'=>'Dadra and Nagar Haveli(DN)[26]',                     
                    '25'=>'Daman and Diu(DD)[25]',
                    '07'=>'Delhi(DL)[07]',
                    '30'=>'Goa(GA)[30]',
                    '24'=>'Gujarat(GJ)[24]',                      
                    '06'=>'Haryana(HR)[06]',
                    '02'=>'Himachal Pradesh(HP)[02]',
                    '01'=>'Jammu and Kashmir(JK)[01]',
                    '20'=>'Jharkhand(JH)[20]',
                    '29'=>'Karnataka(KA)[29]' ,
                    '32'=>'Kerala(KL)[32]' ,
                    '31'=>'Lakshadweep Islands(LD)[31]',
                    '23'=>'Madhya Pradesh (MP)[23]',
                    '27'=>'Maharashtra(MH)[27]',
                    '14'=>'Manipur(MN)[14]',
                    '17'=>'Meghalaya(ML)[17]',
                    '15'=>'Mizoram(MZ)[15]',
                    '13'=>'Nagaland(NL)[13]',
                    '21'=>'Odisha(OD)[21]',
                    '34'=>'Pondicherry(PY)[34]',
                    '03'=>'Punjab(PB)[03]',
                    '08'=>'Rajasthan(RJ)[08]',
                    '11'=>'Sikkim(SK)[11]',
                    '33'=>'Tamil Nadu (TN)[33]',
                    '36'=>'Telangana(TS)[36]',
                    '16'=>'Tripura(TR)[16]',
                    '09'=>'Uttar Pradesh(UP)[09]',
                    '05'=>'Uttarakhand(UK)[05]',
                    '19'=>'West Bengal(WB)[19]',
                 );


  
  ?>

        <div id="page-wrapper" class="col" style="">
            <div class="col">
                <div class="mt-3">
                    <nav aria-label="breadcrumb" style="">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('dashboard'); ?>">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('dashboard/company/'. $company_data[0]['company_id']); ?>">
                                    Company Dashboard
                                </a>
                            </li>
                            
                            <li class="breadcrumb-item">
                                <a href="#">
                                        Create Advance Adjust
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <?= $feedback; ?>

                <div id="adv_msg"></div>

                <div class="mt-3">
                <div class="row card-header">
                     
                        <h3 class="card-title"> Adv.Recv Adjust</h3>
                     
                </div>
                    <div class="col-xs col-sm-12 card card-info"><br>
                    
                        <div class="">
                             
                            <form id="create_adv_adjust" autocomplete="off" class="w-100" action="" method="post">
                                <!-- company id -->
                                <input type="hidden" name="company_id" id="company_id" value="<?= $company_data[0]['company_id']; ?>">

                                <div class="col-xs-12 col-sm-12">
                                     
                                    <div class="row">
                                         
                                           <div class="col-xs-12 col-sm-3" id="">
                                            <div class="row">
                                                <div class="form-group w-100">
                                                    <label for="user_place_of_supply">Place of Supply</label>
                                                    <select class="form-control" id="user_place_of_supply" name="user_place_of_supply">
                                                        
                                                        <option value="" selected disabled="">Select place Of Supply</option>
                                                             <?php

                                                             foreach ($state_list as $key => $value) {  
                                                                
                                                                ?>
                                                          <option value="<?= $key ?>" state_name="<?= $value?>"><?= $value?></option>
                                                          <?php       
                                                             }

                                                              ?>
                                                    </select>
                                                    <?= form_error('user_place_of_supply', '<div class="invalid-feedback">', '</div>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="col-xs-12 col-sm-3" style="display:none">
                                            <div class="row">
                                                <div class="form-group w-100">
                                                    <label for="user_state_name">Supplier Type
                                                   
                                                     <input id="user_state_name" type="hidden" name="user_state_name" class="form-control back" readonly value="">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3" id="">
                                            <div class="row">
                                                <div class="form-group w-100">
                                                    <label for="place_of_supply">Supplier Type
                                                   
                                                     <input id="user_type" type="text" name="user_type" class="form-control back" readonly value="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="w-100 border border-secondary my-2" style="background-color: lightgray">Tax Amount Details</div>
                                    </div><br>
                                    <div class="row">
                                        <input id="customer_count" type="hidden" name="customer_count" value="0"></input>
                                        <input id="invoice_product_row" type="hidden" name="invoice_product_row" value="0"></input>
                                        <div class="table-responsive my-4">
                                            <table id="adv_recv_table" class="table table-bordered">
                                                <tr id="heading_tr">
                                                    <th>#</th>
                                                    <th>TAX Rate %</th>
                                                    <th>Gross Advance Adjust</th>
                                                    <th>% CGST</th>
                                                    <th>% SGST</th>
                                                    <th>% IGST</th>
                                              
                                                    <th>Cess</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr class="product3213">
                                                    <td>1</td>
                                                     
                                                    <!-- rate -->
                                                    <td>
                                                        <input
                                                            id="tax_rate_0"
                                                            class="form-control taxRate"
                                                            type="text" 
                                                            name="adv_tax_rate[]" value=""
                                                        />
                                                         

                                                    </td>
                                                        
                                                         <!-- tax rate -->
                                                    <td>
                                                     <input
                                                            id="gross_adv_0"
                                                            class="form-control gross_adv"
                                                            type="text" 
                                                            name="gross_adv[]" value=""
                                                        />
                                                      
                                                    </td>
                                                    <!-- cgst -->
                                                    <td>
                                                        <input
                                                            id="cgst_value_0"
                                                            class="form-control cgst_tax back"
                                                            type="text" 
                                                            name="adv_cgst_value[]" value=""
                                                        />
                                                    </td>
                                                    <!-- sgst -->
                                                    <td>
                                                        <input
                                                            id="sgst_value_0"
                                                            class="form-control sgst_tax back"
                                                            type="text" 
                                                            name="adv_sgst_value[]" value=""
                                                        />
                                                    </td>
                                                    <!-- igst -->
                                                    <td>
                                                        <input
                                                            id="igst_value_0"
                                                            class="form-control igst_tax back"
                                                            type="text" 
                                                            name="adv_igst_value[]"
                                                        />
                                                    </td>
                                                     
                                                    <!-- product total -->
                                                    <td class="cess_amt">
                                                        <input
                                                            id="cess_amt_0"
                                                            class="form-control amount"
                                                            type="text"
                                                            name="adv_cess_amt[]"
                                                        />
                                                    </td>
                                                    <td style="width: 100px;">
                                                        <a id="adv_recv_add_row" class="btn btn-info btn-sm" href="#">
                                                            <i class="fa fa-plus" style="font-size:20px"></i>
                                                        </a>
                                                        <a id="adv_recv_remove_row" class="btn btn-danger btn-sm" href="#">
                                                            <i class="fa fa-trash" style="font-size:20px"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div>

                                            </div>
                                        </div>
                                    </div><br>
                     <div class="row">
                            <div class="col-xs-12 col-sm-2 col-md-2  w-100" style="">
                            <button class="btn btn-primary mb-5" type="submit" style="">
                                Submit
                            </button>
                            
                            <button class="btn btn-default mb-5" type="button" style="" onclick="back_dashboard()">
                                Back
                            </button>
                            
                        </div>
                        </div><br>
                  
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


 <?= $copyright; ?>
 <?= $footer; ?> 
<script>

APP_URL='http://localhost/clouderp/clouderp/';
 
    $(document).on("change","#user_place_of_supply",function(){
        var place_of_supply_id=$(this).val();
        var company_id=$('#company_id').val();
        
        $('#user_state_name').val($('#user_place_of_supply option:selected').attr('state_name'));
    $.ajax({
            url: APP_URL + 'gst_report/check_supplier_detail',
            type: 'post',
            data:{

                company_id:company_id,
                place_of_supply_id:place_of_supply_id,

            },
            dataType: 'html',
            // contentType : 'application/json',
            success: function(response){
          
                console.log(response);
                    var result=JSON.parse(response);
                if (result.suplier_datail) {
              
                    if(result.suplier_datail.length!==0){
                         
                        var user_code=result.suplier_datail[0].admin_state;
                     
                        if (user_code==place_of_supply_id) {
                      
                            var status='InterState';

                            $('#user_type').val(status);
                        }else if(user_code!==place_of_supply_id)
                        {
                            var status='IntraState';
                            $('#user_type').val(status);

                        }

                        }else if(result.suplier_datail.length==0){
                            alert('record Not Found.!');
                            return false;
                        }
                 
                }
                else{

                    $('#add_order_form').html("<div class='alert alert-danger fade in'>\n\
                        <button class='close' type='button' data-dismiss='alert'>x</button>\n\
                        <strong>" + response.message + "</strong></div>");
                }
                 
            },
            error: function(err){
                console.log('Some error occured', err);
            }
        });

    });




$(function(){
  
    $("#create_adv_adjust").submit(function(e){  
     let  $company_id=$('#company_id').val();
        e.preventDefault();
        e.stopPropagation();
                dataString = $("#create_adv_adjust").serialize();
                   // alert(dataString);
                 // debugger;
                $.ajax({
                 url: APP_URL+'gst_report/add_adv_adjust_detail/',
                 type: 'post',
                 data:dataString,
                 dataType: 'html',
                 success: function(res){
            
                   var result=JSON.parse(res);
                     
                if (result.status==200) {
                    $('#adv_msg').html("<div class='alert alert-success fade in'>\n\
          <button class='close' type='button' data-dismiss='alert'>x</button>\n\
          <strong>'"+result.message+"'</strong> </div>");

                window.location.href = APP_URL+'gst_report/Create_Advance_Received/'+$company_id;
                }
                else if (result.status==400) {
                    $('#adv_msg').html("<div class='alert alert-danger fade in'>\n\
                        <button class='close' type='button' data-dismiss='alert'>x</button>\n\
                        <strong>'"+result.message+"'</strong></div>");
                     
                }
                   

                 },
                 error: function(err){
                     console.log('Some error occured', err);
                }
             });

      
      });
    
    });
</script>